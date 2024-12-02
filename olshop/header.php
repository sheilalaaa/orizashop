<?php 
session_start();
include 'koneksi/koneksi.php';
if(isset($_SESSION['kd_cs'])){
	$kode_cs = $_SESSION['kd_cs'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Oriza Accessories</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style>
		body {
			font-family: Arial, sans-serif;
		}
		.navbar-default {
			background-color: #6ec1e4; /* Biru Muda */
			border-color: #5ab3d4;
		}
		.navbar-default .navbar-brand {
			color: #ffffff;
		}
		.navbar-default .navbar-nav > li > a {
			color: #ffffff;
		}
		.navbar-default .navbar-brand:hover,
		.navbar-default .navbar-nav > li > a:hover {
			color: #004a78;
		}
		.top {
			background-color: #d9f3fc; /* Biru Muda Lembut */
			color: #004a78;
			padding: 10px 0;
		}
		.top span {
			font-size: 14px;
		}
		.dropdown-menu {
			background-color: #6ec1e4;
		}
		.dropdown-menu > li > a {
			color: #ffffff;
		}
		.dropdown-menu > li > a:hover {
			background-color: #004a78;
			color: #ffffff;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row top">
			<center>
				<div class="col-md-4" style="padding: 3px;">
					<span> <i class="glyphicon glyphicon-earphone"></i> +6288213678040</span>
				</div>
				<div class="col-md-4" style="padding: 3px;">
					<span><i class="glyphicon glyphicon-envelope"></i> Orizaaccessories@gmail.com</span>
				</div>
				<div class="col-md-4" style="padding: 3px;">
					<span>Oriza Accessories</span>
				</div>
			</center>
		</div>
	</div>

	<nav class="navbar navbar-default" style="padding: 5px;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><b>Oriza Accessories</b></a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">Home</a></li>
					<li><a href="produk.php">Product</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="manual.php">Manual Aplikasi</a></li>
					<?php 
					if(isset($_SESSION['kd_cs'])){
						$kode_cs = $_SESSION['kd_cs'];
						$cek = mysqli_query($conn, "SELECT kode_produk FROM keranjang WHERE kode_customer = '$kode_cs'");
						$value = mysqli_num_rows($cek);
						?>
						<li><a href="keranjang.php"><i class="glyphicon glyphicon-shopping-cart"></i> <b>[ <?= $value ?> ]</b></a></li>
						<?php 
					}else{
						echo "<li><a href='keranjang.php'><i class='glyphicon glyphicon-shopping-cart'></i> [0]</a></li>";
					}
					if(!isset($_SESSION['user'])){
						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Akun <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="user_login.php">Login</a></li>
								<li><a href="register.php">Register</a></li>
							</ul>
						</li>
						<?php 
					}else{
						?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?= $_SESSION['user']; ?> <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="proses/logout.php">Log Out</a></li>
							</ul>
						</li>
						<?php 
					}
					?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</body>
</html>
