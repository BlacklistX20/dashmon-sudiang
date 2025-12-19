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

    // --- Helper Baru: Mengatur Disable/Enable Tombol ---
    function updateInputAvailability() {
        // Cari apakah ada valve yang sedang ON (status 1)
        const activeIndex = valveStates.findIndex(state => state === 1);

        valveInputs.forEach((input, index) => {
            if (activeIndex === -1) {
                // Jika TIDAK ADA yang nyala, SEMUA tombol bisa diklik (enable)
                input.disabled = false;
            } else {
                // Jika ADA yang nyala:
                if (index === activeIndex) {
                    // Tombol yang sedang nyala tetap enable (supaya bisa dimatikan)
                    input.disabled = false;
                } else {
                    // Tombol sisanya di-disable (dikunci)
                    input.disabled = true;
                }
            }
        });
    }

    /**
     * Update UI dari data Server
     */
    function updateUI(data) {
        // Update Status Pompa
        if (data.p === 1) {
            pumpContainer.textContent = "Pompa On";
            pumpContainer.className = "pump-on";
        } else {
            pumpContainer.textContent = "Pompa Off";
            pumpContainer.className = "pump-off";
        }

        // Update Toggle Switch
        const remoteStates = [data.v1, data.v2, data.v3];

        valveInputs.forEach((input, index) => {
            const isOn = remoteStates[index] === 1;
            input.checked = isOn;
            valveStates[index] = remoteStates[index];
        });

        // PENTING: Panggil fungsi locking setelah data terupdate
        updateInputAvailability();
    }

    /**
     * Handle Valve Click (Revisi: Locking Mode)
     */
    async function handleValveChange(targetValveIndex, checkboxElement) {
        // 1. Kunci UI sementara request berjalan (supaya user tidak spam klik)
        isRequestInProgress = true;
        valveInputs.forEach(input => input.disabled = true); 

        const isTurningOn = checkboxElement.checked;

        try {
            // Logika Sederhana: Hanya kirim perintah untuk tombol yang diklik
            // Tidak perlu mematikan valve lain, karena valve lain pasti sudah disable/mati
            
            const newState = isTurningOn ? 1 : 0;
            console.log(Sending command: Valve ${targetValveIndex + 1} -> ${newState});
            
            await sendCommand(targetValveIndex, newState);
            
            // Update state internal jika sukses
            valveStates[targetValveIndex] = newState;

        } catch (error) {
            console.error("Command failed", error);
            // Jika gagal, kembalikan tampilan checkbox ke posisi semula
            checkboxElement.checked = !isTurningOn;
            alert("Gagal komunikasi dengan Arduino.");
        } finally {
            isRequestInProgress = false;
            
            // 2. Buka kunci UI sesuai logika "Satu Nyala = Yang Lain Mati"
            updateInputAvailability(); 
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

    // Start Polling Loop (Every 60 seconds)
    setInterval(checkStatus, 60000);
    
    // Initial check
    checkStatus();
</script>
<?= $this->endSection(); ?>