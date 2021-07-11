<!DOCTYPE html>
<html>

<head>

	<title><?php echo $judul; ?></title>

	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/') ?>images/logo-smk.png">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>login/style.css" media="screen" title="no title">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">



<body class="hold-transition login-page" background="<?= base_url('assets/'); ?>images/background/bg-login-3.jpg">

	<div class="container">
		<div class="judul">
			<h1>APLIKASI PENENTUAN SISWA BERMASALAH</h1>
		</div>

		<div class="logo">
			<img src="<?= base_url('assets/') ?>images/logo-smk.png" alt="user" class="center">
			<img src="<?= base_url('assets/') ?>images/logo-text-smk.png" class="center2" alt="user">
		</div>

		<form action="<?= base_url('login'); ?>" method="post">

			<div class="login">
				<div class="avatar">
					<i class="fa fa-user"></i>
				</div>

				<h2>Form Login</h2>
				<?= $this->session->flashdata('message'); ?>

				<div class="box-login">
					<i class="fas fa-user"></i>
					<input type="text" name="username" id="username" class="form-control form-control-user" placeholder="Username">
					<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<div class="box-login">
					<i class="fas fa-lock"></i>
					<input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password">
					<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>

				<button type="submit" name="login" class="btn-login">Login</button>

				<div class="bottom">
					<a href="<?= base_url('login/registration'); ?>">Register</a>
					<a href="#">Forgot Password</a>
				</div>
			</div>
		</form>
	</div>

	<!-- jQuery 3 -->
	<script src="<?= base_url('assets/login/'); ?>vendor_components/jquery/dist/jquery.min.js"></script>

	<!-- popper -->
	<script src="<?= base_url('assets/login/'); ?>vendor_components/popper/dist/popper.min.js"></script>

	<!-- Bootstrap 4.0-->
	<script src="<?= base_url('assets/login/'); ?>vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
	</head>

</html>