<!-- Nama : Fajar Nur Sidiq
   NRP : 203040074
   Github : https://github.com/Fajar-NS
    Jumat 10.00-11.00

 -->

<?php 
$pemainBola = [
    "Liverpool"=>"Mohammad Salah",
    "Juventus"=>"Cristiano Ronaldo",
    "Barcelona"=>"Lionel Messi",
    "Ac Milan"=>"Zlatan Ibrahimovic",
    "Paris Saint Germain"=>"Neymar Jr",
    "Real Madrid"=>"Luka Modric",
    "Liverpool"=>"Sadio Mane"
];
asort($pemainBola);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3c</title>
</head>
<style>
    *{
        font-size: 20px;
        font-family: Arial, Helvetica, sans-serif;
    }
    table tr td b{
        padding-right: 20px;
    }
    table tr td{
        padding-bottom: 8px;
    }
</style>
<body>
    <h3>Daftar pemain bola terkenal dan clubnya</h3>
    <table>
            <?php foreach ($pemainBola as $club => $pemain) : ?>
                <tr>
                    <td><b><?= $pemain; ?></b></td>
                    <td>:</td>
                    <td><?= $club; ?></td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>