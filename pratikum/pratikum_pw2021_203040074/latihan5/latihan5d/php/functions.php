<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
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

function tambah($data) {
    $conn = koneksi();
    $gambar = htmlspecialchars($data['img']);
    $name = htmlspecialchars($data['nama']);
    $informasi = htmlspecialchars($data['informasi_produk']);
    $jenis_produk = htmlspecialchars($data['jenis']);
    $harga_produk = htmlspecialchars($data['harga']);

    $query = "INSERT INTO buku
                VALUES
                ('', '$gambar', '$name', '$informasi', '$jenis_produk', '$harga_produk')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}
function ubah($data) {
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $img = htmlspecialchars($data['img']);
    $name = htmlspecialchars($data['nama']);
    $deskripsi = htmlspecialchars($data['deskripsi']);
    $tipe = htmlspecialchars($data['tipe']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE Buku Set('', '$img'='img', '$name'='nama', '$deskripsi'='deskripsi', '$tipe'='tipe', '$harga'='harga', WHERE id = $id)";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>