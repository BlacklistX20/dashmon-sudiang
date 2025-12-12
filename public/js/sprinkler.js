const ARDUINO_IP = "http://192.168.10.177";
const POLL_INTERVAL = 2000; // Check every 2 seconds

// State tracking to prevent loop updates while user is clicking
let isUserInteracting = false; 

// DOM Elements
const connStatusEl = document.getElementById('connStatus');
const pumpCardEl = document.getElementById('pumpStatusCard');
const pumpTextEl = document.getElementById('pumpText');
const switches = [
    document.getElementById('valve1'),
    document.getElementById('valve2'),
    document.getElementById('valve3')
];
const loadingOverlay = document.getElementById('loadingOverlay');

/**
 * Fetches current status from Arduino
 */
async function checkStatus() {
    // Don't update UI from polling if user is currently toggling a switch
    if (isUserInteracting) return;

    try {
        // Fetch with a timeout to prevent hanging
        const controller = new AbortController();
        const timeoutId = setTimeout(() => controller.abort(), 1500);

        const response = await fetch(ARDUINO_IP, { signal: controller.signal });
        clearTimeout(timeoutId);

        if (!response.ok) throw new Error("HTTP Error");

        const data = await response.json(); 
        // Expected data format: {"v1":0, "v2":0, "v3":0, "p":0}

                updateUI(data);
    } catch (error) {
                console.error("Connection failed:", error);
                setConnectionStatus(false);
    }
}

/**
 * Updates the HTML elements based on JSON data
 */
function updateUI(data) {
    setConnectionStatus(true);

    // Update Pump UI
    if (data.p == 1) {
        pumpCardEl.classList.remove('bg-danger');
        pumpCardEl.classList.add('bg-success');
        pumpTextEl.textContent = "Pompa On";
    } else {
        pumpCardEl.classList.remove('bg-success');
        pumpCardEl.classList.add('bg-danger');
        pumpTextEl.textContent = "Pompa Off";
    }

    // Update Switches (only if they differ to avoid jitter)
    updateSwitchIfChanged(switches[0], data.v1);
    updateSwitchIfChanged(switches[1], data.v2);
    updateSwitchIfChanged(switches[2], data.v3);
}

function updateSwitchIfChanged(element, value) {
    const shouldBeChecked = (value == 1);
    if (element.checked !== shouldBeChecked) {
        element.checked = shouldBeChecked;
    }
}

function setConnectionStatus(isConnected) {
    if (isConnected) {
        connStatusEl.className = "badge bg-success";
        connStatusEl.textContent = "Connected";
    } else {
        connStatusEl.className = "badge bg-danger";
        connStatusEl.textContent = "Disconnected / Error";
    }
}

/**
 * Handles the user clicking a switch
 * Implements Mutual Exclusion logic
 */
async function handleValveChange(targetIndex, targetElement) {
    isUserInteracting = true;
    loadingOverlay.style.display = 'flex'; // Show loader

    const isTurningOn = targetElement.checked;
    
    try {
        if (isTurningOn) {
            // Logic: Turn OFF any other active switch FIRST
            for (let i = 0; i < switches.length; i++) {
                if (i !== targetIndex && switches[i].checked) {
                    // Visually turn off immediately
                    switches[i].checked = false; 
                    // Send command to turn off
                    await sendCommand(i, 0); 
                }
            }
                    
            // Now turn ON the target switch
            await sendCommand(targetIndex, 1);
        } else {
            // Just turning off the current switch
            await sendCommand(targetIndex, 0);
        }

        // After operations, fetch fresh status to confirm
        await checkStatus();

    } catch (err) {
        console.error("Error controlling valve:", err);
        alert("Failed to communicate with Arduino.");
        // Revert switch state on error
        targetElement.checked = !isTurningOn;
    } finally {
        loadingOverlay.style.display = 'none';
        isUserInteracting = false;
    }
}

/**
 * Sends command to Arduino
 * URL: http://192.168.10.177/set?v={index}&s={status}
 */
async function sendCommand(valveIndex, status) {
    const url = `${ARDUINO_IP}/set?v=${valveIndex}&s=${status}`;
    const response = await fetch(url);
    if (!response.ok) throw new Error("Failed to set valve");
}

// Start Polling
setInterval(checkStatus, POLL_INTERVAL);

// Initial Check
checkStatus();