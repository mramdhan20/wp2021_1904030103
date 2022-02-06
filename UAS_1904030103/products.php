<?php

require 'function.php';
$jacket = query("SELECT * FROM jacket");

if (isset($_POST['cari'])) {
    $jacket = cari($_POST['keyword']);
}

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

    <!-- Konten-->
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Daftar Jacket</span>
                        </h2>
                        <!-- Pencarian data -->
                        <form action="" method="POST">
                            <input type="text" id="keyword" size="50" name="keyword" placeholder="masukan keyword" autocomplete="off">
                            <button type="submit" class="btn btn-primary" name="cari">CARI</button>
                        </form>
                        <!-- Tabel produk -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>

                            <?php if (empty($jacket)) : ?>
                                <tr>
                                    <td colspan="4" class="alert alert-danger" role="alert">
                                        <p><b>Produk Tidak Ditemukan</p></b>
                                    </td>
                                </tr>
                            <?php endif; ?>

                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($jacket as $jkt) : ?>
                                    <tr>
                                        <th scope="row"><?php echo $no; ?></th>
                                        <td><?php echo $jkt['kode']; ?></td>
                                        <td><?php echo $jkt['nama']; ?></td>
                                        <td><?php echo $jkt['harga']; ?></td>
                                        <td><img src="image/RDR1.jpg" width="30px"></td>
                                        <td><a href="detail.php?id=<?= $jkt['id']; ?>" class="btn btn-warning" role="button">detail</a></td>
                                    </tr>
                                    <?php $no++ ?>
                                <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

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