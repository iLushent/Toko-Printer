<?php

require '../koneksi.php';
function query($query){

    global $conn;
    $row = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambahProduk($data){
    global $conn;

    $nama_produk = htmlspecialchars ($data["nama_produk"]);
    $harga = htmlspecialchars ($data["harga"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $deskripsi = htmlspecialchars ($data["deskripsi"]);

    $query = "INSERT INTO produk VALUES(NULL, '$nama_produk', '$harga', '$foto', '$deskripsi')";
    move_uploaded_file($files, "../foto/".$foto);
    
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function editProduk($data){
    global $conn;

    $id = htmlspecialchars($data["id_produk"]);
    $nama_produk = htmlspecialchars ($data["nama_produk"]);
    $harga = htmlspecialchars ($data["harga"]);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $deskripsi = htmlspecialchars ($data["deskripsi"]);

    if(empty($foto)){
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        harga = '$harga',
        deskripsi = '$deskripsi' WHERE id_produk = '$id'
        ";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);

    }else{
        $query = "UPDATE produk SET
        nama_produk = '$nama_produk',
        harga = '$harga',
        foto = '$foto',
        deskripsi = '$deskripsi' WHERE id_produk = '$id'
        ";
        move_uploaded_file($files, "../foto/".$foto);

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
}

function hapusProduk($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = '$id'");
    return mysqli_affected_rows($conn);
}

function tambahUser($data){
    global $conn;

    $username = htmlspecialchars ($data["username"]);
    $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
    $password = htmlspecialchars ($data["password"]);
    $roles = htmlspecialchars ($data["roles"]);

    $query = "INSERT INTO user VALUES(NULL, '$username', '$nama_lengkap', '$password', '$roles')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function editUser($data){
    global $conn;

    $id = htmlspecialchars($data["id_user"]);
    $username = htmlspecialchars($data["username"]);
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars($data["roles"]);

    $query = "UPDATE user SET
    username = '$username',
    nama_lengkap = '$nama_lengkap',
    password = '$password',
    roles = '$roles' WHERE id_user = '$id'
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapususer($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");
    return mysqli_affected_rows($conn);
}

?>