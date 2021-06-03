<?php 
require 'functions.php';
$Buku = query("SELECT * FROM Buku");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $movies = query("SELECT * FROM Buku WHERE
            `nama` LIKE '%$keyword%' OR
            `informasi_produk` LIKE '%$keyword%' OR
            `jenis` LIKE '%$keyword%' OR
            `harga` LIKE '%$keyword%' ");
} else {
    $Buku = query("SELECT * FROM Buku");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="tambah.php">Tambah Data</a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari"
            style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px;">Cari!</button>
    </form>

    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Informasi Produk</th>
                <th>Jenis</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($Buku)) : ?>
            <tr>
                <td colspan="8">
                    <h1>Buku Tidak Ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($Buku as $kertas) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $kertas['id'] ?>"><button
                            style="border: none; padding: 5px 13px; background-color: teal; color: white; margin-bottom: 5px; border-radius: 2px;">Ubah</button></a>
                    <a href="hapus.php?id=<?= $kertas['id']; ?>" onclick="return confirm('Hapus Data??')"><button
                            style="border: none; padding: 5px 10px; background-color: red; color: white; border-radius: 2px;">Hapus</button></a>
                </td>
                <td><img width="220px" src="../assets/<?= $kertas['img']; ?>" alt=""></td>
                <td><?= $kertas['nama']; ?></td>
                <td><?= $kertas['informasi produk']; ?></td>
                <td><?= $kertas['jenis']; ?></td>
                <td><?= $kertas['harga']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>