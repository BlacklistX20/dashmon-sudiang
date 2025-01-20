<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="text-center">
   <h2 class="fw-bold">SPACE MANAGEMENT</h2>
   <h4>TTC Sudiang Makassar</h2>
</div>

<?= $this->include('pages/content/space'); ?>

</div>
<!--Container Main end-->

<!-- Custom JS -->
<script type="module" src="<?= base_url('js/space.js'); ?>"></script>
<?= $this->endSection(); ?>