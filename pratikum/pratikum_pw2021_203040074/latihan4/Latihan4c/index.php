<?php
require 'php/function.php';
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <title>Buku</title>
</head>

<body>
    <div class="container">
        <div class="grid">
            <div class="row">
                <?php 
            foreach ($buku as $kertas) :
            ?>
                <div class="cell-md-3">
                    <div class="card">
                        <div class="card-header">
                            <img style="width: 100%;" src="assets/<?= $kertas['img'] ?>">
                        </div>
                        <div class="card-content p-2">
                            <a class="text-center"
                                href="php/detail.php?id=<?= $kertas["id"] ?>"><?= $kertas["nama"] ?> </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>