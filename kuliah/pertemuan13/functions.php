<?php

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

function upload() {
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // Ketika Tidak Ada Gambar yang Dipilih
    if($error == 4) {
        // echo "<script>
        //         alert('Pilih Gambar Terlebih Dahulu!')
        //     </script>";
        return '1.jpg';
    }

    // Cek Ekstensi
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if(!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert('Bukan Gambar!')
            </script>";
        return false;
    }

    // Cek Type File
    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('Bukan Gambar!')
            </script>";
        return false;
    }

    // Cek Ukuran
    // Max 5Mb
    if($ukuran_file > 5000000) {
        echo "<script>
                alert('Ukuran Terlalu Besar!')
            </script>";
        return false;
    }

    // Lolos Pengecekan
    // Siap Upload File
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, 'img/' . $nama_file_baru);
    return $nama_file_baru;
}

function tambah($data) {
    $conn  = koneksi();

    $nama     = htmlspecialchars($data['nama']);
    $nrp      = htmlspecialchars($data['nrp']);
    $email    = htmlspecialchars($data['email']);
    $jurusan  = htmlspecialchars($data['jurusan']);
    // $gambar   = htmlspecialchars($data['gambar']);

    // Upload Gambar
    $gambar = upload();
    if(!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa VALUES
              (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    echo mysqli_errno($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();

    // Menghapus Gambar
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
    if($mhs['gambar'] != '1.jpg') {
        unlink('img/' . $mhs['gambar']);
    }


    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_errno($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn  = koneksi();

    $id       = $data['id'];
    $nama     = htmlspecialchars($data['nama']);
    $nrp      = htmlspecialchars($data['nrp']);
    $email    = htmlspecialchars($data['email']);
    $jurusan  = htmlspecialchars($data['jurusan']);
    $gambar_lama   = htmlspecialchars($data['gambar_lama']);

    $gambar = upload();
    if(!$gambar) {
        return false;
    }

    if($gambar == '1.jpg') {
        $gambar = $gambar_lama;
    }

    $query = "UPDATE mahasiswa SET
            nama = '$nama',
            nrp = '$nrp',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
            WHERE id = $id";
    mysqli_query($conn, $query);

    echo mysqli_errno($conn);
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $conn = koneksi();
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nrp LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows   = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function login($data) {
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // Cek Username
    if($user = query("SELECT * FROM user WHERE username = '$username'")) {
        // Cek Password
        if(password_verify($password, $user['password'])) {
            // Set Session
            $_SESSION['login'] = true;

            header("Location: index.php");
            exit;
        }
    }
        return[
            'error' => true,
            'pesan' => 'Username / Password Salah!'
        ];
}

function registrasi($data) {
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // Jika Username / Password Kosong
    if(empty($username) || empty($password1) || empty($password2)) {
        echo "<script>
                alert('Username / Password tidak boleh kosong!');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    if(query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert('Username Sudah Terdaftar');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    if($password1 !== $password2) {
        echo "<script>
                alert('Konfirmasi Password tidak Sesuai');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    if(strlen($password1 < 5)) {
        echo "<script>
                alert('Password Terlalu Pendek');
                document.location.href = 'registrasi.php';
            </script>";
        return false;
    }

    // Jika Username & Password Sudah Sesuai
    // Enkripsi Password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);

    // Insert ke Tabel User
    $query = "INSERT INTO user VALUES (null, '$username', '$password_baru')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

?>