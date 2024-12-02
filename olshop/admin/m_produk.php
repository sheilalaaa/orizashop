<?php 
include 'header.php';
?>

<!-- Link Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Container with gradient background -->
<div class="container-fluid" style="background: linear-gradient(to right, #80e0ff, #b3e0ff); padding: 50px 0;">
    <div class="container">
        <h2 class="text-center my-5 animate__animated animate__fadeIn animate__delay-1s" style="border-bottom: 4px solid #80e0ff; font-family: 'Arial', sans-serif; color: #fff; font-size: 30px;"><b>Lihat Produk</b></h2>
        
        <!-- Tabel dengan warna kustom -->
        <table class="table table-striped table-bordered animate__animated animate__fadeIn animate__delay-2s" style="background-color: #f4f7fa;">
            <thead class="thead-dark" style="background-color: #004d80; color: #fff;">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Image</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $result = mysqli_query($conn, "SELECT * FROM produk");
                $no = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr class="animate__animated animate__fadeIn animate__delay-3s" style="background-color: #ffffff;">
                    <td><?= $no; ?></td>
                    <td><?= $row['kode_produk']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><img src="../image/produk/<?= $row['image']; ?>" class="img-fluid" style="max-width: 100px;"></td>
                    <td>Rp.<?= number_format($row['harga']); ?></td>
                    <td>
                        <a href="edit_produk.php?kode=<?= $row['kode_produk']; ?>" class="btn btn-warning btn-sm animate__animated animate__zoomIn animate__delay-4s"><i class="glyphicon glyphicon-edit"></i> Edit</a> 
                        <a href="proses/del_produk.php?kode=<?= $row['kode_produk']; ?>" class="btn btn-danger btn-sm animate__animated animate__zoomIn animate__delay-5s" onclick="return confirm('Yakin ingin menghapus data?')"><i class="glyphicon glyphicon-trash"></i> Hapus</a> 
                        <a href="bom.php?kode=<?= $row['kode_produk']; ?>" class="btn btn-info btn-sm animate__animated animate__zoomIn animate__delay-6s"><i class="glyphicon glyphicon-eye-open"></i> Lihat BOM</a>
                    </td>
                </tr>
                <?php 
                    $no++; 
                }
                ?>
            </tbody>
        </table>
        <div class="text-center">
            <a href="tm_produk.php" class="btn btn-success btn-lg animate__animated animate__zoomIn animate__delay-7s"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Produk</a>
        </div>
    </div>
</div>

<br><br><br><br>

<?php 
include 'footer.php';
?>
