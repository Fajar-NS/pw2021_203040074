<?php

/*
Fajar Nur Sidiq
203040074
https://github.com/Fajar-NS/pw2021_203040074/tree/main/kuliah

*/

// Koneksi DB
$conn   = mysqli_connect('localhost', 'root', '', 'pw_203040074');
// Query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// Ubah Data ke Dalam Array
$rows   = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
// Tampung ke Tabel Mahasiswa
$mahasiswa = $rows;

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

    <table border="1" cellpading="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $mhs['gambar']; ?>" width="128"></td>
            <td><?= $mhs['nrp']; ?></td>
            <td><?= $mhs['nama']; ?></td>
            <td><?= $mhs['email']; ?></td>
            <td><?= $mhs['jurusan']; ?></td>
            <td>
                <a href="">Ubah</a> | <a href="">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>