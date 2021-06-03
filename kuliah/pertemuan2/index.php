<?php 

// pertemuan 2 - php dasar
// sintaks php

/* 
    Fajar Nur Sidiq
    203040074
*/

// standar Output
// echo, print
// print_r (untuk array)
// var_dump (isi variabel)

// echo "Fajar Nur Sidiq";
// print "Fajar Nur Sidiq";
// print_r("Fajar Nur Sidiq");
// var_dump("Fajar Nur Sidiq");

// penulisan sintaks php
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
 $nama = "Fajar";
// echo "Hallo, nama saya $name";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string /  concatention / concat
// .
// $nama_depan = "Fajar";
// $nama_belakang = "Nur Sidiq";
// echo $nama_depan . " " . $nama_belakang; 

// Assingnment
// =, +=, -=, *=, /=, %=, .=
// $x =1;
// $x +=5;
// echo $x;
// $nama = "Fajar";
// $nama .= " ";
// $nama .= "Nur Sidiq";
// echo $nama;

// perbandingan 
// <, >, <=, >=, ==, !=
// var_dump( 1 == "1");

// identitas
// ===, !==
// var_dump(1 === "1")

// logika 
// &&, ||, !
// $x = 30;
// var_dump($x < 20 || $x % 2 == 0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar</title>
</head>
<body>
    <h1>Hallo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
    
    <?php 
        echo "<h1>Hallo, Selamat datang Fajar NS</h1>";
    ?>
</body>
</html>