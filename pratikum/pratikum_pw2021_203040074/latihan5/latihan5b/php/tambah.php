<?php 
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <title>Tambah data</title>
</head>
<body>
    <h3>Form Tambah Data</h3>
    <form action="" method="post">
        <ul>
            <li>
                <label class="custom-file-label" for="image">Tambah Gambar</label>
                <input type="file" class="custom-file-input" id="image" name="image" required><br><br>
            </li>
            <li>
                <label for="nama">Nama</label>
                :   <input type="text" name="nama" id="nama" required><br><br>
            </li>
            <li>
                <label for="Deskripsi">Deskripsi</label>
                :   <input type="text" name="Deskripsi" id="Deskripsi" required><br><br>
            </li>
            <li>
                <label for="Tipe">Tipe</label>
                :   <select name="Tipe" id="Tipe" required>
                    <option value="">--------- Pilih Tipe ---------</option>
                    <option value="buku">Buku</option>
                </select><br><br>
            </li>
            <li>
                <label for="harga">Harga</label>
                :   <input type="int" name="harga" id="harga" required>
            </li>
            <br>
            <button type="submit" name="tambah"
                style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Tambah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>