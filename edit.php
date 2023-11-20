<?php
include('./partials/header.php');

$bannerTitle = "Tambah Produk"; // Changed the banner title to reflect adding a new product
include('./components/banner.php');

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-6 col-lg-6">
            <div class="card-body">
                <a class="btn btn-primary btn-sm mb-3" href="show.php" title="lihat">Lihat data produk</a>
                <form action="./backend/create.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="inputnamaproduk" class="form-label">Masukkan nama Produk:</label>
                        <input type="text" name="name" class="form-control" id="inputnamaproduk" placeholder="Contoh: Sabun Cuci" required>
                        <div class="form-text" id="emailHelp"></div>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Masukkan Harga Produk</label>
                        <input type="number" name="price" placeholder="Contoh: 10000" class="form-control" id="harga" required>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Masukkan Gambar: jpg, png, jpeg, webp</label>
                        <input type="file" name="image" accept="image/jpeg, image/png, image/webp" class="form-control" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <a class="btn btn-primary btn-sm" href="./index.php">Kembali ke Beranda</a>
</div>
<?php include('./partials/footer.php'); ?>
