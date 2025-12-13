<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="main-wrap" class="container-fluid mx-1 py-1">
  
<h2 class="text-center mb-4">Water Control System</h2>
    
    <!-- ROW 1: Connection Status -->
    <div class="row mb-3">
        <div class="col-12">
            <div class="control-card d-flex justify-content-between align-items-center">
                <h5 class="m-0">Arduino Connection</h5>
                <span id="connection-status" class="badge bg-secondary">Connecting...</span>
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
<script type="module" src="<?= base_url('js/sprinkler.js'); ?>"></script>
<?= $this->endSection(); ?>