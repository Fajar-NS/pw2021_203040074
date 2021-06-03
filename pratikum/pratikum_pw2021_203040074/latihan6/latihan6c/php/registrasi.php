<?php
require 'functions.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registrasi Berhasil');
                document.location.href='login.php';
                </script>";
    } else {
        echo "<script>
                alert('Registrasi Gagal');
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <!-- css style -->
        <link rel="stylesheet" href="css/huh.css">
    <title>Registrasi</title>
    <style> 
        body {
            background-color: whitesmoke;
            color: black;
        }
        h3 {
            text-align: center;
        }
    </style>
</head>
<body>
<h3>Registrasi</h3>
<script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">

    <form action="" method="post">
    <div class="card-panel ">
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </div>
        <button type="submit" name=" register" class="waves-effect waves-light btn-small blue darken-2">REGISTER</button>
    </form>
    </div>
</body>
</html>