<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mx-1 py-1">
   <div class="row my-2">
      <div class="col-6 text-start">
         <h2 class="fw-bold">Data Potensi</h2>
         <h2 class="fw-bold">Perangkat User</h2>
      </div>
      <div class="col-6 text-end">
         <h2 id="time" class="fw-bold"></h2>
         <h4 id="date"></h4>
      </div>
   </div>

   <div class="mt-5">
      <table id="user" class="mt-3 table table-bordered table-responsive table-striped" style="width:100%">
         <thead>
            <tr class="table-danger text-center">
               <th>No</th>
               <th>Lantai</th>
               <th>Ruangan</th>
               <th>Kategori</th>
               <th>No Barcode</th>
               <th>Nama</th>
               <th>Source A</th>
               <th>Source B</th>
               <th>Status</th>
               <th>Keterangan</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($rack as $key => $r) { ?>
               <tr>
                  <td><?= $key + 1; ?></td>
                  <td><?= $r['floor']; ?></td>
                  <td><?= $r['room']; ?></td>
                  <td><?= $r['category']; ?></td>
                  <td><?= $r['barcode']; ?></td>
                  <td><?= $r['name']; ?></td>
                  <td><?= $r['source_a']; ?></td>
                  <td><?= $r['source_b']; ?></td>
                  <td><?= $r['status']; ?></td>
                  <td><?= $r['info']; ?></td>
                  <td>
                     <button type="button" id="buttonEdit" class="btn btn-primary" data-id="<?= $r['id']; ?>" data data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                        <i class='bx bxs-edit'></i>
                     </button>
                     <button type="button" id="buttonDelete" class="btn btn-danger" data-id="<?= $r['id']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
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
            <form action="<?= base_url() ?>data/potency/rackAdd" method="post" class="needs-validation" novalidate>
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
                        <option value="IT">IT</option>
                        <option value="Core">Core</option>
                        <option value="Transmisi">UPS</option>
                        <option value="Radio">Radio</option>
                     </select>
                     <div class="invalid-feedback">Pilih Kategori</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="barcodeAdd" class="form-label">Barcode</label>
                     <input type="number" class="form-control" id="barcodeAdd" name="barcode" required />
                     <div class="invalid-feedback">Masukkan Barcode (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="nameAdd" class="form-label">Nama</label>
                     <input type="text" class="form-control" id="nameAdd" name="name" required />
                     <div class="invalid-feedback">Masukkan Nama (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="sourceAAdd" class="form-label">Source A</label>
                     <input type="text" class="form-control" id="sourceAAdd" name="source_a" required />
                     <div class="invalid-feedback">Masukkan Source A (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="sourceBAdd" class="form-label">Source B</label>
                     <input type="text" class="form-control" id="sourceBAdd" name="source_b" required />
                     <div class="invalid-feedback">Masukkan Source B (Jika tidak ada isi dengan -)</div>
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
                        <option value="IT">IT</option>
                        <option value="Core">Core</option>
                        <option value="Transmisi">UPS</option>
                        <option value="Radio">Radio</option>
                     </select>
                     <div class="invalid-feedback">Pilih Kategori</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="barcodeEdit" class="form-label">Barcode</label>
                     <input type="number" class="form-control" id="barcodeEdit" name="barcode" required />
                     <div class="invalid-feedback">Masukkan Barcode (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="nameEdit" class="form-label">Nama</label>
                     <input type="text" class="form-control" id="nameEdit" name="name" required />
                     <div class="invalid-feedback">Masukkan Nama (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="sourceAEdit" class="form-label">Source A</label>
                     <input type="text" class="form-control" id="sourceAEdit" name="source_a" required />
                     <div class="invalid-feedback">Masukkan Source A (Jika tidak ada isi dengan -)</div>
                  </div>
                  <div class="mb-3 col-md-4">
                     <label for="sourceBEdit" class="form-label">Source B</label>
                     <input type="text" class="form-control" id="sourceBEdit" name="source_b" required />
                     <div class="invalid-feedback">Masukkan Source B (Jika tidak ada isi dengan -)</div>
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
               <p>Apakah anda yakin menghapus data <span id="itemNameDelete"></span></span></p>
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
         url: baseUrl + 'data/potency/rack/' + id,
         success: function(respond) {
            let data = respond;
            $('#itemNameEdit').text(data.name);
            $('#floorEdit').val(data.floor).change();
            $('#roomEdit').val(data.room).change();
            $('#categoryEdit').val(data.category).change();
            $('#barcodeEdit').val(data.barcode);
            $('#nameEdit').val(data.name);
            $('#sourceAEdit').val(data.source_a);
            $('#sourceBEdit').val(data.source_b);
            $('#statusEdit').val(data.status).change();
            $('#infoEdit').val(data.info);
            $('#editForm').attr('action', baseUrl + 'data/potency/rackUpdate/' + id);
            $('#editModal').modal('show');
         },
      })
   });

   $(document).on('click', '#buttonDelete', function() {
      const id = $(this).data('id');
      console.log('Delete button clicked for ID:', id);
      $.ajax({
         url: baseUrl + 'data/potency/rack/' + id,
         success: function(respond) {
            var data = respond;
            $('#itemNameDelete').text(data.name);
            $('#deleteButton').attr('href', baseUrl + 'data/potency/rackDelete/' + id);
            $('#delete').modal('show');
         }
      })
   });
</script>

<!-- Custom JS -->
<script type="module" src="<?= base_url('js/potency.js'); ?>"></script>
<?= $this->endSection(); ?>