<?php


require 'functions.php';

// Jika Tidak ada ID
if(!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// Ambil ID
$id = $_GET['id'];

if(hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil Dihapus!');
            document.location.href = 'index.php';
                </script>";
    } else {
        echo "Data Gagal Dihapus!";
}

?>