<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- <div class="row my-2">
   <div class="col-6 text-start">
      <h2 class="fw-bold">FM 200</h2>
      <h2 class="fw-bold">TTC Sudiang Makassar</h2>
   </div>
   <div class="col-6 text-end">
      <h2 id="time" class="fw-bold"></h2>
      <h4 id="date"></h4>
   </div>
</div> -->

<?= $this->include('pages/content/fm200'); ?>

</div>
<!--Container Main end-->

<!-- Custom JS -->
<script type="module" src="<?= base_url('js/fm200.js'); ?>"></script>
<?= $this->endSection(); ?>