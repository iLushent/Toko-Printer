<?php

session_start();
require 'function.php';

$id = $_GET["id"];
$user = query("SELECT * FROM user WHERE id_user = '$id'")[0];

if(isset($_POST["submit"])){
    if(editUser($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data user berhasil diubah')
        window.location = 'user.php';
    </script>
    ";
}else{ 
    echo "
    <script type='text/javascript'>
        alert('Data user gagal diubah')
        window.location = 'user.php';
    </script>
";
}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit-User</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="home.php" class="logo d-flex align-items-center  me-auto me-lg-0">
                <h2>Toko Printer</h2>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="produk.php" class="">Produk</a></li>
                    <li><a href="home.php" class="">Home</a></li>
                    <li><a href="user.php" class="active">User</a></li>
                </ul>
            </nav>

            <div class="header-social-links">
                <a href="https://github.com/iLushent" class="twitter"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.facebook.com/Rafi.RMEF" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/rapiiyapss/?hl=id" class="instagram"><i class="fa-brands fa-instagram"></i></i></a>
                <a href="https://www.youtube.com/channel/UCOPe8jqAyJkPcrahJ_UOpyQ" class="linkedin"><i class="fa-brands fa-youtube"></i></i></i></a>
            </div>
        </div>
    </header>

    <div class="main">

        <h2>Edit User</h2>

        <form action="" method="POST" class="co">
            <input type="hidden" name="id_user" value="<?= $user["id_user"]; ?>">

            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" value="<?= $user["username"]; ?>"><br>

            <label for="nama_lengkap">Nama lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" value="<?= $user["nama_lengkap"]; ?>"><br>

            <label for="password">password</label>
            <input type="text" name="password" class="form-control" value="<?= $user["password"]; ?>"><br>

            <label for="roles">Roles</label>
            <select name="roles" class="form-control" value="<?= $user["roles"]; ?>">
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
            <button type="submit" name="submit" class="btn btn-success">Kirim</button>

        </form>

    </div>

</body>
</html>    