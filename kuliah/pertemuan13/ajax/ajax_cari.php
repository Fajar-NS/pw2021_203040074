<?php

/*
Fajar Nur Sidiq
203040074
https://github.com/Fajar-NS/
Pertemuan 13 - 14 Mei 2021
*/

require '../functions.php';
$mahasiswa = cari($_GET['keyword']);

?>

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