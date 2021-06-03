<?php


require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Ketika Tombol Cari di Click
if(isset($_POST['cari'])) {
    $mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="POST">
        <input type="text" name="keyword" size="40" placeholder="Masukkan Keyword.." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>

    <table border="1" cellpading="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php if(empty($mahasiswa)) : ?>
            <tr>
                <td colspan="4"><p style="color: red; font-style: italic;">Data Mahasiswa tidak Ditemukan</p></td>
            </tr>
        <?php endif; ?>
        <?php $i = 1; foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $mhs['gambar']; ?>" width="128"></td>
            <td><?= $mhs['nama']; ?></td>
            <td>
                <a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>