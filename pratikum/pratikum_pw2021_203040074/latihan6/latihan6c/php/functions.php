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
    $informasi_produk = htmlspecialchars($data['informasi_produk']);
    $tipe = htmlspecialchars($data['tipe']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE Buku Set('', '$img'='img', '$name'='nama', '$informasi_produk'='informasi_produk', '$tipe'='tipe', '$harga'='harga', WHERE id = $id)";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    // cek username udah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah di gunakan');
        </script>";
        return false;
    }
    // enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);
    // tambah user baru
    $query_tambah = "INSERT INTO user VaLUES('','$username','$password')";
    mysqli_query($conn, $query_tambah);
    return mysqli_affected_rows($conn);
}
?>