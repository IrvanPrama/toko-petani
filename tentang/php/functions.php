<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $NRP = htmlspecialchars($data["nrp"]);
    $Nama = htmlspecialchars($data["nama"]);
    $Harga = htmlspecialchars($data["harga"]);
    $Berat = htmlspecialchars($data["berat"]);
    $Pemilik = htmlspecialchars($data["pemilik"]);
    $Daerah = htmlspecialchars($data["alamat"]);
    // $Gambar = htmlspecialchars($data["gambar"]);

    // upload gambar
    $Gambar = upload();
    if (!$Gambar) {
        return false;
    }

    $query = "INSERT INTO komoditas
            VALUES
            ('', '$NRP', '$Nama', '$Harga', '$Berat', '$Pemilik', '$Daerah', '$Gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
        alert('Oppssy, anda lupa mengunggah gambar');
        </script>";
        return false;
    }

    // cek apakah yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
        alert('Oppssy, file yang anda unggah bukan gambar');
        </script>";
        return false;
    }
    // cek ukuran gambar
    if ($ukuranFile > 5000000) {
        echo "<script>
        alert('Oppssy, ukuran file gambar anda terlalu besar. Pastikan kurang dari 4mb');
        </script>";
        return false;
    }

    // upload gambar
    move_uploaded_file($tmpName, 'img/' . $namaFile);

    return $namaFile;
}






function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM komoditas WHERE id = $id ");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $Nama = htmlspecialchars($data["nama"]);
    $NRP = htmlspecialchars($data["nrp"]);
    $Harga = htmlspecialchars($data["harga"]);
    $Pemilik = htmlspecialchars($data["pemilik"]);
    $Daerah = htmlspecialchars($data["alamat"]);
    $Gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE komoditas SET
                nama = '$Nama',
                nrp = '$NRP',
                harga = '$Harga',
                pemilik = '$Pemilik',
                alamat = '$Daerah',
                gambar = '$Gambar'
                WHERE id = $id
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM komoditas
                WHERE 
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                pemilik LIKE '%$keyword%' OR
                alamat LIKE '%$keyword%'
                ";
    return query($query);
}

function filter($daerah)
{
    $query = "SELECT * FROM member
                WHERE 
                warung LIKE '%$daerah%' OR
                pemilik LIKE '%$daerah%' OR
                alamat LIKE '%$daerah%' OR
                hp LIKE '%$daerah%'
                ";
    return query($query);
}
// function upload()
// {

//     $namaFile = $_FILES['Gambar']['name'];
//     $ukuranFile = $_FILES['Gambar']['size'];
//     $error = $_FILES['Gambar']['error'];
//     $tmpName = $_FILES['Gambar']['tmp_name'];

//     // cek apakah tidak ada gambar yang di-upload
//     if ($error === 4) {
//         echo
//             "<script> 
//             alert('Pilih Gambar Dulu!');
//         </script>";

//         return false;
//     }
//     // cek ukuran gambar
//     if ($ukuranFile > 1000000) {
//         echo "< script >
//             alert('ukuran file terlalu besar, pastika ukuran file kurang dari 1 MB');
//             </script >";
//     }
//     // cek yang di upload hanya gambar
//     $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
//     $ekstensiGambar = explode('.', '$namaFile');
//     $ekstensiGambar = strtolower(end($ekstensiGambar));
//     if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
//         echo "<script>
//             alert('File yang anda upload bukan gambar!');
//             </script>";
//         return false;
//     }

//     // lolos pengecekan
//     move_uploaded_file($tmpName, 'img/' . $namaFile);

//     return $namaFile;
// }

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username tidak tersedia');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
