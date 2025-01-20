<div class="tabset mx-2">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="lantai2" checked>
  <label for="tab1">Lantai 2</label>
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="lantai3">
  <label for="tab2">Lantai 3</label>
  <!-- Tab 3 -->
  <input type="radio" name="tabset" id="tab3" aria-controls="lantai4">
  <label for="tab3">Lantai 4</label>
  <!-- Tab 4 -->
  <input type="radio" name="tabset" id="tab4" aria-controls="lantai5">
  <label for="tab4">Lantai 5</label>

  <div class="tab-panels mx-3">
    <section id="lantai2" class="tab-panel">
      <form action="<?= base_url(); ?>upload/lt2" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <!-- <strong><?php // echo $error; ?></strong> -->

        <div class="input-group mb-3">
          <input class="form-control" type="file" accept="image/jpg, image/jpeg, image/png" name="lantai2">
          <input class="btn btn-success ms-4" type="submit" value="Upload File">
        </div>
      </form>
      <div class="card text-center">
        <img src="<?= base_url('layout/layout_lt2.jpg') ?>" class="card-img-top" style="height: 73vh;" alt="Layout Lantai 2">
        <div class="card-footer text-dark">
          <h4 class="fw-bold">Last Update </h4>
        </div>
      </div>
    </section>
    <section id="lantai3" class="tab-panel">
      <form action="<?= base_url(); ?>upload/lt3" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <!-- <strong><?php // echo $error; ?></strong> -->

        <div class="input-group mb-3">
          <input class="form-control" type="file" accept="image/jpg, image/jpeg, image/png" name="lantai3">
          <input class="btn btn-success ms-4" type="submit" value="Upload File">
        </div>
      </form>
      <div class="card text-center">
        <img src="<?= base_url('layout/layout_lt3.jpg') ?>" class="card-img-top" style="height: 73vh;" alt="Layout Lantai 3">
        <div class="card-footer text-dark">
          <h4 class="fw-bold">Last Update </h4>
        </div>
      </div>
    </section>
    <section id="lantai4" class="tab-panel">
      <form action="<?= base_url(); ?>upload/lt4" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <!-- <strong><?php // echo $error; ?></strong> -->

        <div class="input-group mb-3">
          <input class="form-control" type="file" accept="image/jpg, image/jpeg, image/png" name="lantai4">
          <input class="btn btn-success ms-4" type="submit" value="Upload File">
        </div>
      </form>
      <div class="card text-center">
        <img src="<?= base_url('layout/layout_lt4.jpg') ?>" class="card-img-top" style="height: 73vh;" alt="Layout Lantai 4">
        <div class="card-footer text-dark">
          <h4 class="fw-bold">Last Update </h4>
        </div>
      </div>
    </section>
    <section id="lantai5" class="tab-panel">
      <form action="<?= base_url(); ?>upload/lt5" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <!-- <strong><?php // echo $error; ?></strong> -->

        <div class="input-group mb-3">
          <input class="form-control" type="file" accept="image/jpg, image/jpeg, image/png" name="lantai5">
          <input class="btn btn-success ms-4" type="submit" value="Upload File">
        </div>
        </form>
        <div class="card text-center">
          <img src="<?= base_url('layout/layout_lt5.jpg') ?>" class="card-img-top" style="height: 73vh;" alt="Layout Lantai 5">
          <div class="card-footer text-dark">
            <h4 class="fw-bold">Last Update </h4>
          </div>
        </div>
    </section>
  </div>
</div>