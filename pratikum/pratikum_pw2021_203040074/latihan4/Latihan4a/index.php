<?php
$koneksi = mysqli_connect("localhost", "root", "");
mysqli_select_db($koneksi, "pw_tubes_203040074");
$result = mysqli_query($koneksi, "SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        img {
            max-width: 70px;
        }
    </style>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Informasi Produk</th>
                <th scope="col">Jenis</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            while ($row = mysqli_fetch_assoc($result)) :
            ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><img width="300px" src="assets/<?= $row["img"] ?>" alt="foto"></td>
                    <td><?= $row["nama"] ?> </td>
                    <td><?= $row["informasi produk"] ?></td>
                    <td><?= $row["jenis"] ?> </td>
                    <td>Rp. <?= $row["harga"] ?> </td>
                </tr>
            <?php
                $i++;
            endwhile;
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>