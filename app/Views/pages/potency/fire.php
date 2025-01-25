<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mx-1 py-1">
   <div class="row my-2">
      <div class="col-6 text-start">
         <h2 class="fw-bold">Data Potensi</h2>
         <h2 class="fw-bold">Pemadam Api Gedung</h2>
      </div>
      <div class="col-6 text-end">
         <h2 id="time" class="fw-bold"></h2>
         <h4 id="date"></h4>
      </div>
   </div>

   <div class="mt-5">
      <table id="fire" class="mt-3 table table-bordered table-responsive table-striped" style="width:100%">
         <thead>
            <tr class="table-danger text-center">
               <th>No</th>
               <th>Lantai</th>
               <th>Ruangan</th>
               <th>Kategori</th>
               <th>Nama</th>
               <th>Vendor</th>
               <th>Brand</th>
               <th>Type</th>
               <th>Barcode Number</th>
               <th>Jumlah</th>
               <th>Kondisi</th>
               <th>Keterangan</th>
               <th>Tahun Instalasi</th>
               <th>Maintanance</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($fire as $key => $f) { ?>
               <tr>
                  <td><?= $key + 1; ?></td>
                  <td><?= $f['floor']; ?></td>
                  <td><?= $f['room']; ?></td>
                  <td><?= $f['category']; ?></td>
                  <td><?= $f['name']; ?></td>
                  <td><?= $f['vendor']; ?></td>
                  <td><?= $f['brand']; ?></td>
                  <td><?= $f['type']; ?></td>
                  <td><?= $f['barcode']; ?></td>
                  <td><?= $f['quantity']; ?></td>
                  <td><?= $f['condition']; ?></td>
                  <td><?= $f['info']; ?></td>
                  <td><?= $f['install']; ?></td>
                  <td><?= $f['maintanance']; ?></td>
                  <td>
                     <button type="button" id="buttonEdit" class="btn btn-primary" data-id="<?= $f['id']; ?>" data data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                        <i class='bx bxs-edit'></i>
                     </button>
                     <button type="button" id="buttonDelete" class="btn btn-danger" data-id="<?= $f['id']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                        <i class='bx bxs-trash'></i>
                     </button>
                  </td>
               </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>

   <!-- Modal -->
   <!-- Add -->
   <div class="modal fade" id="addModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addLabel">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="addLabel">Tambah Data Potensi</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url() ?>data/potency/fireAdd" method="post" class="needs-validation" novalidate>
               <div class="modal-body row g-3">
                  <div class="mb-3 col-md-4">
                     <label for="floorAdd" class="form-label">Lantai</label>
                     <select class="form-select change-floor" name="floor" id="floorAdd" required>
                        <option selected disabled value="">-- Pilih Lantai --</option>
                        <option value="Basement">Basement</option>
                        <option value="Semi Basement">Semi-Basement</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="Rooftop">Rooftop</option>
                     </select>
                     <div class="invalid-feedback">Pilih Lantai</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="roomAdd" class="form-label">Ruangan</label>
                     <select class="form-select change-room" name="room" id="roomAdd" required disabled>
                        <option selected disabled value="">-- Pilih Lantai --</option>
                     </select>
                     <div class="invalid-feedback">Pilih Ruangan</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="categoryAdd" class="form-label">Kategori</label>
                     <select class="form-select" name="category" id="categoryAdd" required>
                        <option selected disabled value="">-- Pilih Kategori --</option>
                        <option value="APAR">APAR</option>
                        <option value="FM200">FM200</option>
                        <option value="HYDRANT">HYDRANT</option>
                        <!-- <option value="Abort">Abort</option>
                        <option value="Gas Discharge Sign Lamp">Gas Discharge Sign Lamp</option>
                        <option value="Horn">Horn</option>
                        <option value="Alarm Bell">Alarm Bell</option>
                        <option value="Evacuate Sign Lamp">Evacuate Sign Lamp</option>
                        <option value="Tabung FM200">Tabung FM200</option>
                        <option value="Terminal Box">Terminal Box</option>
                        <option value="Junction Box">Junction Box</option>
                        <option value="Manual Release">Manual Release</option>
                        <option value="Dect Photo">Dect Photo</option>
                        <option value="Dect Ion">Dect Ion</option>
                        <option value="Pressure Switch">Pressure Switch</option>
                        <option value="Electric Control Head">Electric Control Head</option>
                        <option value="Nozzle">Nozzle</option> -->
                     </select>
                     <div class="invalid-feedback">Pilih Kategori</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="nameAdd" class="form-label">Nama</label>
                     <input type="text" class="form-control" id="nameAdd" name="name" required />
                     <div class="invalid-feedback">Masukkan Nama (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="vendorAdd" class="form-label">Vendor</label>
                     <input type="text" class="form-control" id="vendorAdd" name="vendor" required />
                     <div class="invalid-feedback">Masukkan Nama Vendor (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="brandAdd" class="form-label">Merek</label>
                     <input type="text" class="form-control" id="brandAdd" name="brand" required />
                     <div class="invalid-feedback">Masukkan Merek (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="typeAdd" class="form-label">Type</label>
                     <input type="text" class="form-control" id="typeAdd" name="type" required />
                     <div class="invalid-feedback">Masukkan Type (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="barcodeAdd" class="form-label">Barcode Number</label>
                     <input type="text" class="form-control" id="barcodeAdd" name="barcode" required />
                     <div class="invalid-feedback">Masukkan Barcode Number</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="quantityAdd" class="form-label">Jumlah</label>
                     <input type="number" class="form-control" id="quantityAdd" name="quantity" required />
                     <div class="invalid-feedback">Masukkan Jumlah</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="conditionAdd" class="form-label">Kondisi</label>
                     <select class="form-select" name="condition" id="conditionAdd" required>
                        <option selected disabled value="">-- Pilih Kondisi --</option>
                        <option value="Baik">Baik</option>
                        <option value="Rusak">Rusak</option>
                     </select>
                     <div class="invalid-feedback">Pilih Kondisi</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="infoAdd" class="form-label">Keterangan</label>
                     <textarea class="form-control" name="info" id="infoAdd" rows="3" required></textarea>
                     <div class="invalid-feedback">Masukkan Keterangan (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="installAdd" class="form-label">Tahun Instalasi</label>
                     <input type="text" class="form-control" id="installAdd" name="install" require />
                     <div class="invalid-feedback">Masukkan Tahun Instalasi</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="maintananceAdd" class="form-label">Tanggal Maintanance Terakhir</label>
                     <input type="text" class="form-control" id="maintananceAdd" name="maintanance" required />
                     <div class="invalid-feedback">Masukkan Tanggal Maintanance terakhir (Jika tidak ada isi dengan -)</div>
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
   <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editLabel">
      <div class="modal-dialog modal-xl modal-fullscreen-sm-down">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title fw-bold" id="editLabel"><span id="title">Edit</span> <span id="itemNameEdit"></span></h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" action="#" method="post" class="needs-validation" novalidate>
               <div class="modal-body row g-3">
               <div class="mb-3 col-md-4">
                     <label for="floorEdit" class="form-label">Lantai</label>
                     <select class="form-select change-floor" name="floor" id="floorEdit" required>
                        <option selected disabled value="">-- Pilih Lantai --</option>
                        <option value="Basement">Basement</option>
                        <option value="Semi Basement">Semi-Basement</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="Rooftop">Rooftop</option>
                     </select>
                     <div class="invalid-feedback">Pilih Lantai</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="roomEdit" class="form-label">Ruangan</label>
                     <select class="form-select change-room" name="room" id="roomEdit" required disabled>
                        <option selected disabled value="">-- Pilih Lantai --</option>
                     </select>
                     <div class="invalid-feedback">Pilih Ruangan</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="categoryEdit" class="form-label">Kategori</label>
                     <select class="form-select" name="category" id="categoryEdit" required>
                        <option selected disabled value="">-- Pilih Kategori --</option>
                        <option value="APAR">APAR</option>
                        <option value="FM200">FM200</option>
                        <option value="HYDRANT">HYDRANT</option>
                        <!-- <option value="Abort">Abort</option>
                        <option value="Gas Discharge Sign Lamp">Gas Discharge Sign Lamp</option>
                        <option value="Horn">Horn</option>
                        <option value="Alarm Bell">Alarm Bell</option>
                        <option value="Evacuate Sign Lamp">Evacuate Sign Lamp</option>
                        <option value="Tabung FM200">Tabung FM200</option>
                        <option value="Terminal Box">Terminal Box</option>
                        <option value="Junction Box">Junction Box</option>
                        <option value="Manual Release">Manual Release</option>
                        <option value="Dect Photo">Dect Photo</option>
                        <option value="Dect Ion">Dect Ion</option>
                        <option value="Pressure Switch">Pressure Switch</option>
                        <option value="Electric Control Head">Electric Control Head</option>
                        <option value="Nozzle">Nozzle</option> -->
                     </select>
                     <div class="invalid-feedback">Pilih Kategori</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="nameEdit" class="form-label">Nama</label>
                     <input type="text" class="form-control" id="nameEdit" name="name" required />
                     <div class="invalid-feedback">Masukkan Nama (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="vendorEdit" class="form-label">Vendor</label>
                     <input type="text" class="form-control" id="vendorEdit" name="vendor" required />
                     <div class="invalid-feedback">Masukkan Nama Vendor (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="brandEdit" class="form-label">Merek</label>
                     <input type="text" class="form-control" id="brandEdit" name="brand" required />
                     <div class="invalid-feedback">Masukkan Merek (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="typeEdit" class="form-label">Type</label>
                     <input type="text" class="form-control" id="typeEdit" name="type" required />
                     <div class="invalid-feedback">Masukkan Type (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="barcodeEdit" class="form-label">Barcode Number</label>
                     <input type="text" class="form-control" id="barcodeEdit" name="barcode" required />
                     <div class="invalid-feedback">Masukkan Barcode Number</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="quantityEdit" class="form-label">Jumlah</label>
                     <input type="number" class="form-control" id="quantityEdit" name="quantity" required />
                     <div class="invalid-feedback">Masukkan Jumlah</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="conditionEdit" class="form-label">Kondisi</label>
                     <select class="form-select" name="condition" id="conditionEdit" required>
                        <option selected disabled value="">-- Pilih Kondisi --</option>
                        <option value="Baik">Baik</option>
                        <option value="Rusak">Rusak</option>
                     </select>
                     <div class="invalid-feedback">Pilih Kondisi</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="infoEdit" class="form-label">Keterangan</label>
                     <textarea class="form-control" name="info" id="infoEdit" rows="3" required></textarea>
                     <div class="invalid-feedback">Masukkan Keterangan (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="installEdit" class="form-label">Tahun Instalasi</label>
                     <input type="text" class="form-control" id="installEdit" name="install" require />
                     <div class="invalid-feedback">Masukkan Tahun Instalasi</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="maintananceEdit" class="form-label">Tanggal Maintanance Terakhir</label>
                     <input type="text" class="form-control" id="maintananceEdit" name="maintanance" required />
                     <div class="invalid-feedback">Masukkan Tanggal Maintanance terakhir (Jika tidak ada isi dengan -)</div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Edit</button>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Delete -->
   <div class="modal fade" id="delete" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteLabel">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="deleteLabel">Hapus Data Potensi</h5>
            </div>
            <div class="modal-body">
               <p>Apakah anda yakin menghapus data <span id="itemNameDelete"></span> <span id="itemBrand"></span></p>
            </div>
            <div class="modal-footer">
               <a class="btn btn-danger" id="deleteButton" href="#">Hapus</a>
               <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kembali</button>
            </div>
         </div>
      </div>
   </div>
</div>

</div>
<!--Container Main end-->
<script>
   $(document).on('click', '#buttonEdit', function() {
      const id = $(this).data('id');
      // console.log('Edit button clicked for ID:', id);
      $.ajax({
         url: baseUrl + 'data/potency/fire/' + id,
         success: function(respond) {
            let data = respond;
            $('#itemNameEdit').text(data.category + ' ' + data.brand + 'lantai ' + data.floor);
            $('#floorEdit').val(data.floor).change();
            $('#roomEdit').val(data.room).change();
            $('#categoryEdit').val(data.category).change();
            $('#nameEdit').val(data.name);
            $('#vendorEdit').val(data.vendor);
            $('#brandEdit').val(data.brand);
            $('#typeEdit').val(data.type);
            $('#barcodeEdit').val(data.barcode);
            $('#quantityEdit').val(data.quantity);
            $('#conditionEdit').val(data.condition).change();
            $('#infoEdit').val(data.info);
            $('#installEdit').val(data.install);
            $('#maintananceEdit').val(data.maintanance);
            $('#editForm').attr('action', baseUrl + 'data/potency/fireUpdate/' + id);
            $('#editModal').modal('show');
         },
      })
   });

   $(document).on('click', '#buttonDelete', function() {
      const id = $(this).data('id');
      console.log('Delete button clicked for ID:', id);
      $.ajax({
         url: baseUrl + 'data/potency/fire/' + id,
         success: function(respond) {
            var data = respond;
            $('#itemNameDelete').text(data.category);
            $('#itemBrand').text(data.brand);
            $('#deleteButton').attr('href', baseUrl + 'data/potency/fireDelete/' + id);
            $('#delete').modal('show');
         }
      })
   });
</script>

<!-- Custom JS -->
<script type="module" src="<?= base_url('js/potency.js'); ?>"></script>
<?= $this->endSection(); ?>