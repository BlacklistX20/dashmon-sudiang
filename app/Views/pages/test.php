<?php $this->load->view('layout/header'); ?>

<div class="text-center">
   <h2 class="fw-bold">Data Potensi</h2>
   <h4>TTC Sudiang Makassar</h2>
</div>

<?php $this->load->view('content/potency'); ?>

</div>
<!--Container Main end-->

<?php $this->load->view('layout/footer'); ?>

<!-- Custom JS -->
<script src="<?= base_url(); ?>asset/js/scriptPotency.js"></script>
<script>
   // Modal Electric
   $(".btnEditElec").click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyElById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#editNamaEl').val(data.nama)
            $('#editMerkEl').val(data.merk)
            $('#editKapasitasEl').val(data.kapasitas)
            $('#editSatuanEl').val(data.satuan).change()
            $('#editJumlahEl').val(data.jumlah)
            $('#editModalEl').attr('action', '<?= base_url() ?>ChangeData/editPotencyEl/' + id);
            $('#editElec').modal('show');
         },
      });
   });
   $('.btnDeleteElec').click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyElById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)

            $('#deleteNameEl').text(data.nama)
            $('#deleteMerkEl').text(data.merk)
            $('#deleteButtonEl').attr('href', '<?= base_url() ?>ChangeData/deletePotencyEl/' + id);
            $('#deleteElec').modal('show');
         }
      })
   });

   // Modal Cool
   $(".btnEditCool").click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyColById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#editLantaiCol').val(data.lantai).change()
            $('#editRuangCol').val(data.ruang)
            $('#editMerkCol').val(data.merk)
            $('#editTypeCol').val(data.type)
            $('#editCompCol').val(data.compressor).change()
            $('#editFlowCol').val(data.flow).change()
            $('#editJumlahCol').val(data.jumlah)
            $('#editKetCol').val(data.keterangan)
            $('#editModalCol').attr('action', '<?= base_url() ?>ChangeData/editPotencyCool/' + id);
            $('#editCool').modal('show');
         },
      });
   });
   $('.btnDeleteCool').click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyColById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)

            $('#deleteMerkCol').text(data.merk)
            $('#deleteTypeCol').text(data.type)
            $('#deleteLantaiCol').text(data.lantai)
            $('#deleteRuangCol').text(data.ruang)
            $('#deleteButtonCol').attr('href', '<?= base_url() ?>ChangeData/deletePotencyCool/' + id);
            $('#deleteCool').modal('show');
         }
      })
   });

   // Modal Fire
   $(".btnEditFire").click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyFireById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#editLantaiFire').val(data.lantai).change()
            $('#editRuangFire').val(data.ruang)
            $('#editNamaFire').val(data.nama)
            $('#editMerkFire').val(data.merk)
            $('#editTypeFire').val(data.type)
            $('#editJumlahFire').val(data.jumlah)
            $('#editKetFire').val(data.keterangan)
            $('#editModalFire').attr('action', '<?= base_url() ?>ChangeData/editPotencyFire/' + id);
            $('#editFire').modal('show');
         },
      });
   });
   $('.btnDeleteFire').click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyFireById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)

            $('#deleteNamaFire').text(data.nama)
            $('#deleteMerkFire').text(data.merk)
            $('#deleteLantaiFire').text(data.lantai)
            $('#deleteRuangFire').text(data.ruang)
            $('#deleteButtonFire').attr('href', '<?= base_url() ?>ChangeData/deletePotencyFire/' + id);
            $('#deleteFire').modal('show');
         }
      })
   });

   // Modal Ups
   $(".btnEditUps").click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyUpsById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#editNamaUps').val(data.nama)
            $('#editMerkUps').val(data.merk)
            $('#editTypeUps').val(data.type)
            $('#editMerkBattUps').val(data.merk_battery)
            $('#editTypeBattUps').val(data.type_battery)
            $('#editJumlahBattUps').val(data.jumlah_battery)
            $('#editKetUps').val(data.keterangan)
            $('#editModalUps').attr('action', '<?= base_url() ?>ChangeData/editPotencyUps/' + id);
            $('#editUps').modal('show');
         },
      });
   });
   $('.btnDeleteUps').click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyUpsById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#deleteNamaUps').text(data.nama)
            $('#deleteButtonUps').attr('href', '<?= base_url() ?>ChangeData/deletePotencyUps/' + id);
            $('#deleteUps').modal('show');
         }
      })
   });

   // Modal Recti
   $(".btnEditRect").click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyRectById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#editNamaRect').val(data.nama)
            $('#editMerkRect').val(data.merk)
            $('#editTypeRect').val(data.type)
            $('#editMerkBattRect').val(data.merk_battery)
            $('#editTypeBattRect').val(data.type_battery)
            $('#editJumlahBattRect').val(data.jumlah_battery)
            $('#editKetRect').val(data.keterangan)
            $('#editModalRect').attr('action', '<?= base_url() ?>ChangeData/editPotencyRect/' + id);
            $('#editRect').modal('show');
         },
      });
   });
   $('.btnDeleteRect').click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyRectById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#deleteNamaRect').text(data.nama)
            $('#deleteButtonRect').attr('href', '<?= base_url() ?>ChangeData/deletePotencyRect/' + id);
            $('#deleteRect').modal('show');
         }
      })
   });

   // Modal Penerangan
   $(".btnEditPene").click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyPeneById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#editNamaPene').val(data.nama)
            $('#editMerkPene').val(data.merk)
            $('#editTypePene').val(data.type)
            $('#editJumlahPene').val(data.jumlah)
            $('#editKetPene').val(data.keterangan)
            $('#editModalPene').attr('action', '<?= base_url() ?>ChangeData/editPotencyPene/' + id);
            $('#editPene').modal('show');
         },
      });
   });
   $('.btnDeletePene').click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyPeneById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#deleteNamaPene').text(data.nama)
            $('#deleteButtonPene').attr('href', '<?= base_url() ?>ChangeData/deletePotencyPene/' + id);
            $('#deletePene').modal('show');
         }
      })
   });

   // Modal Warning
   $(".btnEditWarn").click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyWarnById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#editNamaWarn').val(data.nama)
            $('#editMerkWarn').val(data.merk)
            $('#editTypeWarn').val(data.type)
            $('#editJumlahWarn').val(data.jumlah)
            $('#editKetWarn').val(data.keterangan)
            $('#editModalWarn').attr('action', '<?= base_url() ?>ChangeData/editPotencyWarn/' + id);
            $('#editWarn').modal('show');
         },
      });
   });
   $('.btnDeleteWarn').click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencyWarnById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#deleteNamaWarn').text(data.nama)
            $('#deleteButtonWarn').attr('href', '<?= base_url() ?>ChangeData/deletePotencyWarn/' + id);
            $('#deleteWarn').modal('show');
         }
      })
   });

   // Modal Support
   $(".btnEditSupp").click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencySuppById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#editNamaSupp').val(data.nama)
            $('#editMerkSupp').val(data.merk)
            $('#editTypeSupp').val(data.type)
            $('#editJumlahSupp').val(data.jumlah)
            $('#editKetSupp').val(data.keterangan)
            $('#editModalSupp').attr('action', '<?= base_url() ?>ChangeData/editPotencySupp/' + id);
            $('#editSupp').modal('show');
         },
      });
   });
   $('.btnDeleteSupp').click(function() {
      var id = $(this).data("id");
      $.ajax({
         url: '<?= base_url('getdata/potencySuppById/'); ?>' + id,
         success: function(respond) {
            var data = JSON.parse(respond)
            $('#deleteNamaSupp').text(data.nama)
            $('#deleteButtonSupp').attr('href', '<?= base_url() ?>ChangeData/deletePotencySupp/' + id);
            $('#deleteSupp').modal('show');
         }
      })
   });
</script>

</body>

</html>