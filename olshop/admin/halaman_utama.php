<?php

include 'header.php';
// pesanan baru 
$result1 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE terima = 0 and tolak = 0");
$jml1 = mysqli_num_rows($result1);

// pesanan dibatalkan/ditolak
$result2 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE  tolak = 1");
$jml2 = mysqli_num_rows($result2);

// pesanan diterima
$result3 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE  terima = 1");
$jml3 = mysqli_num_rows($result3);

?>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div style="background-color: #f8c8d8; padding-bottom: 60px; padding-left: 20px; padding-right: 20px; padding-top: 10px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
				<h4 style="color: #ff66b2;">PESANAN BARU</h4>
				<h4 style="font-size: 56pt; color: #ff66b2;"><b><?= $jml1; ?></b></h4>
			</div>
		</div>

		<div class="col-md-4">
			<div style="background-color: #ffebf0; padding-bottom: 60px; padding-left: 20px; padding-right: 20px; padding-top: 10px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
				<h4 style="color: #ff3385;">PESANAN DIBATALKAN</h4>
				<h4 style="font-size: 56pt; color: #ff3385;"><b><?= $jml2; ?></b></h4>
			</div>
		</div>

		<div class="col-md-4">
			<div style="background-color: #ffe6f0; padding-bottom: 60px; padding-left: 20px; padding-right: 20px; padding-top: 10px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
				<h4 style="color: #ff80bf;">PESANAN DITERIMA</h4>
				<h4 style="font-size: 56pt; color: #ff80bf;"><b><?= $jml3; ?></b></h4>
			</div>
		</div>

	</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<?php
include 'footer.php';
?>