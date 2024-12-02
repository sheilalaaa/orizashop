<?php 
include 'header.php';
?>

<style>
	/* Soft Pink Background and Form Styling */
	.container {
		padding-bottom: 250px;
		background-color: #f8d0d6; /* Soft Pink Background */
		border-radius: 10px;
		padding: 30px;
		box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
	}

	h2 {
		width: 100%;
		border-bottom: 4px solid #ff66b2; /* Soft Pink Border */
		padding-bottom: 10px;
		color: #ff66b2; /* Soft Pink Text for Title */
		font-family: 'Arial', sans-serif;
	}

	/* Form Elements */
	.form-group label {
		color: #ff66b2; /* Soft Pink Label Color */
		font-weight: bold;
	}

	.form-control {
		border-radius: 5px;
		border: 1px solid #ff66b2;
		padding: 12px;
		background-color: #fff5f8; /* Light pink background for inputs */
		color: #333;
	}

	.form-control:focus {
		border-color: #ff3385; /* Darker pink on focus */
		box-shadow: 0 0 5px rgba(255, 51, 133, 0.5);
	}

	/* Button Styling */
	.btn-success {
		background-color: #ff66b2; /* Soft Pink Button */
		border: none;
		color: white;
		font-size: 16px;
		padding: 12px 25px;
		border-radius: 5px;
		width: 100%;
		cursor: pointer;
	}

	.btn-success:hover {
		background-color: #ff3385; /* Darker Pink on hover */
	}

	/* Row spacing */
	.row {
		margin-bottom: 20px;
	}
</style>

<div class="container">
	<h2><b>Register</b></h2>
	<form action="proses/register.php" method="POST">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Nama</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama" name="nama" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Email</label>
					<input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Username</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Username" name="username" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">No Telepon</label>
					<input type="text" class="form-control" id="exampleInputPassword1" placeholder="+62" name="telp" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="exampleInputPassword1">Konfirmasi Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Konfirmasi Password" name="konfirmasi" required>
				</div>
			</div>
		</div>

		<button type="submit" class="btn btn-success">Register</button>
	</form>
</div>

<?php 
include 'footer.php';
?>
