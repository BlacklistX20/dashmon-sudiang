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

  

</div>
</div>

</div>
<!--Container Main end-->

<!-- Custom JS -->
<script type="module" src="<?= base_url('js/sprinkler.js'); ?>"></script>
<?= $this->endSection(); ?>