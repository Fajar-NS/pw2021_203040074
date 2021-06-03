<?php 
if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$Buku = query("SELECT * FROM Buku WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img width="220px" src="../assets/<?= $Buku["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $Buku["nama"]; ?></p>
            <p><?= $Buku["informasi_produk"]; ?></p>
            <p><?= $Buku["jenis"]; ?></p>
            <p><?= $Buku["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>

</html>