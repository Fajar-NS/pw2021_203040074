<?php 
require 'functions.php';

$id = $_GET['id'];
$kertas = query("SELECT * FROM Buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
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
    <title>Ubah</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <h3>Form Ubah Data</h3>
    <form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?= $kertas['id']; ?>">
        <ul style="list-style: none;">
            <li>
                <label for="img" style="margin-right: 8px;">Gambar</label>
                : <input type="file" class="custom-file-input" id="image" name="image" require value="<?= $kertas['img']; ?>"><br><br>
            </li>
            <li>
                <label for="nama" style="margin-right: 16px;">Nama</label>
                : <input type="text" name="nama" id="nama" require value="<?= $kertas['img']; ?>"><br><br>
            </li>
            <li>
                <label for="Deskripsi" style="margin-right: 21px;">Deskripsi</label>
                : <input type="text" name="Deskripsi" id="Deskripsi" require value="<?= $kertas['img']; ?>"><br><br>
            </li>
            <li>
            <label for="Tipe">Tipe</label>
                :   <select name="Tipe" id="Tipe" require value="<?= $kertas['img']; ?>">
                    <option value="">--------- Pilih Tipe ---------</option>
                    <option value="buku">Buku</option>
                </select><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 7px;">Harga</label>
                : <input type="text" name="harga" id="harga" require value="<?= $kertas['img']; ?>"><br><br>
            </li>
            <button type="submit" name="ubah"
                style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Tambah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>