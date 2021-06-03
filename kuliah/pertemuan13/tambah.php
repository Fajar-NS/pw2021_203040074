<?php


session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
// Cek Apakah Tombol Tambah Sudah ditekan
if(isset($_POST['tambah'])) {
    if(tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'index.php';
                </script>";
    } else {
        echo "Data Gagal Ditambahkan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label for="">
                    Nama :
                    <input type="text" name="nama" autofocus required>
                </label>
            </li>
            <li>
                <label for="">
                    NRP :
                    <input type="text" name="nrp" required>
                </label>
            </li>
            <li>
                <label for="">
                    Email :
                    <input type="text" name="email" required>
                </label>
            </li>
            <li>
                <label for="">
                    Jurusan :
                    <input type="text" name="jurusan" required>
                </label>
            </li>
            
            <li>
                <label for="">
                    Gambar :
                    <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                </label>
                <img src="img/1.jpg" width="128px" style="display: block;" alt="" class="img-preview">
            </li>
            <li>
                <button type="submit" name="tambah">Tambah Data</button>
            </li>
        </ul>
    </form>
    <script src="js/script.js"></script>
</body>
</html>