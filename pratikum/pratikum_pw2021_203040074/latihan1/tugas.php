<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas1 Fajar Nur Sidiq</title>
    <style>
        .kotak{
            width: 70px;
            height: 70px;
            display: inline-block;
            border: 3px solid black;
        }
        .biru{
            background-color: lightblue;
        }
        .salmon{
            background-color: salmon;
        }
    </style>
</head>
<body>
    <?php for ($kolom=1; $kolom<=6; $kolom++) : 
        for ($baris=1; $baris<=6; $baris++) : 

            if($kolom%2==!0) :
                if($baris%2==!0) : ?>
                    <div class="kotak biru"></div>
                <?php else: ?>
                    <div class="kotak salmon"></div>
                <?php endif; ?>

            <?php else: 
                if($baris%2==!0) : ?>
                    <div class="kotak salmon"></div>
                <?php else: ?>
                    <div class="kotak biru"></div>
                <?php endif; ?>    
            <?php endif; ?>

        <?php endfor; ?>
        <br>
    <?php endfor; ?>
    </body>
</html>