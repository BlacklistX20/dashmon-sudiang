<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="main-wrap" class="container-fluid mx-3 py-3">
  
<h1 class="text-center mb-4">Water Control System</h1>
    
<div id="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<div class="container">
    <!-- Row 1: Connection Status -->
    <div class="row">
        <div class="col-12">
            <div class="card status-card">
                <h5>Connection Status</h5>
                <div id="connStatus" class="connection-status text-secondary">Checking...</div>
            </div>
        </div>
    </div>

    <!-- Row 2: Water Pump Status -->
    <div class="row">
        <div class="col-12">
            <div id="pumpContainer" class="status-card pump-status pump-off">
                Pompa Off
            </div>
        </div>
    </div>

    <!-- Row 3: Valves -->
    <div class="row justify-content-center mt-4">
        <!-- Valve 1 -->
        <div class="col-md-4 col-sm-12">
            <div class="card p-3 mb-3 text-center">
                <div class="switch-container">
                    <div class="switch-title">Valve 1</div>
                    <label class="toggle-switch">
                        <input type="checkbox" id="v0" onchange="handleSwitchChange(0, this)">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Valve 2 -->
        <div class="col-md-4 col-sm-12">
            <div class="card p-3 mb-3 text-center">
                <div class="switch-container">
                    <div class="switch-title">Valve 2</div>
                    <label class="toggle-switch">
                        <input type="checkbox" id="v1" onchange="handleSwitchChange(1, this)">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Valve 3 -->
        <div class="col-md-4 col-sm-12">
            <div class="card p-3 mb-3 text-center">
                <div class="switch-container">
                    <div class="switch-title">Valve 3</div>
                    <label class="toggle-switch">
                        <input type="checkbox" id="v2" onchange="handleSwitchChange(2, this)">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>

</div>
<!--Container Main end-->

<!-- Custom JS -->
<script>
// Configuration
const ARDUINO_IP = "http://192.168.10.177";
const POLL_INTERVAL = 3600000; // 1 hour in milliseconds
const REQUEST_TIMEOUT = 30000; // 30 seconds timeout to prevent freezing

// State
let isRequestPending = false; 

// DOM Elements
const connStatusEl = document.getElementById('connStatus');
const pumpContainer = document.getElementById('pumpContainer');
const valves = [
    document.getElementById('v0'), // Valve 1 (v=0)
    document.getElementById('v1'), // Valve 2 (v=1)
    document.getElementById('v2')  // Valve 3 (v=2)
];

/**
 * Main function to fetch status from Arduino
 */
async function fetchStatus() {
    if (isRequestPending) return; // Prevent overlapping requests
    
    updateConnectionUI("Connecting...", "text-warning");
    isRequestPending = true;

    const controller = new AbortController();
    const timeoutId = setTimeout(() => controller.abort(), REQUEST_TIMEOUT);

    try {
        // Fetch from root as per requirement 3
        const response = await fetch(`${ARDUINO_IP}/`, {
            method: 'GET',
            signal: controller.signal,
            // mode: 'cors' // Arduino MUST support CORS for this to work in a browser
        });

        clearTimeout(timeoutId);

        if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);

        const data = await response.json(); 
        // Expecting format: {"v1":0, "v2":0, "v3":0, "p":0}
                
        updateUI(data);
        updateConnectionUI("Connected", "text-success");

    } catch (error) {
        console.error("Fetch Error:", error);
        updateConnectionUI("Disconnected / Error", "text-danger");
    } finally {
        isRequestPending = false;
    }
}

/**
 * Updates the HTML elements based on JSON data
 */
function updateUI(data) {
    // Update Pump Status
    const isPumpOn = parseInt(data.p) === 1;
    if (isPumpOn) {
        pumpContainer.classList.remove('pump-off');
        pumpContainer.classList.add('pump-on');
        pumpContainer.innerText = "Pompa On";
    } else {
        pumpContainer.classList.remove('pump-on');
        pumpContainer.classList.add('pump-off');
        pumpContainer.innerText = "Pompa Off";
    }
    // Map JSON keys v1, v2, v3 to array indices 0, 1, 2
    const serverStates = [parseInt(data.v1), parseInt(data.v2), parseInt(data.v3)];
    
    // Check if any valve is currently ON
    const isAnyValveOn = serverStates.includes(1);
    // Update Switches
    valves.forEach((checkbox, index) => {
        const isOn = serverStates[index] === 1;
        
        // Set checked state without triggering 'onchange' event
        checkbox.checked = isOn;

        // Requirement 5: Disable other switches if one is active
        if (isAnyValveOn && !isOn) {
            checkbox.disabled = true;
        } else {
            checkbox.disabled = false;
        }
    });
}

/**
* Handle user clicking a switch
*/
async function handleSwitchChange(valveIndex, checkbox) {
    if (isRequestPending) {
        // Revert change if busy
        checkbox.checked = !checkbox.checked;
        alert("System is busy, please wait.");
        return;
    }

    const newState = checkbox.checked ? 1 : 0;
    
    // Optimistic UI Update: Lock UI immediately
    document.getElementById('loader').style.display = 'flex';
    
    isRequestPending = true;
    const controller = new AbortController();
    const timeoutId = setTimeout(() => controller.abort(), REQUEST_TIMEOUT);

    try {
        // Construct URL: http://192.168.10.177/set?v=0&s=1
        const url = `${ARDUINO_IP}/set?v=${valveIndex}&s=${newState}`;
                
        const response = await fetch(url, {
            method: 'GET',
            signal: controller.signal
        });
                
        clearTimeout(timeoutId);

        if (!response.ok) throw new Error("Command failed");

        // Wait a brief moment for Arduino logic to settle, then fetch full status
        // This ensures we get the correct "Pump" status and locked states for other valves
        setTimeout(async () => {
            isRequestPending = false; // Release lock for the fetchStatus call
            await fetchStatus();
            document.getElementById('loader').style.display = 'none';
        }, 500);

    } catch (error) {
        console.error("Control Error:", error);
        alert("Failed to communicate with Arduino.");
        // Revert the switch visually on error
        checkbox.checked = !checkbox.checked;
        isRequestPending = false;
        document.getElementById('loader').style.display = 'none';
    }
}

function updateConnectionUI(text, colorClass) {
    connStatusEl.innerText = text;
    connStatusEl.className = `connection-status ${colorClass}`;
}

// Initialize
window.addEventListener('DOMContentLoaded', () => {
    // Initial check
    fetchStatus();

    // Requirement 6: Check every 5 minutes
    // setInterval(fetchStatus, POLL_INTERVAL);
});
</script>
<?= $this->endSection(); ?>