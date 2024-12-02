<?php 
include 'header.php';
$kd = mysqli_real_escape_string($conn, $_GET['kode_cs']);
$cs = mysqli_query($conn, "SELECT * FROM customer WHERE kode_customer = '$kd'");
$rows = mysqli_fetch_assoc($cs);
?>

<!-- Link to Animate.css CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<div class="container-fluid" style="background: linear-gradient(to right, #FFD1DC, #FFB6C1); min-height: 100vh; padding: 50px 0;">
    <div class="container animate__animated animate__fadeInDown">
        <h2 class="text-center" style="border-bottom: 4px solid #FFB6C1; color: #D87093; font-weight: bold; font-size: 36px;">Checkout</h2>
        <div class="row">
            <div class="col-md-6 animate__animated animate__fadeInLeft">
                <h4>Daftar Pesanan</h4>
                <table class="table table-hover table-bordered" style="background-color: #FFF0F5; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                    <tr style="background-color: #FFB6C1; color: white;">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Sub Total</th>
                    </tr>
                    <?php 
                    $result = mysqli_query($conn, "SELECT * FROM keranjang WHERE kode_customer = '$kd'");
                    $no = 1;
                    $hasil = 0;
                    while($row = mysqli_fetch_assoc($result)){ ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['nama_produk']; ?></td>
                            <td>Rp.<?= number_format($row['harga']); ?></td>
                            <td><?= $row['qty']; ?></td>
                            <td>Rp.<?= number_format($row['harga'] * $row['qty']); ?></td>
                        </tr>
                        <?php 
                        $total = $row['harga'] * $row['qty'];
                        $hasil += $total;
                        $no++;
                    }
                    ?>
                    <tr>
                        <td colspan="5" style="text-align: right; font-weight: bold;">Grand Total: Rp.<?= number_format($hasil); ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="alert alert-success animate__animated animate__fadeInUp" role="alert">
            <h5><b>Pastikan Pesanan Anda Sudah Benar</b></h5>
        </div>
        <div class="alert alert-warning animate__animated animate__fadeInUp" role="alert">
            <h5><b>Isi Form di Bawah Ini</b></h5>
        </div>

        <form action="proses/order.php" method="POST" class="animate__animated animate__zoomIn">
            <input type="hidden" name="kode_cs" value="<?= $kd; ?>">
            <div class="form-group">
                <label for="nama" style="font-weight: bold;">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="<?= $rows['nama']; ?>" readonly style="border: 1px solid #FFB6C1;">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="provinsi" style="font-weight: bold;">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" placeholder="Provinsi" name="prov" style="border: 1px solid #FFB6C1;">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kota" style="font-weight: bold;">Kota</label>
                        <input type="text" class="form-control" id="kota" placeholder="Kota" name="kota" style="border: 1px solid #FFB6C1;">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat" style="font-weight: bold;">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="almt" style="border: 1px solid #FFB6C1;">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kode_pos" style="font-weight: bold;">Kode Pos</label>
                        <input type="text" class="form-control" id="kode_pos" placeholder="Kode Pos" name="kopos" style="border: 1px solid #FFB6C1;">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-success btn-lg" style="background-color: #FF69B4; border: none;">Order Sekarang</button>
            <a href="keranjang.php" class="btn btn-danger btn-lg" style="background-color: #FF6F91; border: none;">Cancel</a>
        </form>
    </div>
</div>

<?php 
include 'footer.php';
?>
