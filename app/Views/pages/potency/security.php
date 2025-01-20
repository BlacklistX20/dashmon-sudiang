<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mx-1 py-1">
   <div class="row my-2">
      <div class="col-6 text-start">
         <h2 class="fw-bold">Data Potensi</h2>
         <h2 class="fw-bold">Keamanan Gedung</h2>
      </div>
      <div class="col-6 text-end">
         <h2 id="time" class="fw-bold"></h2>
         <h4 id="date"></h4>
      </div>
   </div>

   <div class="mt-5">
      <table id="security" class="mt-3 table table-bordered table-responsive table-striped" style="width:100%">
         <thead>
            <tr class="table-danger text-center">
               <th>No</th>
               <th>Lantai</th>
               <th>Ruangan</th>
               <th>Vendor</th>
               <th>Brand</th>
               <th>Type</th>
               <th>Jumlah</th>
               <th>Kondisi</th>
               <th>Status</th>
               <th>Keterangan</th>
               <th>Tahun Instalasi</th>
               <th>Maintanance</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($security as $key => $s) { ?>
               <tr>
                  <td><?= $key + 1; ?></td>
                  <td><?= $s['floor']; ?></td>
                  <td><?= $s['room']; ?></td>
                  <td><?= $s['vendor']; ?></td>
                  <td><?= $s['brand']; ?></td>
                  <td><?= $s['type']; ?></td>
                  <td><?= $s['quantity']; ?></td>
                  <td><?= $s['condition']; ?></td>
                  <td><?= $s['status']; ?></td>
                  <td><?= $s['info']; ?></td>
                  <td><?= $s['install']; ?></td>
                  <td><?= $s['maintanance']; ?></td>
                  <td>
                     <button type="button" id="buttonEdit" class="btn btn-primary" data-id="<?= $s['id']; ?>" data data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                        <i class='bx bxs-edit'></i>
                     </button>
                     <button type="button" id="buttonDelete" class="btn btn-danger" data-id="<?= $s['id']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
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
            <form action="<?= base_url() ?>data/potency/securityAdd" method="post" class="needs-validation" novalidate>
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
                     <label for="quantityAdd" class="form-label">Jumlah</label>
                     <input type="number" class="form-control" id="quantityAdd" name="quantity" required />
                     <div class="invalid-feedback">Masukkan Jumlah (Jika tidak ada isi dengan -)</div>
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
                     <label for="statusAdd" class="form-label">Status</label>
                     <select class="form-select" name="status" id="statusAdd" required>
                        <option selected disabled value="">-- Pilih Status --</option>
                        <option value="ON">ON</option>
                        <option value="OFF">OFF</option>
                     </select>
                     <div class="invalid-feedback">Pilih Status</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="infoAdd" class="form-label">Keterangan</label>
                     <textarea class="form-control" name="info" id="infoAdd" rows="3" required></textarea>
                     <div class="invalid-feedback">Masukkan Keterangan (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="installAdd" class="form-label">Tanggal Instalasi</label>
                     <input type="date" class="form-control" id="installAdd" name="install" required />
                     <div class="invalid-feedback">Masukkan Tanggal Instalasi</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="maintananceAdd" class="form-label">Tanggal Maintanance Terakhir</label>
                     <input type="date" class="form-control" id="maintananceAdd" name="maintanance" required />
                     <div class="invalid-feedback">Masukkan Tanggal Maintanance Terakhir</div>
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
                     <label for="quantityEdit" class="form-label">Jumlah</label>
                     <input type="number" class="form-control" id="quantityEdit" name="quantity" required />
                     <div class="invalid-feedback">Masukkan Jumlah (Jika tidak ada isi dengan -)</div>
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
                     <label for="statusEdit" class="form-label">Status</label>
                     <select class="form-select" name="status" id="statusEdit" required>
                        <option selected disabled value="">-- Pilih Status --</option>
                        <option value="ON">ON</option>
                        <option value="OFF">OFF</option>
                     </select>
                     <div class="invalid-feedback">Pilih Status</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="infoEdit" class="form-label">Keterangan</label>
                     <textarea class="form-control" name="info" id="infoEdit" rows="3" required></textarea>
                     <div class="invalid-feedback">Masukkan Keterangan (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="installEdit" class="form-label">Tanggal Instalasi</label>
                     <input type="date" class="form-control" id="installEdit" name="install" required />
                     <div class="invalid-feedback">Masukkan Tanggal Instalasi</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="maintananceEdit" class="form-label">Tanggal Maintanance Terakhir</label>
                     <input type="date" class="form-control" id="maintananceEdit" name="maintanance" required />
                     <div class="invalid-feedback">Masukkan Tanggal Maintanance Terakhir</div>
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
               <p>Apakah anda yakin menghapus data <span id="itemNameDelete"></span></p>
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
         url: baseUrl + 'data/potency/security/' + id,
         success: function(respond) {
            let data = respond;
            $('#itemNameEdit').text("CCTV " + data.brand + " Lantai " + data.floor + " Ruang " + data.room);
            $('#floorEdit').val(data.floor).change();
            $('#roomEdit').val(data.room).change();
            $('#vendorEdit').val(data.vendor);
            $('#brandEdit').val(data.brand);
            $('#typeEdit').val(data.type);
            $('#quantityEdit').val(data.quantity);
            $('#conditionEdit').val(data.condition).change();
            $('#ststusEdit').val(data.ststus);
            $('#infoEdit').val(data.info);
            $('#installEdit').val(data.install);
            $('#maintananceEdit').val(data.maintanance);
            $('#editForm').attr('action', baseUrl + 'data/potency/securityUpdate/' + id);
            $('#editModal').modal('show');
         },
      })
   });

   $(document).on('click', '#buttonDelete', function() {
      const id = $(this).data('id');
      console.log('Delete button clicked for ID:', id);
      $.ajax({
         url: baseUrl + 'data/potency/security/' + id,
         success: function(respond) {
            var data = respond;
            $('#itemNameDelete').text("CCTV " + data.brand + " Lantai " + data.floor + " Ruang " + data.room);
            $('#deleteButton').attr('href', baseUrl + 'data/potency/securityDelete/' + id);
            $('#delete').modal('show');
         }
      })
   });
</script>

<!-- Custom JS -->
<script type="module" src="<?= base_url('js/potency.js'); ?>"></script>
<?= $this->endSection(); ?>