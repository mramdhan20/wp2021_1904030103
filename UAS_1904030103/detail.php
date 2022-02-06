<?php

require 'function.php';
$jacket = query("SELECT * FROM jacket");

if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

$id = $_GET['id'];
$jacket = query("SELECT * FROM jacket WHERE id=$id");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Business Casual - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">Phillip Works©</span>
            <span class="site-heading-lower">Business Casual</span>
        </h1>
    </header>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">About</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php">Products</a>
                    </li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Store</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="col-md-10 p-5 pt-5">
        <!-- konten -->
        <h3><i class="fas fa-users"> Detail Barang</i></h3>
        <hr>

        <ul class="list-group">
            <li class="list-group-item active"><?= $jacket['kode']; ?></li>
            <li class="list-group-item">Nama Barang : <?= $jacket['nama']; ?></li>
            <li class="list-group-item">Harga : <?= $jacket['harga']; ?></li>
            <li class="list-group-item">Stok Barang : <?= $jacket['stok']; ?></li>
            <li class="list-group-item"><img src="image/RDR1.jpg" width="250"></li>
            <li class="list-group-item">
                <a href="edit.php?id=<?= $jacket['id']; ?>" class="btn btn-warning" role="button">Edit</a> |
                <a href="hapus.php?id=<?= $jacket['id']; ?>" onclick="confirm('apakah anda akan menghapus data ini?');" class="btn btn-danger" role="button">Hapus</a> |
                <a href="products.php" class="btn btn-primary" role="button">Kembali</a>
            </li>
        </ul>
    </div>

    <!-- footer-->
    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright 2022 &copy; Phillip Works</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>