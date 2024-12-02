<?php 
include 'header.php';
?>

<!-- Link to Animate.css CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Container with pink gradient background -->
<div class="container-fluid" style="background: linear-gradient(to right, #FFD1DC, #FFB6C1); padding-bottom: 100px; min-height: 100vh;">
    <div class="container animate__animated animate__fadeInDown" style="padding: 50px 0;">
        <h2 class="text-center" style="border-bottom: 4px solid #FFB6C1; color: #D87093; padding-bottom: 10px; font-weight: bold; font-size: 36px;">Keranjang Belanja</h2>

        <div class="table-responsive">
            <table class="table table-hover table-bordered animate__animated animate__fadeInUp animate__delay-1s" style="background-color: #FFF0F5; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <?php 
                if(isset($_SESSION['user'])){
                    $kode_cs = $_SESSION['kd_cs'];
                    $cek = mysqli_query($conn, "SELECT * FROM keranjang WHERE kode_customer = '$kode_cs'");
                    $jml = mysqli_num_rows($cek);

                    if($jml > 0){ ?>  
                        <thead style="background-color: #FFB6C1; color: white;">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Qty</th>
                                <th scope="col">SubTotal</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $result = mysqli_query($conn, "SELECT k.id_keranjang as keranjang, k.kode_produk as kd, k.nama_produk as nama, k.qty as jml, p.image as gambar, p.harga as hrg FROM keranjang k JOIN produk p ON k.kode_produk=p.kode_produk WHERE kode_customer = '$kode_cs'");
                            $no = 1;
                            $hasil = 0;
                            while($row = mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                        <input type="hidden" name="id" value="<?= $row['keranjang']; ?>">
                                        <th scope="row"><?= $no; ?></th>
                                        <td><img src="image/produk/<?= $row['gambar']; ?>" width="80" style="border-radius: 5px;"></td>
                                        <td><?= $row['nama']; ?></td>
                                        <td>Rp.<?= number_format($row['hrg']); ?></td>
                                        <td><input type="number" name="qty" class="form-control" value="<?= $row['jml']; ?>" style="text-align: center; border: 1px solid #FFB6C1;"></td>
                                        <td>Rp.<?= number_format($row['hrg'] * $row['jml']); ?></td>
                                        <td>
                                            <button type="submit" name="submit1" class="btn btn-warning" style="background-color: #FF69B4; border: none;">Update</button>
                                            <a href="keranjang.php?del=1&id=<?= $row['keranjang']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin dihapus?')" style="background-color: #FF6F91; border: none;">Delete</a>
                                        </td>
                                    </form>
                                </tr>
                                <?php 
                                $sub = $row['hrg'] * $row['jml'];
                                $hasil += $sub;
                                $no++;
                            } ?>
                            <tr>
                                <td colspan="5" style="text-align: right; font-weight: bold;">Grand Total:</td>
                                <td colspan="2" style="text-align: left; color: #D87093;">Rp.<?= number_format($hasil); ?></td>
                            </tr>
                            <tr>
                                <td colspan="7" style="text-align: right;">
                                    <a href="index.php" class="btn btn-success" style="background-color: #FF69B4; border: none;">Lanjutkan Belanja</a>
                                    <a href="checkout.php?kode_cs=<?= $kode_cs; ?>" class="btn btn-primary" style="background-color: #D87093; border: none;">Checkout</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php 
                    } else {
                        echo "<tr><td colspan='7' class='text-center bg-warning'><h5><b>KERANJANG BELANJA ANDA KOSONG</b></h5></td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center bg-danger'><h5><b>SILAHKAN LOGIN TERLEBIH DAHULU SEBELUM BERBELANJA</b></h5></td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php 
include 'footer.php';
?>
