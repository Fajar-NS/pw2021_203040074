<?php
/*
Fajar Nur Sidiq
203040074
https://github.com/Fajar-NS/pw2021_203040074/tree/main/pratikum_pw2021_203040074/latihan4
Jum'at 10.00 - 11.00
*/
require 'php/functions.php';
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <title>Buku</title>
</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="dataTableX" class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pengaturan</th>
                    <th>Gambar</th>
                    <th>Name</th>
                    <th>Deskripsi</th>
                    <th>Tipe</th>
                    <th>Harga</th>
                    <th>Detail</th>
                </tr>
            </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach($buku as $kertas) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <a href=""><button>Ubah</button></a>
                                <a href=""><button>Hapus</button></a>
                                <figure>
                                   <td><img src="assets/<?= $kertas["img"]; ?>" class="img-fluid" alt=""></td>
                                </figure>
                            </td>
                            <td><?= $kertas["nama"]; ?></td>
                            <td><?= $kertas["informasi produk"]; ?></td>
                            <td><?= $kertas["jenis"]; ?></td>
                            <td>Rp. <?= $kertas["harga"]; ?></td>
                            <td><a href="php/detail.php?id=<?= $kertas["id"]; ?>">Info</a></td>
                        </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>

    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
    
</body>

</html>