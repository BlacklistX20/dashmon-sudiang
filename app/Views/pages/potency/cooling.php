<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mx-1 py-1">
   <div class="row my-2">
      <div class="col-6 text-start">
         <h2 class="fw-bold">Data Potensi</h2>
         <h2 class="fw-bold">Cooling System</h2>
      </div>
      <div class="col-6 text-end">
         <h2 id="time" class="fw-bold"></h2>
         <h4 id="date"></h4>
      </div>
   </div>

   <div class="mt-5">
      <table id="cool" class="mt-3 table table-bordered table-responsive table-striped" style="width:100%">
         <thead>
            <tr class="table-danger text-center">
               <th>No</th>
               <th>Barcode</th>
               <th>Lantai</th>
               <th>Ruangan</th>
               <th>Kategory</th>
               <th>Nama</th>
               <th>Vendor</th>
               <th>Brand</th>
               <th>Type</th>
               <th>Kompresor</th>
               <th>Flow</th>
               <th>Kapasitas</th>
               <th>Kondisi</th>
               <th>Status</th>
               <th>Remark Aging</th>
               <th>Keterangan</th>
               <th>Installation</th>
               <th>Maintanance</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($cool as $key => $c) { ?>
               <tr>
                  <td><?= $key + 1; ?></td>
                  <td><?= $c['barcode']; ?></td>
                  <td><?= $c['floor']; ?></td>
                  <td><?= $c['room']; ?></td>
                  <td><?= $c['category']; ?></td>
                  <td><?= $c['name']; ?></td>
                  <td><?= $c['vendor']; ?></td>
                  <td><?= $c['brand']; ?></td>
                  <td><?= $c['type']; ?></td>
                  <td><?= $c['compressor']; ?></td>
                  <td><?= $c['flow']; ?></td>
                  <td><?= $c['capacity']; ?></td>
                  <td><?= $c['condition']; ?></td>
                  <td><?= $c['status']; ?></td>
                  <td><?= $c['aging']; ?></td>
                  <td><?= $c['info']; ?></td>
                  <td><?= $c['install']; ?></td>
                  <td><?= $c['maintanance']; ?></td>
                  <td>
                     <button type="button" id="buttonEdit" class="btn btn-primary" data-id="<?= $c['id']; ?>" data data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                        <i class='bx bxs-edit'></i>
                     </button>
                     <button type="button" id="buttonDelete" class="btn btn-danger" data-id="<?= $c['id']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                        <i class='bx bxs-trash'></i>
                     </button>
                  </td>
               </tr>
            <?php }; ?>
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
            <form action="<?= base_url() ?>data/potency/coolAdd" method="post" class="needs-validation" novalidate>
               <div class="modal-body row g-3">
                  <div class="mb-3 col-md-4">
                     <label for="barcodeAdd" class="form-label">Barcode Number</label>
                     <input type="text" class="form-control" id="barcodeAdd" name="barcode" required />
                     <div class="invalid-feedback">
                        Masukkan Barcode Number (Jika tidak ada isi dengan -)
                     </div>
                  </div>
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
                     </select>
                     <div class="invalid-feedback">Pilih Lantai</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="roomAdd" class="form-label">Ruang</label>
                     <select class="form-select change-room" name="room" id="roomAdd" required disabled>
                        <option selected disabled value="">-- Pilih Lantai --</option>
                     </select>
                     <div class="invalid-feedback">Pilih Ruangan</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="categoryAdd" class="form-label">Kategori</label>
                     <select class="form-select" name="category" id="categoryAdd" required>
                        <option selected disabled value="">-- Pilih Kategori --</option>
                        <option value="PAC">PAC</option>
                        <option value="AC Split">AC Split</option>
                        <option value="AC Standing">AC Standing</option>
                     </select>
                     <div class="invalid-feedback">Pilih Kategori</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="nameAdd" class="form-label">Nama</label>
                     <input type="text" class="form-control" id="nameAdd" name="name" required />
                     <div class="invalid-feedback">Masukkan Nama</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="vendorAdd" class="form-label">Vendor</label>
                     <input type="text" class="form-control" id="vendorAdd" name="vendor" required />
                     <div class="invalid-feedback">Masukkan Vendor</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="brandAdd" class="form-label">Brand</label>
                     <input type="text" class="form-control" id="brandAdd" name="brand" required />
                     <div class="invalid-feedback">Masukkan Brand (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="typeAdd" class="form-label">Type</label>
                     <input type="text" class="form-control" id="typeAdd" name="type" required />
                     <div class="invalid-feedback">Masukkan Type (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="compressorAdd" class="form-label">Jenis Kompresor</label>
                     <select class="form-select" name="compressor" id="compressorAdd" required>
                        <option selected disabled value="">-- Pilih Jenis Kompresor --</option>
                        <option value="Single">Single</option>
                        <option value="Dual">Dual</option>
                        <option value="-">-</option>
                     </select>
                     <div class="invalid-feedback">Pilih Jenis Kompresor</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="flowAdd" class="form-label">Jenis Flow</label>
                     <select class="form-select" name="flow" id="flowAdd" required>
                        <option selected disabled value="">-- Pilih Jenis Flow --</option>
                        <option value="Up">Up</option>
                        <option value="Down">Down</option>
                        <option value="Inrow">Inrow</option>
                        <option value="-">-</option>
                     </select>
                     <div class="invalid-feedback">Pilih Jenis Flow</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="capacityAdd" class="form-label">Kapasitas (Kva)</label>
                     <input type="number" class="form-control" id="capacityAdd" name="capacity" step="0.01" required />
                     <div class="invalid-feedback">Masukkan Kapasitas </div>
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
                     <label for="agingAdd" class="form-label">Remark Aging</label>
                     <select class="form-select" name="aging" id="agingAdd" required>
                        <option selected disabled value="">-- Pilih Remark Aging --</option>
                        <option value="Under">Under 10 Years</option>
                        <option value="Above">Above 10 Years</option>
                     </select>
                     <div class="invalid-feedback">Pilih Remark Aging</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="infoAdd" class="form-label">Keterangan</label>
                     <textarea class="form-control" name="info" id="infoAdd" rows="3" required></textarea>
                     <div class="invalid-feedback">Masukkan Keterangan (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="installAdd" class="form-label">Tanggal Instalasi</label>
                     <input type="date" class="form-control" id="installAdd" name="install" require />
                     <div class="invalid-feedback">Masukkan Tanggal Instalasi</div>
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
            <form action="#" id="editForm" method="post">
               <div class="modal-body row g-3">
               <div class="mb-3 col-md-4">
                     <label for="barcodeEdit" class="form-label">Barcode Number</label>
                     <input type="text" class="form-control" id="barcodeEdit" name="barcode" required />
                     <div class="invalid-feedback">
                        Masukkan Barcode Number (Jika tidak ada isi dengan -)
                     </div>
                  </div>
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
                     </select>
                     <div class="invalid-feedback">Pilih Lantai</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="roomEdit" class="form-label">Ruang</label>
                     <select class="form-select change-room" name="room" id="roomEdit" required disabled>
                        <option selected disabled value="">-- Pilih Lantai --</option>
                     </select>
                     <div class="invalid-feedback">Pilih Ruangan</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="categoryEdit" class="form-label">Kategori</label>
                     <select class="form-select" name="category" id="categoryEdit" required>
                        <option selected disabled value="">-- Pilih Kategori --</option>
                        <option value="PAC">PAC</option>
                        <option value="AC Split">AC Split</option>
                        <option value="AC Standing">AC Standing</option>
                     </select>
                     <div class="invalid-feedback">Pilih Kategori</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="nameEdit" class="form-label">Nama</label>
                     <input type="text" class="form-control" id="nameEdit" name="name" required />
                     <div class="invalid-feedback">Masukkan Nama</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="vendorEdit" class="form-label">Vendor</label>
                     <input type="text" class="form-control" id="vendorEdit" name="vendor" required />
                     <div class="invalid-feedback">Masukkan Vendor</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="brandEdit" class="form-label">Brand</label>
                     <input type="text" class="form-control" id="brandEdit" name="brand" required />
                     <div class="invalid-feedback">Masukkan Brand (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="typeEdit" class="form-label">Type</label>
                     <input type="text" class="form-control" id="typeEdit" name="type" required />
                     <div class="invalid-feedback">Masukkan Type (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="compressorEdit" class="form-label">Jenis Kompresor</label>
                     <select class="form-select" name="compressor" id="compressorEdit" required>
                        <option selected disabled value="">-- Pilih Jenis Kompresor --</option>
                        <option value="Single">Single</option>
                        <option value="Dual">Dual</option>
                        <option value="-">-</option>
                     </select>
                     <div class="invalid-feedback">Pilih Jenis Kompresor</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="flowEdit" class="form-label">Jenis Flow</label>
                     <select class="form-select" name="flow" id="flowEdit" required>
                        <option selected disabled value="">-- Pilih Jenis Flow --</option>
                        <option value="Up">Up</option>
                        <option value="Down">Down</option>
                        <option value="Inrow">Inrow</option>
                        <option value="-">-</option>
                     </select>
                     <div class="invalid-feedback">Pilih Jenis Flow</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="capacityEdit" class="form-label">Kapasitas (Kva)</label>
                     <input type="number" class="form-control" id="capacityEdit" name="capacity" step="0.01" required />
                     <div class="invalid-feedback">Masukkan Kapasitas </div>
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
                     <label for="agingEdit" class="form-label">Remark Aging</label>
                     <select class="form-select" name="aging" id="agingEdit" required>
                        <option selected disabled value="">-- Pilih Remark Aging --</option>
                        <option value="Under">Under 10 Years</option>
                        <option value="Above">Above 10 Years</option>
                     </select>
                     <div class="invalid-feedback">Pilih Remark Aging</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="infoEdit" class="form-label">Keterangan</label>
                     <textarea class="form-control" name="info" id="infoEdit" rows="3" required></textarea>
                     <div class="invalid-feedback">Masukkan Keterangan (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="installEdit" class="form-label">Tanggal Instalasi</label>
                     <input type="date" class="form-control" id="installEdit" name="install" require />
                     <div class="invalid-feedback">Masukkan Tanggal Instalasi</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="maintananceEdit" class="form-label">Tanggal Maintanance Terakhir</label>
                     <input type="text" class="form-control" id="maintananceEdit" name="maintanance" required />
                     <div class="invalid-feedback">Masukkan Tanggal Maintanance terakhir (Jika tidak ada isi dengan -)</div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Edit</button>
                  <button class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
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
               <p>Apakah anda yakin menghapus data <span id="deleteName"></span></p>
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
         url: baseUrl + 'data/potency/cool/' + id,
         success: function(respond) {
            let data = respond;
            $("#deviceName").text(data.name);
            $("#barcodeEdit").val(data.barcode);
            $("#floorEdit").val(data.floor).change();
            $("#roomEdit").val(data.room).change();
            $("#categoryEdit").val(data.category).change();
            $("#nameEdit").val(data.name);
            $("#vendorEdit").val(data.vendor);
            $("#brandEdit").val(data.brand);
            $("#typeEdit").val(data.type);
            $("#compressorEdit").val(data.compressor).change();
            $("#flowEdit").val(data.flow).change();
            $("#capacityEdit").val(data.capacity);
            $("#conditionEdit").val(data.condition).change();
            $("#statusEdit").val(data.status).change();
            $("#agingEdit").val(data.aging).change();
            $("#infoEdit").val(data.info)
            $("#installEdit").val(data.install);
            $("#maintananceEdit").val(data.maintanance);
            $('#editForm').attr('action', baseUrl + 'data/potency/coolUpdate/' + id);
            $('#editModal').modal('show');
         },
      })
   });

   $(document).on('click', '#buttonDelete', function() {
      const id = $(this).data('id');
      // console.log('Delete button clicked for ID:', id);
      $.ajax({
         url: baseUrl + 'data/potency/cool/' + id,
         success: function(respond) {
            var data = respond;
            $('#deleteName').text(data.nama);
            $('#deleteButton').attr('href', baseUrl + 'data/potency/coolDelete/' + id);
            $('#delete').modal('show');
         }
      })
   });
</script>

<!-- Custom JS -->
<script type="module" src="<?= base_url('js/potency.js'); ?>"></script>
<?= $this->endSection(); ?>