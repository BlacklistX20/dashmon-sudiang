<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="main-wrap" class="container-fluid mx-3 py-3">
  
<h1 class="text-center mb-4">Water Control System</h1>
    
    <!-- ROW 1: Connection Status -->
    <div class="row mb-3">
        <div class="col-12">
            <div class="control-card d-flex justify-content-between align-items-center">
                <h2 class="m-0">Arduino Connection</h2>
                <h2><span id="connection-status" class="badge bg-secondary">Connecting...</span></h2>
            </div>
        </div>
    </div>

    <!-- ROW 2: Water Pump Status -->
    <div class="row mb-3">
        <div class="col-12">
            <div class="control-card">
                <div id="pump-status-container" class="pump-off">
                    Pompa Off
                </div>
            </div>
        </div>
    </div>

    <!-- ROW 3: Valves -->
    <div class="row">
        <!-- Valve 1 -->
        <div class="col-md-4 col-12 mb-3">
            <div class="control-card">
                <h5>Valve 1</h5>
                <div class="switch-container">
                    <label class="switch">
                        <input type="checkbox" id="valve-1" onchange="handleValveChange(0, this)">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Valve 2 -->
        <div class="col-md-4 col-12 mb-3">
            <div class="control-card">
                <h5>Valve 2</h5>
                <div class="switch-container">
                    <label class="switch">
                        <input type="checkbox" id="valve-2" onchange="handleValveChange(1, this)">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Valve 3 -->
        <div class="col-md-4 col-12 mb-3">
            <div class="control-card">
                <h5>Valve 3</h5>
                <div class="switch-container">
                    <label class="switch">
                        <input type="checkbox" id="valve-3" onchange="handleValveChange(2, this)">
                        <span class="slider"></span>
                    </label>
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
    
    // State tracking
    // Map index 0->v1, 1->v2, 2->v3
    let valveStates = [0, 0, 0]; 
    let isRequestInProgress = false;

    // DOM Elements
    const connectionBadge = document.getElementById('connection-status');
    const pumpContainer = document.getElementById('pump-status-container');
    const valveInputs = [
        document.getElementById('valve-1'),
        document.getElementById('valve-2'),
        document.getElementById('valve-3')
    ];

    /**
     * Polling Function
     * Fetch status from Arduino every 2 seconds
     */
    async function checkStatus() {
        // Don't poll if user is actively clicking switches to prevent race conditions
        if(isRequestInProgress) return; 

        try {
            // Using AbortController to timeout request if Arduino is down
            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 1500);

            const response = await fetch(ARDUINO_IP, { 
                signal: controller.signal,
                method: 'GET'
            });
            clearTimeout(timeoutId);

            if (!response.ok) throw new Error("Network response was not ok");

            const data = await response.json();
            // Expected data: {"v1":0, "v2":0, "v3":0, "p":0}

            updateUI(data);
            setConnectionStatus(true);

        } catch (error) {
            console.error("Polling error:", error);
            setConnectionStatus(false);
        }
    }

    /**
     * Updates the UI based on JSON data
     */
    function updateUI(data) {
        // Update Pump Status
        if (data.p === 1) {
            pumpContainer.textContent = "Pompa On";
            pumpContainer.className = "pump-on";
        } else {
            pumpContainer.textContent = "Pompa Off";
            pumpContainer.className = "pump-off";
        }

        // Update Valve Switches
        // We update internal state and DOM checked property
        const remoteStates = [data.v1, data.v2, data.v3];
        
        valveInputs.forEach((input, index) => {
            const isOn = remoteStates[index] === 1;
            input.checked = isOn;
            valveStates[index] = remoteStates[index];
        });
    }

    /**
     * Handle UI visual for connection
     */
    function setConnectionStatus(isConnected) {
        if (isConnected) {
            connectionBadge.textContent = "Connected";
            connectionBadge.className = "badge bg-success";
        } else {
            connectionBadge.textContent = "Disconnected";
            connectionBadge.className = "badge bg-danger";
        }
    }

    /**
     * Handle Valve Click
     * Implements mutual exclusivity logic
     */
    async function handleValveChange(targetValveIndex, checkboxElement) {
        isRequestInProgress = true;
        
        // Disable all inputs temporarily
        valveInputs.forEach(input => input.disabled = true);

        const isTurningOn = checkboxElement.checked;

        try {
            if (isTurningOn) {
                // Logic: Only one active.
                // Check if any other valve is currently ON
                const activeValveIndex = valveStates.findIndex(state => state === 1);

                if (activeValveIndex !== -1 && activeValveIndex !== targetValveIndex) {
                    // Turn off the currently active valve first
                    console.log(`Turning off active valve ${activeValveIndex + 1} first...`);
                    await sendCommand(activeValveIndex, 0);
                    valveInputs[activeValveIndex].checked = false; // Optimistic UI update
                    valveStates[activeValveIndex] = 0;
                }

                // Turn on the target valve
                console.log(`Turning on valve ${targetValveIndex + 1}...`);
                await sendCommand(targetValveIndex, 1);
                valveStates[targetValveIndex] = 1;

            } else {
                // Simple Turn Off
                console.log(`Turning off valve ${targetValveIndex + 1}...`);
                await sendCommand(targetValveIndex, 0);
                valveStates[targetValveIndex] = 0;
            }

        } catch (error) {
            console.error("Command failed", error);
            // Revert the checkbox to its previous state on error
            checkboxElement.checked = !isTurningOn;
            alert("Failed to communicate with Arduino. Check connection.");
        } finally {
            // Re-enable inputs
            valveInputs.forEach(input => input.disabled = false);
            isRequestInProgress = false;
        }
    }

    /**
     * Send command to Arduino
     * URL: http://192.168.10.177/set?v={index}&s={state}
     * v=0 for v1, v=1 for v2, etc.
     */
    async function sendCommand(valveIndex, state) {
        const url = `${ARDUINO_IP}/set?v=${valveIndex}&s=${state}`;
        
        // Note: fetch mode 'no-cors' might be needed if Arduino doesn't send CORS headers,
        // but 'no-cors' prevents reading response. Assuming Arduino handles CORS or simple GET.
        await fetch(url, { method: 'GET' });
    }

    // Start Polling Loop (Every 2 seconds)
    setInterval(checkStatus, 2000);
    
    // Initial check
    checkStatus();
</script>
<?= $this->endSection(); ?>