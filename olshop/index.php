<?php
include 'header.php';
?>

<!-- Link to Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- IMAGE -->
<div class="container-fluid" style="margin: 0; padding: 0; background: linear-gradient(to bottom right, #FFC0CB, #FFD1DC);">
    <div class="image animate__animated animate__fadeIn" style="margin-top: -21px;">
        <img src="image/home/gwlang.jpg" alt="Banner" class="img-fluid" style="width: 100%; max-height: 400px; object-fit: cover; border-radius: 15px;">
    </div>
</div>
<br><br>

<!-- PRODUK TERBARU -->
<div class="container">
    <h4 class="text-center animate__animated animate__bounceIn" style="font-family: 'Comic Sans MS', cursive; padding: 15px 10px; font-style: italic; line-height: 29px; border-top: 3px solid #FFB6C1; border-bottom: 3px solid #FFB6C1; color: #D2698B;">
        OrizaAccessories adalah pelopor dalam penjualan gelang manik-manik yang unik di Indonesia. Kami menyediakan berbagai macam produk yang menarik, penuh warna, dan tentu saja, terjangkau untuk semua kalangan.
    </h4>

    <h2 class="animate__animated animate__fadeInDown" style="width: 100%; border-bottom: 4px solid #FFB6C1; margin-top: 50px; color: #D2698B;"><b>Our Products</b></h2>

    <div class="row animate__animated animate__fadeInUp">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM produk");
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" style="border-radius: 10px; overflow: hidden; background: #FFE4E1; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <img src="image/produk/<?= $row['image']; ?>" alt="<?= $row['nama']; ?>" class="img-fluid" style="height: 250px; object-fit: cover;">
                    <div class="caption text-center" style="padding: 15px;">
                        <h3 style="color: #D2698B;"><?= $row['nama']; ?></h3>
                        <h4 style="color: #333;">Rp.<?= number_format($row['harga']); ?></h4>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-info btn-block" style="background-color: #FF69B4; border: none;">Detail</a>
                            </div>
                            <?php if (isset($_SESSION['kd_cs'])) { ?>
                                <div class="col-md-6">
                                    <a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1" class="btn btn-primary btn-block" style="background-color: #FF1493; border: none;">Tambah</a>
                                </div>
                            <?php } else { ?>
                                <div class="col-md-6">
                                    <a href="keranjang.php" class="btn btn-primary btn-block" style="background-color: #FF1493; border: none;">Tambah</a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<br><br><br><br>
<?php
include 'footer.php';
?>
