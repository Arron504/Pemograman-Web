<?php
include "service/database.php";
session_start();

$register_message = "";

if(isset($_SESSION["is_login"])){
    header("location:dashboard.php");
}
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['username'];


    try{
        $sql = "INSERT INTO users(username, password) VALUES ('$username', '$password'";
        if(sdb->query($sql)){
            $register_message = "DAFTAR AKUN BERHASIL, SILAHKAN LOGIN!";    
        }else{
            $register_message = "DATA GAGAL MASUK";
        }   
}catch(mysqli_sql_exception){
        $register_message = "username telah digunakan, silahkan cari yang lain";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "layout/header.html"?>
    <h3>Masuk Ke Akun Anda</h3>
    <i><?=$register_message?></i>

    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="username">Buat Akun Sekarang</button>
    </form>
    <?php include "layout/footer.html"?>
</body>
</html>