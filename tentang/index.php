<?php 

require 'php/functions.php';

// ambil tabel dari tabel mahasiswa / query data mahasiswa
$commodities = query("SELECT * FROM komoditas");
// tombol cari ditekan
if (isset($_POST["cari"])) {
    $commodities = cari($_POST["keyword"]);
}
?>


<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

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
                    <a class="nav-item nav-link" href="comodity-lists.html">Produk</a>
                    <a class="nav-item nav-link" href="tentang.html">Tentang</a>
                    <a class="nav-item btn btn-primary tombol" href="https://api.whatsapp.com/send?phone=6288236041567&text=Hay,%20saya%20ingin%20menjual%20beras.">Jual
                        Beras</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Mau Beli Beras Berkualitas?</h1>
            <h2 class="display-5">Pilih lokasi anda, kami akan mencarikan warung beras terdekat untuk anda</h2>
            <select name="lokasi" class="search" for="cari">
                <option disabled selected>pilih lokasi anda</option>
                <option href="z_kerta-dalam.html">Jl. Kerta Dalam</option>
                <option href="z_dukuh-sari.html">Jl. Dukuh Sari</option>
                <option href="z_tukad-citarum.html">Jl. Tukad Citarum</option>
                <option href="z_gurita.html">Jl. Gurita</option>
            </select>
            <a href="member.php"><button id="cari" type="submit" name="cari">Cari</button></a>
            <!-- <a class="cari" href="#">Cari</a> -->
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Tab Rekomendasi -->
    <div class="tab-rekomendasi">
        <p class="text-rekomendasi">Rekomendasi beras untuk anda</p>
    </div>
    <!-- Container -->

    <div class="container">

        <!-- Content -->
        <div class="row justify-content-center">
            <div class="row">
                <?php foreach ($commodities as $row) : ?>
                <a href="https://api.whatsapp.com/send?phone=6288236041567&text=Hay,%20saya%20ingin%20membeli%20beras%20dari%20warung%20Bu%20Asri,%20Merek%20Raja%20Ultima,%20sebanyak%2010%20Kg.">
                    <div class="col-lg kiri">
                        <img class="img" src="php/img/<?= $row["Gambar"]; ?>" alt="">
                        <div class="desc">
                            <div class="nm-prod">
                                <h4 class="nm-prod"><?= $row["Nama"]; ?></h4>
                            </div>
                            <h4 class="price"><?= $row["Harga"]; ?></h4>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>


        <!-- Cara Kerja -->
        <div class="row justify-content-center"></div>
        <div class="col-12 container display-desc">
            <h6 class="text">Bagaimana Kami Bekerja?</h6>
            <p>Kami menghubungkan penjual beras dengan konsumen, kami mempermudah pembeli agar tidak kesulitan untuk
                membeli
                dan membawa pulang beras belanjaannya.</p>
        </div>
        <!-- Akhir cara kerja -->
        <!-- Keunggulan -->

        <div class="col-12 container display-desc text">
            <h6>Kenapa Harus Toko Petani?</h6>
            <div class="col-sm">
                <div class="img-space">
                    <img class="img-medium" src="image/keranjang.png" alt="keranjang">
                </div>
                <h4>Kemudahan Berbelanja</h4>
                <p>Toko Petani memberikan kemudahan bagi konsumen untuk membeli beras dengan proses yang mudah</p>
            </div>
            <div class="col-sm">
                <img class="img-medium" src="image/truk.png" alt="keranjang">
                <h4>Layanan Antar</h4>
                <p>Toko Petani membantu menyediakan fasilitas distribusi unutk produk yang dijual petani ke konsumen</p>
            </div>
            <div class="col-sm text">
                <img class="img-medium" src="image/petani.png" alt="keranjang">
                <h4>Membeli Plus Membantu</h4>
                <p>Dengan membeli beras di Platform Toko Petani secara langsung anda telah mendukung keberlangsungan
                    petani kedepannya</p>
            </div>
        </div>
    </div>
    <!-- AKhir Keunggulan -->

    <!-- Akhir Container -->
    <!-- Footer -->
    <footer class="page-footer">
        <div class="container footer">
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html> 