<?php
if(!isset($_GET['id'])){
    header("location: ../index.php");
    exit;
}

require '../php/functions.php';
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
    <div class="container">
        <div class="detail">
            <img class="image" src="../assets/<?= $buku['img'] ?>" alt="">
            <h3><?= $buku['nama']?> <?= $buku['informasi produk']?></h3>
            <hr>
            <h6>Brand : <?= $buku['jenis']?> | Price : Rp. <?= $buku['harga']?></h6>
            <a href="../index.php"><button class="button success"> Back</button> </a>
        </div>
    </div>


    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>