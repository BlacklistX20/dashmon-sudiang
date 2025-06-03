<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Dashboard Monitoring TTC</title>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url('css/style.css'); ?>" />

	<!-- Bootstrap 5 -->
	<link rel="stylesheet" href="<?= base_url('node_modules/bootstrap/dist/css/bootstrap.min.css'); ?>">
	<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
	<script src="<?= base_url('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>

	<!-- jQuery -->
	<script src="<?= base_url('node_modules/jquery/dist/jquery.min.js'); ?>"></script>

	<!-- Box Icon -->
	<link href='<?= base_url('node_modules/boxicons/css/boxicons.min.css'); ?>' rel='stylesheet'>

	<!-- Data Tables -->
	<link rel="stylesheet" href="<?= base_url('datatables/datatables.min.css'); ?>">
	<script src="<?= base_url('datatables/datatables.min.js'); ?>"></script>

	<!-- chart.js -->
	<script src="<?= base_url('node_modules/chart.js/dist/chart.umd.js') ?>"></script>
	<script src="<?= base_url('node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.js') ?>"></script>
</head>

<body id="body-pd">
	<?= $this->include('layout/sidebar'); ?>
	<!--Container Main start-->
	<div class="height-100 bg-light">

	<?= $this->renderSection('content'); ?>

	<!-- Custom Sidebar Script -->
	<script src="<?= base_url('js/main.js'); ?>"></script>

	<!-- php BaseUrl -->
	<script>
		const baseUrl = '<?= base_url() ?>index.php/'
		// console.log(baseUrl);
		
	</script>
</body>

</html>