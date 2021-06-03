<?php

/*
Fajar Nur Sidiq
203040074
https://github.com/Fajar-NS/pw2021_203040074/tree/main/kuliah

*/

function koneksi() {
    return mysqli_connect('localhost', 'root', '', 'pw_203040074');
}

function query($query) {
    $conn   = koneksi();
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }
    $rows   = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    $conn  = koneksi();

    $nama     = htmlspecialchars($data['nama']);
    $nrp      = htmlspecialchars($data['nrp']);
    $email    = htmlspecialchars($data['email']);
    $jurusan  = htmlspecialchars($data['jurusan']);
    $gambar   = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO mahasiswa
              VALUES
              (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    echo mysqli_errno($conn);
    return mysqli_affected_rows($conn);
}

?>