<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1 class="text-center fw-bold mt-4">DATA POTENSI</h1>
<h1 class="text-center fw-bold mb-4">TTC SUDIANG</h1>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
<!-- row-cols-xxl-6 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 -->
  <div class="card-custom col">
    <a href="<?= base_url() ?>potency/power">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <i class='bx bxs-zap mb-3' style="font-size: 128px;"></i>
        <h1 class="mb-3">Power System (<span id="potEl">0</span>)</h1>
        <div class="row text-start" style="width: 85%">
          <div class="col">
            <h4>PLN (<span id="potElPln">0</span>)</h4>
            <h4>Genset (<span id="potElGenset">0</span>)</h4>
            <h4>Cubicle (<span id="potElCubicle">0</span>)</h4>
            <h4>Trafo (<span id="potElTrafo">0</span>)</h4>
          </div>
          <div class="col">
            <h4>Rectifier (<span id="potElRecti">0</span>)</h4>
            <h4>UPS (<span id="potElUps">0</span>)</h4>
            <h4>Panel (<span id="potElPanel">0</span>)</h4>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="card-custom col">
    <a href="<?= base_url() ?>potency/user">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <i class='bx bxs-server mb-3' style="font-size: 128px;"></i>
        <h1 class="mb-3">Perangkat User (<span id="potUser">0</span>)</h1>
        <h4>IT (<span id="potUserIt">0</span>)</h4>
        <h4>Core (<span id="potUserCore">0</span>)</h4>
        <h4>Radio (<span id="potUserRadio">0</span>)</h4>
        <h4>Transmisi (<span id="potUserTrans">0</span>)</h4>
      </div>
    </a>
  </div>
  <div class="card-custom col">
    <a href="<?= base_url() ?>potency/cooling">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <i class='bx bx-wind mb-3' style="font-size: 128px;"></i>
        <h1 class="mb-3">Cooling System (<span id="potAc">0</span>)</h1>
        <h4>PAC (<span id="potAcPac">0</span>)</h4>
        <h4>AC Split (<span id="potAcSplit">0</span>)</h4>
        <h4>AC Standing (<span id="potAcStanding">0</span>)</h4>
      </div>
    </a>
  </div>
  <div class="card-custom col">
    <a href="<?= base_url() ?>potency/fire">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <i class='bx bxs-hot mb-3' style="font-size: 128px;"></i>
        <h1 class="mb-3">Pemadam Api Gedung (<span id="potFireExt">0</span>)</h1>
        <h4>APAR (<span id="potFireApar">0</span>)</h4>
        <h4>FM 200 (<span id="potFireFm200">0</span>)</h4>
        <h4>Hydrant (<span id="potFireHydrant">0</span>)</h4>
      </div>
    </a>
  </div>
  <div class="card-custom col">
    <a href="<?= base_url() ?>potency/tank">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <i class='bx bxs-bed mb-3' style="font-size: 128px;"></i>
        <h1 class="mb-3">Tangki Cairan (<span id="potTank">0</span>)</h1>
        <h4>Tangki Bulanan (<span id="potTankDaily">0</span>)</h4>
        <h4>Tangki Harian (<span id="potTankMonthly">0</span>)</h4>
      </div>
    </a>
  </div>
  <div class="card-custom col">
    <a href="<?= base_url() ?>potency/security">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <img class="ico mb-3" src="<?= base_url() ?>img\cctv.png" alt="ICON">
        <h1 class="mb-3">Keamanan Gedung (<span id="potSecurity">0</span>)</h1>
      </div>
    </a>
  </div>
  <div class="card-custom col">
    <a href="<?= base_url() ?>potency/lighting">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <i class='bx bx-bulb mb-3' style="font-size: 128px;"></i>
        <h1 class="mb-3">Pencahayaan Gedung (<span id="potLamp">0</span>)</h1>
      </div>
    </a>
  </div>
  <!-- <div class="card-custom col">
    <a href="<?= base_url() ?>potency/safety">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <i class='bx bxs-hard-hat mb-3' style="font-size: 128px;"></i>
        <h1 class="mb-3">Alat Keselamatan (<span id="potK3">0</span>)</h1>
      </div>
    </a>
  </div> -->
  <div class="card-custom col">
    <a href="<?= base_url() ?>potency/pump">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <img class="ico mb-3" src="<?= base_url() ?>img\pump.png" alt="ICON">
        <h1 class="mb-3">Pompa Gedung (<span id="potPump">0</span>)</h1>
      </div>
    </a>
  </div>
  <!-- <div class="card-custom col">
    <a href="<?= base_url() ?>potency/furniture">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <i class='bx bx-chair mb-3' style="font-size: 128px;"></i>
        <h1 class="mb-3">Perabotan Gedung (<span id="potFurniture">0</span>)</h1>
      </div>
    </a>
  </div>
  <div class="card-custom col">
    <a href="<?= base_url() ?>potency/finishing">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <i class='bx bx-buildings mb-3' style="font-size: 128px;"></i>
        <h1 class="mb-3">Finishing Gedung (<span id="potFinish">0</span>)</h1>
      </div>
    </a>
  </div>
  <div class="card-custom col">
    <a href="<?= base_url() ?>potency/transport">
      <div class="card bg-danger text-white text-center p-3 mb-3 d-flex align-items-center justify-content-center"
        style="height: 40vh;">
        <img class="ico mb-3" src="<?= base_url() ?>asset\src\img\pulley.png" alt="ICON">
        <h1 class="mb-3">Alat Pengangkut (<span id="potTransport">0</span>)</h1>
      </div>
    </a>
  </div> -->
</div>

</div>
<!--Container Main end-->

<!-- Custom JS -->
<script type="module" src="<?= base_url('js/potency.js'); ?>"></script>
<?= $this->endSection(); ?>