<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="main-wrap" class="container-fluid mx-1 py-1">
  <div id="head-wrap" class="row my-2">
    <div class="col-6 text-start">
      <h2 class="fw-bold">Sprinkler <i id="vol-icon" class="bx bx-volume-mute"></i></h2>
    </div>
    <div class="col-6 text-end">
      <h2 id="time" class="fw-bold"></h2>
      <h4 id="date"></h4>
    </div>
  </div>

  <!-- Loading Spinner when switching -->
    <div id="loadingOverlay">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-center mb-4">Water Control System</h2>

        <!-- Row 1: Connection Status -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center" id="connectionContainer">
                        <span class="fw-bold">Arduino Connection:</span>
                        <span id="connStatus" class="badge bg-secondary">Checking...</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2: Pump Status -->
        <div class="row mb-4">
            <div class="col-12">
                <div id="pumpStatusCard" class="card status-card text-center text-white bg-danger">
                    <div class="card-body py-4">
                        <span id="pumpText">Pompa Off</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 3: Valves -->
        <div class="row g-4">
            <!-- Valve 1 -->
            <div class="col-md-4">
                <div class="valve-switch-container">
                    <div class="valve-title">Valve 1</div>
                    <div class="form-check form-switch d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="valve1" onchange="handleValveChange(0, this)">
                    </div>
                </div>
            </div>

            <!-- Valve 2 -->
            <div class="col-md-4">
                <div class="valve-switch-container">
                    <div class="valve-title">Valve 2</div>
                    <div class="form-check form-switch d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="valve2" onchange="handleValveChange(1, this)">
                    </div>
                </div>
            </div>

            <!-- Valve 3 -->
            <div class="col-md-4">
                <div class="valve-switch-container">
                    <div class="valve-title">Valve 3</div>
                    <div class="form-check form-switch d-flex justify-content-center">
                        <input class="form-check-input" type="checkbox" id="valve3" onchange="handleValveChange(2, this)">
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
<script type="module" src="<?= base_url('js/sprinkler.js'); ?>"></script>
<?= $this->endSection(); ?>