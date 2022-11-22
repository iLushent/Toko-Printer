<?php 
session_start();
require 'function.php';

if(isset($_POST["submit"])){
    if(tambahProduk($_POST) > 0){
    echo "
    <script type='text/javascript'>
        alert('Data produk berhasil ditambahkan')
        window.location = 'produk.php';
    </script>
    ";
}else{ 
    echo "
    <script type='text/javascript'>
        alert('Data produk berhasil ditambahkan')
        window.location = 'produk.php';
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
    <title>Tambah-Produk</title>
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
                    <li><a href="produk.php" class="active">Produk</a></li>
                    <li><a href="home.php" class="">Home</a></li>
                    <li><a href="user.php" class="">User</a></li>
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
            <h2>Tambah Produk</h2>

            <form action="" method="POST" enctype="multipart/form-data" class="co">

                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control"><br>

                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control"><br>

                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control"><br>
                
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control"><br>

                <button type="submit" name="submit" class="btn btn-success">Kirim</button>

            </form>
    </div>
</body>
</html>

