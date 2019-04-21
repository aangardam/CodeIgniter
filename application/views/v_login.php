<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>PERSIS</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url()?>assets/css/login.css" rel="stylesheet">

</head>

<body>

	<div class="d-flex" id="wrapper">
		<div id="page-content-wrapper">

			<div class="kotak_login">
				<center> <img src="<?php echo base_url('img/6.png');?>" width="100px"> </center>
				<center> <p class="tulisan_login">Silahkan login</p> </center>

				<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
					<label>Username</label>
					<input type="text" name="username" class="form_login" placeholder="Username atau Id ..">

					<label>Password</label>
					<input type="password" name="password" class="form_login" placeholder="Password ..">
					<label>Jabatan</label>

					<select name="jabatan" class="form_login" required="">
						<option value="" selected="" disabled=""> Pilih Jabatan </option>
						<option value="kepsek"> Kepala Sekolah </option>
						<option value="guru"> Guru </option>
						<option value="tu"> Tata Usaha </option>
						<option value="siswa"> Siswa </option>
						<option value="ortu"> Orang Tua </option>
					</select>
					<input type="submit" value="Login" class="tombol_login">
					<br/>

				</form>

			</div>

		</div>
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
	</div>

</body>

</html>
