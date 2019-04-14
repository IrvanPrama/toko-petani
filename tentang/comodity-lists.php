<?php

require 'php/functions.php';

// ambil tabel dari tabel mahasiswa / query data mahasiswa
$commodities = query("SELECT * FROM komoditas");
// tombol cari ditekan
if (isset($_POST["cari"])) {
    $commodities = cari($_POST["keyword"]);
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <title>Toko Petani - Daftar Komoditas</title>
    <link href="image/Favicon.ico" rel="shortcut icon">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-color">
        <div class="container">
            <a class="navbar-brand" href="index.php">Tokopetani</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon hum-img"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tentang.html">Tentang</a>
                    </li>
                    <li>
                        <a class="nav-item btn btn-primary tombol full-width" href="https://api.whatsapp.com/send?phone=6288236041567&text=Hay,%20saya%20ingin%20menjual%20beras.">Jual
                            Beras</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Info Panel -->
    <div class="tab-rekomendasi">
        <p class="container-special">Daftar beras dari orang yang mungkin anda kenal</p>
    </div>
    <!-- end Info Panel -->
    <!-- Content List Barang-->
    <div class="bg-white shadow margin-distance">
        <div class="container container-special">
            <div class="list row">
                <?php foreach ($commodities as $row) : ?>
                    <div class="list col-xl-3 col-md-4 col-6 text-center">
                        <a href="https://api.whatsapp.com/send?phone=6288236041567&text=Hay,%20saya%20ingin%20membeli%20beras%20dari%20warung%20<?= $row["pemilik"]; ?>, brand <?= $row["nama"]; ?>, sebanyak <?= $row["berat"];  ?>">
                            <div class="proudct__card">
                                <div class="proudct__card__img">
                                    <img class="img" src="php/img/<?= $row["gambar"]; ?>" alt="">
                                </div>
                                <div class="proudct__card__name">
                                    <?= $row["nama"]; ?>
                                </div>
                                <div class="product__card__price">
                                    <?= $row["harga"]; ?>/<?= $row["berat"]; ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Akhir Content List  -->
    <!-- Akhir Container -->

    <!-- Footer -->
    <footer class="page-footer footer">
        <div class="bg-white full-width margin-distance">
            <div class="footer-center text-center d-flex">
                <a href="https://api.whatsapp.com/send?phone=6288236041567&text=Hallo saya ingin membeli beras:"><img class="footer-img" src="php/img/Untitled-1.png" alt="gambar wa"></a>
                <div class="row s6 nav-lg medium-box">
                    <h5 class="con-text">Sekarang di <a href="www.tokopetani.id">Toko Petani</a> bisa pesan beras lewat
                        whatsapp:</h5>
                    <div class="wa">
                        <a href="https://api.whatsapp.com/send?phone=6288236041567&text=Hallo saya ingin membeli beras:" class="wa-text">
                            <img class="wa-logo" src="image/wa-logo.png" alt="">+081907972381
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <div class="page-footer">
            <div class="container justify-content-center">
                <h5 class="con-text">Ikuti Kami di:</h5>
                <div class="row justify-content-center">
                    <div class="social-media-icon">
                        <a href="https://www.facebook.com/toko.petani">
                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M448 80v352c0 26.5-21.5 48-48 48h-85.3V302.8h60.6l8.7-67.6h-69.3V192c0-19.6 5.4-32.9 33.5-32.9H384V98.7c-6.2-.8-27.4-2.7-52.2-2.7-51.6 0-87 31.5-87 89.4v49.9H184v67.6h60.9V480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="social-media-icon">

                        <a href="https://www.instagram.com/toko.petani/">
                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                </path>
                            </svg>
                        </a>

                    </div>
                    <div class="social-media-icon">
                        <a href="https://wa.me/">
                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp-square" class="svg-inline--fa fa-whatsapp-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path fill="currentColor" d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z">
                                </path>
                            </svg>
                        </a>
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