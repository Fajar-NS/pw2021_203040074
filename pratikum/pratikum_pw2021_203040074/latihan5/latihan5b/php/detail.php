<?php
if(!isset($_GET['id'])){
    header("location: ../index.php");
    exit;
}

require 'functions.php';
$id=$_GET["id"];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Fajar</title>
</head>

<body>
    < < class="container">
        <div class="gambar">
            <img width="220px" src="../assets/<?= $kertas["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $kertas["nama"]; ?></p>
            <p><?= $kertas["informasi_produk"]; ?></p>
            <p><?= $kertas["jenis"]; ?></p>
            <p>Rp. <?= $kertas["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>