<div class="tabset">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="electric" checked>
  <label for="tab1">Electricity System</label>
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="cool">
  <label for="tab2">Cooling System</label>
  <!-- Tab 3 -->
  <input type="radio" name="tabset" id="tab3" aria-controls="fire">
  <label for="tab3">Fire System</label>
  <!-- Tab 4 -->
  <input type="radio" name="tabset" id="tab4" aria-controls="ups">
  <label for="tab4">UPS</label>
  <!-- Tab 5 -->
  <input type="radio" name="tabset" id="tab5" aria-controls="recti">
  <label for="tab5">Rectifier</label>
  <!-- Tab 6 -->
  <input type="radio" name="tabset" id="tab6" aria-controls="penerangan">
  <label for="tab6">Penerangan</label>
  <!-- Tab 7 -->
  <input type="radio" name="tabset" id="tab7" aria-controls="warning">
  <label for="tab7">Warning System</label>
  <!-- Tab 8 -->
  <input type="radio" name="tabset" id="tab8" aria-controls="support">
  <label for="tab8">Support System</label>


  <div class="tab-panels">
    <section id="electric" class="tab-panel">
      <button type="button" class="btn btn-success btn-icon-split my-2" data-bs-toggle="modal" data-bs-target="#addElec">
        <span class="icon text-white-50">
          <i class='bx bx-plus' style='color:#ffffff'></i>
        </span>
        <span class="text p-1 border-start">Tambah</span>
      </button>
      <table class="table table-striped table-bordered">
        <colgroup>
          <col style="width: 3%;">
          <col span="2" style="width: 20%;">
          <col span="2" style="width: 10%;">
          <col>
          <col style="width: 8%;">
        </colgroup>
        <thead>
          <tr class="table-dark text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Merk</th>
            <th>Kapasitas</th>
            <th>Jumlah</th>
            <th>Serial Number</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($electric as $key => $e) { ?>
            <tr>
              <td class="text-center"><?= $key + 1; ?></td>
              <td><?= $e->nama; ?></td>
              <td><?= $e->merk; ?></td>
              <td class="text-center"><?= $e->kapasitas; ?> <?= $e->satuan; ?></td>
              <td class="text-center"><?= $e->jumlah; ?></td>
              <td class="text-center"><?= $e->sn; ?></td>
              <td class="text-center">
                <button type="button" class="btn btn-primary btnEditElec" data-id="<?= $e->id; ?>" data data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                  <i class='bx bxs-edit'></i>
                </button>
                <button type="button" class="btn btn-danger btnDeleteElec" data-id="<?= $e->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                  <i class='bx bxs-trash'></i>
                </button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>
    <section id="cool" class="tab-panel">
      <button type="button" class="btn btn-success btn-icon-split my-2" data-bs-toggle="modal" data-bs-target="#addCool">
        <span class="icon text-white-50">
          <i class='bx bx-plus' style='color:#ffffff'></i>
        </span>
        <span class="text p-1 border-start">Tambah</span>
      </button>
      <table class="table table-striped table-bordered">
        <colgroup>
          <col style="width: 3%;">
          <col style="width: 3%;">
          <col style="width: 7%;">
          <col span="2" style="width: 15%;">
          <col span="2" style="width: 10%;">
          <col style="width: 5%;">
          <col style="width: 20%;">
          <col style="width: 7%;">
        </colgroup>
        <thead>
          <tr class="table-dark text-center">
            <th>No</th>
            <th>Lantai</th>
            <th>Ruangan</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Compressor</th>
            <th>Flow</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($cooling as $key => $c) { ?>
            <tr>
              <td class="text-center"><?= $key + 1; ?></td>
              <td class="text-center"><?= $c->lantai; ?></td>
              <td><?= $c->ruang; ?></td>
              <td><?= $c->merk; ?></td>
              <td><?= $c->type; ?></td>
              <td><?= $c->compressor; ?></td>
              <td><?= $c->flow; ?></td>
              <td class="text-center"><?= $c->jumlah; ?></td>
              <td><?= $c->keterangan; ?></td>
              <td class="text-center">
                <button type="button" class="btn btn-primary btnEditCool" data-id="<?= $c->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bxs-edit'></i></button>
                <button type="button" class="btn btn-danger btnDeleteCool" data-id="<?= $c->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class='bx bxs-trash'></i></button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>
    <section id="fire" class="tab-panel">
      <button type="button" class="btn btn-success btn-icon-split my-2" data-bs-toggle="modal" data-bs-target="#addFire">
        <span class="icon text-white-50">
          <i class='bx bx-plus' style='color:#ffffff'></i>
        </span>
        <span class="text p-1 border-start">Tambah</span>
      </button>
      <table class="table table-striped table-bordered">
        <colgroup>
          <col style="width: 3%;">
          <col style="width: 5%;">
          <col style="width: 7%;">
          <col span="3" style="width: 18%;">
          <col style="width: 5%;">
          <col>
          <col style="width: 7%;">
        </colgroup>
        <thead>
          <tr class="table-dark text-center">
            <th>No</th>
            <th>Lantai</th>
            <th>Ruangan</th>
            <th>Nama</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($fire as $key => $f) { ?>
            <tr>
              <td class="text-center"><?= $key + 1; ?></td>
              <td class="text-center"><?= $f->lantai; ?></td>
              <td><?= $f->ruang; ?></td>
              <td><?= $f->nama; ?></td>
              <td><?= $f->merk; ?></td>
              <td><?= $f->type; ?></td>
              <td class="text-center"><?= $f->jumlah; ?></td>
              <td><?= $f->keterangan; ?></td>
              <td class="text-center">
                <button type="button" class="btn btn-primary btnEditFire" data-id="<?= $f->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bxs-edit'></i></button>
                <button type="button" class="btn btn-danger btnDeleteFire" data-id="<?= $f->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class='bx bxs-trash'></i></button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>
    <section id="ups" class="tab-panel">
      <button type="button" class="btn btn-success btn-icon-split my-2" data-bs-toggle="modal" data-bs-target="#addUps">
        <span class="icon text-white-50">
          <i class='bx bx-plus' style='color:#ffffff'></i>
        </span>
        <span class="text p-1 border-start">Tambah</span>
      </button>
      <table class="table table-striped table-bordered">
        <colgroup>
        <col style="width: 3%;">
          <col span="2" style="width: 10%;">
          <col style="width: 15%;">
          <col span="2" style="width: 10%;">
          <col style="width: 4%;">
          <col style="width: 10%;">
          <col>
          <col style="width: 7%;">
        </colgroup>
        <thead>
          <tr class="table-dark text-center align-middle">
            <th>No</th>
            <th>Nama</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Merk Battery</th>
            <th>Type Battery</th>
            <th>Jumlah Battery</th>
            <th>Keterangan</th>
            <th>Serial Number</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($ups as $key => $u) { ?>
            <tr>
              <td class="text-center"><?= $key + 1; ?></td>
              <td><?= $u->nama; ?></td>
              <td><?= $u->merk; ?></td>
              <td><?= $u->type; ?></td>
              <td><?= $u->merk_battery; ?></td>
              <td><?= $u->type_battery; ?></td>
              <td class="text-center"><?= $u->jumlah_battery; ?></td>
              <td><?= $u->keterangan; ?></td>
              <td><?= $u->sn; ?></td>
              <td class="text-center">
                <button type="button" class="btn btn-primary btnEditUps" data-id="<?= $u->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bxs-edit'></i></button>
                <button type="button" class="btn btn-danger btnDeleteUps" data-id="<?= $u->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class='bx bxs-trash'></i></button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>
    <section id="recti" class="tab-panel">
      <button type="button" class="btn btn-success btn-icon-split my-2" data-bs-toggle="modal" data-bs-target="#addRect">
        <span class="icon text-white-50">
          <i class='bx bx-plus' style='color:#ffffff'></i>
        </span>
        <span class="text p-1 border-start">Tambah</span>
      </button>
      <table class="table table-striped table-bordered">
        <colgroup>
          <col style="width: 3%;">
          <col span="2" style="width: 10%;">
          <col style="width: 15%;">
          <col span="2" style="width: 10%;">
          <col style="width: 4%;">
          <col style="width: 10%;">
          <col>
          <col style="width: 7%;">
        </colgroup>
        <thead>
          <tr class="table-dark text-center align-middle">
            <th>No</th>
            <th>Nama</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Merk Battery</th>
            <th>Type Battery</th>
            <th>Jumlah Battery</th>
            <th>Keterangan</th>
            <th>Serial Number</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($recti as $key => $r) { ?>
            <tr>
              <td class="text-center"><?= $key + 1; ?></td>
              <td><?= $r->nama; ?></td>
              <td><?= $r->merk; ?></td>
              <td><?= $r->type; ?></td>
              <td><?= $r->merk_battery; ?></td>
              <td><?= $r->type_battery; ?></td>
              <td class="text-center"><?= $r->jumlah_battery; ?></td>
              <td><?= $r->keterangan; ?></td>
              <td><?= $r->sn; ?></td>
              <td class="text-center">
                <button type="button" class="btn btn-primary btnEditRect" data-id="<?= $r->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bxs-edit'></i></button>
                <button type="button" class="btn btn-danger btnDeleteRect" data-id="<?= $r->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class='bx bxs-trash'></i></button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>
    <section id="penerangan" class="tab-panel">
      <button type="button" class="btn btn-success btn-icon-split my-2" data-bs-toggle="modal" data-bs-target="#addPene">
        <span class="icon text-white-50">
          <i class='bx bx-plus' style='color:#ffffff'></i>
        </span>
        <span class="text p-1 border-start">Tambah</span>
      </button>
      <table class="table table-striped table-bordered">
        <colgroup>
          <col style="width: 3%;">
          <col span="3">
          <col style="width: 5%;">
          <col style="width: 25%;">
          <col style="width: 7%;">
        </colgroup>
        <thead>
          <tr class="table-dark text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($penerangan as $key => $p) { ?>
            <tr>
              <td class="text-center"><?= $key + 1; ?></td>
              <td><?= $p->nama; ?></td>
              <td><?= $p->merk; ?></td>
              <td><?= $p->type; ?></td>
              <td class="text-center"><?= $p->jumlah; ?></td>
              <td><?= $p->keterangan; ?></td>
              <td class="text-center">
                <button type="button" class="btn btn-primary btnEditPene" data-id="<?= $p->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bxs-edit'></i></button>
                <button type="button" class="btn btn-danger btnDeletePene" data-id="<?= $p->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class='bx bxs-trash'></i></button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>
    <section id="warning" class="tab-panel">
      <button type="button" class="btn btn-success btn-icon-split my-2" data-bs-toggle="modal" data-bs-target="#addWarn">
        <span class="icon text-white-50">
          <i class='bx bx-plus' style='color:#ffffff'></i>
        </span>
        <span class="text p-1 border-start">Tambah</span>
      </button>
      <table class="table table-striped table-bordered">
        <colgroup>
          <col style="width: 3%;">
          <col span="3">
          <col style="width: 5%;">
          <col style="width: 25%;">
          <col style="width: 7%;">
        </colgroup>
        <thead>
          <tr class="table-dark text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($warning as $key => $w) { ?>
            <tr>
              <td class="text-center"><?= $key + 1; ?></td>
              <td><?= $w->nama; ?></td>
              <td><?= $w->merk; ?></td>
              <td><?= $w->type; ?></td>
              <td class="text-center"><?= $w->jumlah; ?></td>
              <td><?= $w->keterangan; ?></td>
              <td class="text-center">
                <button type="button" class="btn btn-primary btnEditWarn" data-id="<?= $w->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bxs-edit'></i></button>
                <button type="button" class="btn btn-danger btnDeleteWarn" data-id="<?= $w->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class='bx bxs-trash'></i></button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>
    <section id="support" class="tab-panel">
      <button type="button" class="btn btn-success btn-icon-split my-2" data-bs-toggle="modal" data-bs-target="#addSupp">
        <span class="icon text-white-50">
          <i class='bx bx-plus' style='color:#ffffff'></i>
        </span>
        <span class="text p-1 border-start">Tambah</span>
      </button>
      <table class="table table-striped table-bordered">
        <colgroup>
          <col style="width: 3%;">
          <col span="3">
          <col style="width: 5%;">
          <col style="width: 25%;">
          <col style="width: 7%;">
        </colgroup>
        <thead>
          <tr class="table-dark text-center">
            <th>No</th>
            <th>Nama</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($support as $key => $s) { ?>
            <tr>
              <td class="text-center"><?= $key + 1; ?></td>
              <td><?= $s->nama; ?></td>
              <td><?= $s->merk; ?></td>
              <td><?= $s->type; ?></td>
              <td class="text-center"><?= $s->jumlah; ?></td>
              <td><?= $s->keterangan; ?></td>
              <td class="text-center">
                <button type="button" class="btn btn-primary btnEditSupp" data-id="<?= $s->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class='bx bxs-edit'></i></button>
                <button type="button" class="btn btn-danger btnDeleteSupp" data-id="<?= $s->id; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class='bx bxs-trash'></i></button>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>
  </div>

  <!-- Modal Electric -->
  <!-- Add -->
  <div class="modal fade" id="addElec" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addLabel">Tambah Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url() ?>inputdata/potencyEl" method="post" class="needs-validation" novalidate>
          <div class="modal-body">
            <div class="mb-3">
              <label for="validationCustom01" class="form-label">Nama</label>
              <input type="text" class="form-control" id="validationCustom01" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom02" class="form-label">Merk</label>
              <input type="text" class="form-control" id="validationCustom02" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom03" class="form-label">Kapasitas</label>
              <div class="input-group">
                <input type="number" class="form-control" id="validationCustom03" name="kapasitas" required>
                <select class="form-select" name="satuan" id="validationCustom04" required>
                  <option selected disabled value="">Pilih</option>
                  <option value="KVA">KVA</option>
                  <option value="KW">KW</option>
                  <option value="A">A</option>
                </select>
              </div>
              <div class="invalid-feedback">
                Masukkan Kapasitas
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom05" class="form-label">Jumlah</label>
              <input type="number" class="form-control" id="validationCustom05" name="jumlah" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom06" class="form-label">Serial Number</label>
              <input type="text" class="form-control" id="validationCustom06" name="sn" required>
              <div class="invalid-feedback">
                Masukkan Serial Number
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit -->
  <div class="modal fade" id="editElec" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel">Edit Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="post" id="editModalEl">
          <div class="modal-body">
            <div class="mb-3">
              <label for="editNamaEl" class="form-label">Nama</label>
              <input type="text" class="form-control" id="editNamaEl" name="nama">
            </div>
            <div class="mb-3">
              <label for="editMerkEl" class="form-label">Merk</label>
              <input type="text" class="form-control" id="editMerkEl" name="merk">
            </div>
            <div class="mb-3">
              <label for="editKapasitasEl" class="form-label">Kapasitas</label>
              <div class="input-group">
                <input type="number" class="form-control" id="editKapasitasEl" name="kapasitas" required>
                <select class="form-select" id="editSatuanEl" required>
                  <option disabled value="">Pilih</option>
                  <option name="satuan" value="KVA">KVA</option>
                  <option name="satuan" value="KW">KW</option>
                  <option name="satuan" value="A">A</option>
                </select>
              </div>
              <div class="invalid-feedback">
                Masukkan Kapasitas
              </div>
            </div>
            <div class="mb-3">
              <label for="editJumlahEl" class="form-label">Jumlah</label>
              <input type="number" class="form-control" id="editJumlahEl" name="jumlah" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="editSnEl" class="form-label">Serial Number</label>
              <input type="text" class="form-control" id="editSnEl" name="sn" required>
              <div class="invalid-feedback">
                Masukkan Serial Number
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete -->
  <div class="modal fade" id="deleteElec" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteLabel">Hapus Data Potensi</h5>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin menghapus data <span id="deleteNameEl"></span> <span id="deleteMerkEl"></span></p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" id="deleteButtonEl" href="#">Hapus</a>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Cooling -->
  <!-- Add  -->
  <div class="modal fade" id="addCool" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addLabel">Tambah Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url() ?>inputdata/potencyCool" method="post" class="needs-validation" novalidate>
          <div class="modal-body">
            <div class="mb-3">
              <label for="validationCustom01" class="form-label">Lantai</label>
              <div class="input-group">
                <select class="form-select" name="lantai" id="validationCustom01" required>
                  <option selected disabled value="">Pilih</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="invalid-feedback">
                Pilih Lantai
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom02" class="form-label">Ruangan</label>
              <input type="text" class="form-control" id="validationCustom02" name="ruang" required>
              <div class="invalid-feedback">
                Masukkan Ruangan
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom03" class="form-label">Merk</label>
              <input type="text" class="form-control" id="validationCustom03" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom04" class="form-label">Type</label>
              <input type="text" class="form-control" id="validationCustom04" name="type" required>
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom05" class="form-label">Compressor</label>
              <div class="input-group">
                <select class="form-select" name="compressor" id="validationCustom05" required>
                  <option selected disabled value="">Pilih</option>
                  <option value="single">Single</option>
                  <option value="dual">Dual</option>
                </select>
              </div>
              <div class="invalid-feedback">
                Pilih Jenis Compressor
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom06" class="form-label">Flow</label>
              <select class="form-select" id="validationCustom06" name="flow" required>
                <option selected disabled value="">Pilih</option>
                <option value="upflow">Upflow</option>
                <option value="downflow">Downflow</option>
                <option value="inrow">Inrow</option>
              </select>
              <div class="invalid-feedback">
                Pilih Jenis Flow
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom07" class="form-label">Jumlah</label>
              <input type="number" class="form-control" id="validationCustom07" name="jumlah" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom08" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="validationCustom08" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit -->
  <div class="modal fade" id="editCool" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel">Edit Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="post" id="editModalCol">
          <div class="modal-body">
            <div class="mb-3">
              <label for="editLantaiCol" class="form-label">Lantai</label>
              <div class="input-group">
                <select class="form-select" name="lantai" id="editLantaiCol" required>
                  <option selected disabled value="">Pilih</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="invalid-feedback">
                Pilih Lantai
              </div>
            </div>
            <div class="mb-3">
              <label for="editRuangCol" class="form-label">Ruangan</label>
              <input type="text" class="form-control" name="ruang" id="editRuangCol" required>
              <div class="invalid-feedback">
                Masukkan Ruangan
              </div>
            </div>
            <div class="mb-3">
              <label for="editMerkCol" class="form-label">Merk</label>
              <input type="text" class="form-control" name="merk" id="editMerkCol" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="editTypeCol" class="form-label">Type</label>
              <input type="text" class="form-control" name="type" id="editTypeCol" required>
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="editCompCol" class="form-label">Compressor</label>
              <div class="input-group">
                <select class="form-select" name="compressor" id="editCompCol" required>
                  <option selected disabled value="">Pilih</option>
                  <option value="single">Single</option>
                  <option value="dual">Dual</option>
                </select>
              </div>
              <div class="invalid-feedback">
                Pilih Jenis Compressor
              </div>
            </div>
            <div class="mb-3">
              <label for="editFlowCol" class="form-label">Flow</label>
              <select class="form-select" name="flow" id="editFlowCol" required>
                <option selected disabled value="">Pilih</option>
                <option value="upflow">Upflow</option>
                <option value="downflow">Downflow</option>
                <option value="inrow">Inrow</option>
              </select>
              <div class="invalid-feedback">
                Pilih Jenis Flow
              </div>
            </div>
            <div class="mb-3">
              <label for="editJumlahCol" class="form-label">Jumlah</label>
              <input type="number" class="form-control" name="jumlah" id="editJumlahCol" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="editKetCol" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="editKetCol" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete -->
  <div class="modal fade" id="deleteCool" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteLabel">Hapus Data Potensi</h5>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin menghapus data PAC <span id="deleteMerkCol"></span> <span id="deleteTypeCol"></span> di Lantai <span id="deleteLantaiCol"></span> Ruang <span id="deleteRuangCol"></span></p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" id="deleteButtonCol" href="#">Hapus</a>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Fire -->
  <!-- Add  -->
  <div class="modal fade" id="addFire" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addLabel">Tambah Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url() ?>inputdata/potencyFire" method="post" class="needs-validation" novalidate>
          <div class="modal-body">
            <div class="mb-3">
              <label for="validationCustom01" class="form-label">Lantai</label>
              <div class="input-group">
                <select class="form-select" name="lantai" id="validationCustom01" required>
                  <option selected disabled value="">Pilih</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="invalid-feedback">
                Pilih Lantai
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom02" class="form-label">Ruangan</label>
              <input type="text" class="form-control" id="validationCustom02" name="ruang" required>
              <div class="invalid-feedback">
                Masukkan Ruangan
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom03" class="form-label">Nama</label>
              <input type="text" class="form-control" id="validationCustom03" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom04" class="form-label">Merk</label>
              <input type="text" class="form-control" id="validationCustom04" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom05" class="form-label">Type</label>
              <input type="text" class="form-control" id="validationCustom05" name="type">
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom06" class="form-label">Jumlah</label>
              <input type="number" class="form-control" id="validationCustom06" name="jumlah" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom07" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="validationCustom07" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit -->
  <div class="modal fade" id="editFire" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel">Edit Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="post" id="editModalFire">
          <div class="modal-body">
            <div class="mb-3">
              <label for="editLantaiFire" class="form-label">Lantai</label>
              <div class="input-group">
                <select class="form-select" name="lantai" id="editLantaiFire" required>
                  <option selected disabled value="">Pilih</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="invalid-feedback">
                Pilih Lantai
              </div>
            </div>
            <div class="mb-3">
              <label for="editRuangFire" class="form-label">Ruangan</label>
              <input type="text" class="form-control" id="editRuangFire" name="ruang" required>
              <div class="invalid-feedback">
                Masukkan Ruangan
              </div>
            </div>
            <div class="mb-3">
              <label for="editNamaFire" class="form-label">Nama</label>
              <input type="text" class="form-control" id="editNamaFire" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="editMerkFire" class="form-label">Merk</label>
              <input type="text" class="form-control" id="editMerkFire" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="editTypeFire" class="form-label">Type</label>
              <input type="text" class="form-control" id="editTypeFire" name="type" required>
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="editJumlahFire" class="form-label">Jumlah</label>
              <input type="number" class="form-control" id="editJumlahFire" name="jumlah" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="editKetFire" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="editKetFire" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete -->
  <div class="modal fade" id="deleteFire" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteLabel">Hapus Data Potensi</h5>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin menghapus data <span id="deleteNamaFire"></span> <span id="deleteMerkFire"></span> di Lantai <span id="deleteLantaiFire"></span> Ruang <span id="deleteRuangFire"></span></p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" id="deleteButtonFire" href="#">Hapus</a>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal UPS -->
  <!-- Add  -->
  <div class="modal fade" id="addUps" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addLabel">Tambah Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url() ?>inputdata/potencyUps" method="post" class="needs-validation" novalidate>
          <div class="modal-body">
            <div class="mb-3">
              <label for="validationCustom01" class="form-label">Nama</label>
              <input type="text" class="form-control" id="validationCustom01" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom02" class="form-label">Merk</label>
              <input type="text" class="form-control" id="validationCustom02" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom03" class="form-label">Type</label>
              <input type="text" class="form-control" id="validationCustom03" name="type" required>
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom04" class="form-label">Merk Battery</label>
              <input type="text" class="form-control" id="validationCustom04" name="merk_battery" required>
              <div class="invalid-feedback">
                Masukkan Merk Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom05" class="form-label">Type Battery</label>
              <input type="text" class="form-control" id="validationCustom05" name="type_battery" required>
              <div class="invalid-feedback">
                Masukkan Type Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom06" class="form-label">Jumlah Battery</label>
              <input type="text" class="form-control" id="validationCustom06" name="jumlah_battery" required>
              <div class="invalid-feedback">
                Masukkan Jumlah Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom07" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="validationCustom07" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom08" class="form-label">Serial Number</label>
              <input type="text" class="form-control" id="validationCustom08" name="sn">
              <div class="invalid-feedback">
                Masukkan Serial Number
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit -->
  <div class="modal fade" id="editUps" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel">Edit Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="post" id="editModalUps">
          <div class="modal-body">
            <div class="mb-3">
              <label for="editNamaUps" class="form-label">Nama</label>
              <input type="text" class="form-control" id="editNamaUps" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="editMerkUps" class="form-label">Merk</label>
              <input type="text" class="form-control" id="editMerkUps" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="editTypeUps" class="form-label">Type</label>
              <input type="text" class="form-control" id="editTypeUps" name="type" required>
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="editMerkBattUps" class="form-label">Merk Battery</label>
              <input type="text" class="form-control" id="editMerkBattUps" name="merk_battery" required>
              <div class="invalid-feedback">
                Masukkan Merk Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="editTypeBattUps" class="form-label">Type Battery</label>
              <input type="text" class="form-control" id="editTypeBattUps" name="type_battery" required>
              <div class="invalid-feedback">
                Masukkan Type Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="editJumlahBattUps" class="form-label">Jumlah Battery</label>
              <input type="text" class="form-control" id="editJumlahBattUps" name="jumlah_battery" required>
              <div class="invalid-feedback">
                Masukkan Jumlah Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="editKetUps" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="editKetUps" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
            <div class="mb-3">
              <label for="editSnUps" class="form-label">Serial Number</label>
              <input type="text" class="form-control" id="editSnUps" name="sn">
              <div class="invalid-feedback">
                Masukkan Serial Number
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete -->
  <div class="modal fade" id="deleteUps" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteLabel">Hapus Data Potensi</h5>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin menghapus data <span id="deleteNamaUps"></span></p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" id="deleteButtonUps" href="#">Hapus</a>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Recti -->
  <!-- Add  -->
  <div class="modal fade" id="addRect" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addLabel">Tambah Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url() ?>inputdata/potencyRect" method="post" class="needs-validation" novalidate>
          <div class="modal-body">
            <div class="mb-3">
              <label for="validationCustom01" class="form-label">Nama</label>
              <input type="text" class="form-control" id="validationCustom01" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom02" class="form-label">Merk</label>
              <input type="text" class="form-control" id="validationCustom02" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom03" class="form-label">Type</label>
              <input type="text" class="form-control" id="validationCustom03" name="type" required>
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom04" class="form-label">Merk Battery</label>
              <input type="text" class="form-control" id="validationCustom04" name="merk_battery" required>
              <div class="invalid-feedback">
                Masukkan Merk Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom05" class="form-label">Type Battery</label>
              <input type="text" class="form-control" id="validationCustom05" name="type_battery" required>
              <div class="invalid-feedback">
                Masukkan Type Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom06" class="form-label">Jumlah Battery</label>
              <input type="text" class="form-control" id="validationCustom06" name="jumlah_battery" required>
              <div class="invalid-feedback">
                Masukkan Jumlah Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom07" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="validationCustom07" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom08" class="form-label">Serial Number</label>
              <input type="text" class="form-control" id="validationCustom08" name="sn">
              <div class="invalid-feedback">
                Masukkan Serial Number
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit -->
  <div class="modal fade" id="editRect" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel">Edit Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="post" id="editModalRect">
          <div class="modal-body">
            <div class="mb-3">
              <label for="editNamaRect" class="form-label">Nama</label>
              <input type="text" class="form-control" id="editNamaRect" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="editMerkRect" class="form-label">Merk</label>
              <input type="text" class="form-control" id="editMerkRect" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="editTypeRect" class="form-label">Type</label>
              <input type="text" class="form-control" id="editTypeRect" name="type" required>
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="editMerkBattRect" class="form-label">Merk Battery</label>
              <input type="text" class="form-control" id="editMerkBattRect" name="merk_battery" required>
              <div class="invalid-feedback">
                Masukkan Merk Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="editTypeBattRect" class="form-label">Type Battery</label>
              <input type="text" class="form-control" id="editTypeBattRect" name="type_battery" required>
              <div class="invalid-feedback">
                Masukkan Type Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="editJumlahBattRect" class="form-label">Jumlah Battery</label>
              <input type="text" class="form-control" id="editJumlahBattRect" name="jumlah_battery" required>
              <div class="invalid-feedback">
                Masukkan Jumlah Battery
              </div>
            </div>
            <div class="mb-3">
              <label for="editKetRect" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="editKetRect" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
            <div class="mb-3">
              <label for="editSnRecti" class="form-label">Serial Number</label>
              <input type="text" class="form-control" id="editSnRecti" name="sn">
              <div class="invalid-feedback">
                Masukkan Serial Number
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete -->
  <div class="modal fade" id="deleteRect" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteLabel">Hapus Data Potensi</h5>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin menghapus data <span id="deleteNamaRect"></span></p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" id="deleteButtonRect" href="#">Hapus</a>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Penerangan -->
  <!-- Add  -->
  <div class="modal fade" id="addPene" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addLabel">Tambah Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url() ?>inputdata/potencyPene" method="post" class="needs-validation" novalidate>
          <div class="modal-body">
            <div class="mb-3">
              <label for="validationCustom01" class="form-label">Nama</label>
              <input type="text" class="form-control" id="validationCustom01" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom02" class="form-label">Merk</label>
              <input type="text" class="form-control" id="validationCustom02" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom03" class="form-label">Type</label>
              <input type="text" class="form-control" id="validationCustom03" name="type" required>
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom04" class="form-label">Jumlah</label>
              <input type="text" class="form-control" id="validationCustom04" name="jumlah" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom05" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="validationCustom05" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit -->
  <div class="modal fade" id="editPene" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel">Edit Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="post" id="editModalPene">
          <div class="modal-body">
            <div class="mb-3">
              <label for="editNamaPene" class="form-label">Nama</label>
              <input type="text" class="form-control" id="editNamaPene" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="editMerkPene" class="form-label">Merk</label>
              <input type="text" class="form-control" id="editMerkPene" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="editTypePene" class="form-label">Type</label>
              <input type="text" class="form-control" id="editTypePene" name="type">
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="editJumlahPene" class="form-label">Jumlah</label>
              <input type="text" class="form-control" id="editJumlahPene" name="jumlah" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="editKetPene" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="editKetPene" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete -->
  <div class="modal fade" id="deletePene" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteLabel">Hapus Data Potensi</h5>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin menghapus data <span id="deleteNamaPene"></span></p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" id="deleteButtonPene" href="#">Hapus</a>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Warning -->
  <!-- Add  -->
  <div class="modal fade" id="addWarn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addLabel">Tambah Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url() ?>inputdata/potencyWarn" method="post" class="needs-validation" novalidate>
          <div class="modal-body">
            <div class="mb-3">
              <label for="validationCustom01" class="form-label">Nama</label>
              <input type="text" class="form-control" id="validationCustom01" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom02" class="form-label">Merk</label>
              <input type="text" class="form-control" id="validationCustom02" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom03" class="form-label">Type</label>
              <input type="text" class="form-control" id="validationCustom03" name="type" required>
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom04" class="form-label">Jumlah</label>
              <input type="text" class="form-control" id="validationCustom04" name="jumlah" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom05" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="validationCustom05" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit -->
  <div class="modal fade" id="editWarn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel">Edit Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="post" id="editModalWarn">
          <div class="modal-body">
            <div class="mb-3">
              <label for="editNamaWarn" class="form-label">Nama</label>
              <input type="text" class="form-control" id="editNamaWarn" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="editMerkWarn" class="form-label">Merk</label>
              <input type="text" class="form-control" id="editMerkWarn" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="editTypeWarn" class="form-label">Type</label>
              <input type="text" class="form-control" id="editTypeWarn" name="type">
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="editJumlahWarn" class="form-label">Jumlah</label>
              <input type="text" class="form-control" id="editJumlahWarn" name="jumlah" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="editKetWarn" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="editKetWarn" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete -->
  <div class="modal fade" id="deleteWarn" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteLabel">Hapus Data Potensi</h5>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin menghapus data <span id="deleteNamaWarn"></span></p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" id="deleteButtonWarn" href="#">Hapus</a>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Support -->
  <!-- Add  -->
  <div class="modal fade" id="addSupp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addLabel">Tambah Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url() ?>inputdata/potencySupp" method="post" class="needs-validation" novalidate>
          <div class="modal-body">
            <div class="mb-3">
              <label for="validationCustom01" class="form-label">Nama</label>
              <input type="text" class="form-control" id="validationCustom01" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom02" class="form-label">Merk</label>
              <input type="text" class="form-control" id="validationCustom02" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom03" class="form-label">Type</label>
              <input type="text" class="form-control" id="validationCustom03" name="type" required>
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom04" class="form-label">Jumlah</label>
              <input type="text" class="form-control" id="validationCustom04" name="jumlah" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="validationCustom05" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="validationCustom05" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Tambah</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Edit -->
  <div class="modal fade" id="editSupp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editLabel">Edit Data Potensi</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="#" method="post" id="editModalSupp">
          <div class="modal-body">
            <div class="mb-3">
              <label for="editNamaSupp" class="form-label">Nama</label>
              <input type="text" class="form-control" id="editNamaSupp" name="nama" required>
              <div class="invalid-feedback">
                Masukkan Nama
              </div>
            </div>
            <div class="mb-3">
              <label for="editMerkSupp" class="form-label">Merk</label>
              <input type="text" class="form-control" id="editMerkSupp" name="merk" required>
              <div class="invalid-feedback">
                Masukkan Merk
              </div>
            </div>
            <div class="mb-3">
              <label for="editTypeSupp" class="form-label">Type</label>
              <input type="text" class="form-control" id="editTypeSupp" name="type">
              <div class="invalid-feedback">
                Masukkan Type
              </div>
            </div>
            <div class="mb-3">
              <label for="editJumlahSupp" class="form-label">Jumlah</label>
              <input type="text" class="form-control" id="editJumlahSupp" name="jumlah" required>
              <div class="invalid-feedback">
                Masukkan Jumlah
              </div>
            </div>
            <div class="mb-3">
              <label for="editKetSupp" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="editKetSupp" name="keterangan">
              <div class="invalid-feedback">
                Masukkan Keterangan
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Delete -->
  <div class="modal fade" id="deleteSupp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteLabel">Hapus Data Potensi</h5>
        </div>
        <div class="modal-body">
          <p>Apakah anda yakin menghapus data <span id="deleteNamaSupp"></span></p>
        </div>
        <div class="modal-footer">
          <a class="btn btn-danger" id="deleteButtonSupp" href="#">Hapus</a>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
        </div>
      </div>
    </div>
  </div>