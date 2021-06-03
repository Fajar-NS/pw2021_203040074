<?php 

function koneksi() {
    $conn= mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040074");

    return $conn;
}

function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function TambahData($data) {
    $conn = koneksi();

    $img = htmlspecialchars($data['img']);
    $name = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $tipe = htmlspecialchars($data['tipe']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO Buku VALUES ('', '$img', '$name', '$deskripsi', '$tipe', '$harga')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


?>