<?php
require 'php/functions.php';

// Ambil data dari url
$id = $_GET["id"];

// query data komoditas berdasarkan id
$members = query("SELECT * FROM member WHERE id = $id")[0];
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/list.css">

    <title>Toko Petani</title>
    <link href="image/Favicon.ico" rel="shortcut icon">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-light">
        <div class="container">
            <a class="navbar-brand" href="landing.html">Tokopetani</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><img src="image/humberger-menu.png" alt="" class="hum-img"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="landing.html">Beranda <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Produk</a>
                    <a class="nav-item nav-link" href="tentang.html">Tentang</a>
                    <a class="nav-item btn btn-primary tombol" href="https://api.whatsapp.com/send?phone=6281907972381&text=Hay,%20saya%20ingin%20menjual%20beras.">Jual
                        Beras</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Zona -->
    <div class="tab-rekomendasi">
        <p class="container">Daftar Beras Dari Warung Yang Mungkin Anda Kenal</p>
    </div>
    <!-- Akhir Zona -->
    <!-- Info Panel -->
    <div class="member-title">
        <a href="zona.php?id=<?= $members["id"]; ?>" style="text-decoration: none; color:black;">
            <div class="row member-row">
                <div class="img-profil-box">
                    <img src="php/img/<?= $members["profil"]; ?>" alt="profil" class="profil">
                </div>
                <div class="description">
                    <p class="nm" id="nama"><?= $members["nama"]; ?></p>
                    <p class="nm-2"><?= $members["warung"]; ?></p>
                    <p class="nm-3"><?= $members["alamat"]; ?></p>
                </div>
                <div class="show">
                    <img src="image/logo-morethan.png" class="morethan" alt="">
                </div>
            </div>
        </a>
    </div>


    <!-- Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <a href="https://api.whatsapp.com/send?phone=6288236041567&text=Hay,%20saya%20ingin%20membeli%20beras%20dari%20warung%20Bu%20Asri,%20Merek%20Raja%20Ultima,%20sebanyak%2010%20Kg.">
                    <div class="col-lg kiri">
                        <img class="img" src="image/b2.jpg" alt="">
                        <div class="desc">
                            <div class="nm-prod">
                                <h4 class="nm-prod">Raja Ultima</h4>
                            </div>
                            <h4 class="price">Rp.12.000/Kg</h4>
                        </div>
                    </div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=6288236041567&text=Hay,%20saya%20ingin%20membeli%20beras%20dari%20warung%20Bu%20Asri,%20Merek%20Raja%20Ultima,%20sebanyak%2010%20Kg.">
                    <div class="col-lg kanan">
                        <img class="img" src="image/b1.jpg" alt="">
                        <div class="desc">
                            <div class="nm-prod">
                                <h4 class="nm-prod">Beras Merah Premium</h4>
                            </div>
                            <h4 class="price">Rp.12.000/Kg</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="https://api.whatsapp.com/send?phone=6288236041567&text=Hay,%20saya%20ingin%20membeli%20beras%20dari%20warung%20Bu%20Asri,%20Merek%20Raja%20Ultima,%20sebanyak%2010%20Kg.">
                    <div class="col-lg kiri">
                        <img class="img" src="image/b3.jpg" alt="">
                        <div class="desc">
                            <h4 class="nm-prod">Beras Jatiluwih</h4>
                            <h4 class="price">Rp.12.000/Kg</h4>
                        </div>
                    </div>
                </a>
                <a href="https://api.whatsapp.com/send?phone=6288236041567&text=Hay,%20saya%20ingin%20membeli%20beras%20dari%20warung%20Bu%20Asri,%20Merek%20Raja%20Ultima,%20sebanyak%2010%20Kg.">
                    <div class="col-lg kanan">
                        <img class="img" src="image/prod.jpg" alt="">
                        <div class="desc">
                            <h4 class="nm-prod">Beras Putri Sejati</h4>
                            <h4 class="price">Rp.12.000/Kg</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Akhir Content -->
    </div>
    </div>
    <br>
    <!-- Akhir Container -->

    <!-- Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col s6 nav-lg">
                    <h5 class="con-text">Contact Person:</h5>
                    <div class="wa">
                        <a href="https://api.whatsapp.com/send?phone=6288236041567&text=Hallo,%20saya%20ingin%20bertanya" class="wa-text">
                            <img class="wa-logo" src="image/wa-logo.png" alt="">+081907972381
                        </a>
                    </div>
                </div>
                <div class="col s6 nav-lg">
                    <h5>Ikuti kami di:</h5>
                    <ul>
                        <li><img class="sosmed-logo" src="image/ig-logo.png" href="instagram.com" alt=""></li>
                        <li><img class="sosmed-logo fb-right" src="image/fb-logo.png" href="facebook.com" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="col-sm-12 container">
                &copy; Tokopetani 2019, All right reserved.
            </div>
        </div>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 