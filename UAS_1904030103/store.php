<?php

require 'function.php';
$toko = query("SELECT * FROM store");


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
    <section class="page-section cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="cta-inner bg-faded text-center rounded">
                        <!-- Tabel produk -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">hari</th>
                                    <th scope="col">jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <tr>
                                    <?php foreach ($toko as $tk) : ?>
                                        <th scope="row"><?php echo $no; ?></th>
                                        <td><?php echo $tk['hari']; ?></td>
                                        <td><?php echo $tk['jam']; ?></td>
                                </tr>
                                <?php $no++ ?>
                            <?php endforeach ?>
                        </table>
                        <p class="address mb-5">
                            <em>
                                <strong>Our Store</strong>
                                <br />
                                Jl. Bahureksa No. 1, Bandung
                                <br />
                                Jl. Karangsari No. 3, Bandung
                                <br />
                                Jl. Maulana Yusuf No. 2, Bandung
                                <br />
                                Jl. Gudang Selatan No. 22 A, Bandung
                                <br />
                                Jl. Cenderawasih No. 21 A, D.I Yogyakarta
                            </em>
                        </p>
                        <p class="mb-0">
                            <small><em>Call Anytime</em></small>
                            <br />
                            (62) 821-1445-xxxx
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section about-heading">
        <div class="container">
            <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-10 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">The Brand Story</span>
                            </h2>
                            <p class="mb-0">Inspired by motorcycle, Phillip Works focuses on creating authentic apparel
                                for
                                modern lifestyle.</br>
                                Here at Phillip Works, we strive to create fashionable motorcycle apparel that keeps up
                                with
                                the rapid evolution of fashion trends while still being true to the classic motorcycling
                                style.</br>
                                Our goal is to make it possible for every motorcycle enthusiast to express themselves
                                with
                                the latest and greatest in fashion while also fulfilling their passion for motorcycle.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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