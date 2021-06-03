<?php

require 'functions.php';

if(isset($_POST['registrasi'])) {
    if(registrasi($_POST) > 0) {
        echo "<script>
                alert('User Berhasil Ditambahkan');
                document.location.href = 'login.php';
            </script>";
        return false;
    } else {
        echo 'User Gagal Ditambahkan!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h3>Form Registrasi</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="">
                    Username :
                    <input type="text" name="username" autofocus autocomplete="off" required>
                </label>
            </li>
            <li>
                <label for="">
                    Password :
                    <input type="password" name="password1" required>
                </label>
            </li>
            <li>
                <label for="">
                    Konfirmasi Password :
                    <input type="password" name="password2" required>
                </label>
            </li>
            <li>
                <button type="submit" name="registrasi">Registrasi</button>
            </li>
        </ul>
    </form>
</body>
</html>