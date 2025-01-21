<?php
include "service/database.php";
session_start();

$register_message = "";

if(isset($_SESSION["is_login"])){
    header("location:dashboard.php");
}
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    try{
    $sql = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
    if($db->query($sql)){
        $register_message = "Daftar Akun Berhasil, Silahkan Login!";
    }else{ 
        $register_message = "DATA GAGAL MASUK";
    }
}catch(mysqli_sql_exception){
    $register_message = "username telah digunakan, silahkan cari yang lain";
}
$db->close();
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
    <h3>BUAT AKUN ANDA</h3>
    <i><?=$register_message?></i>
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>
        <button type="submit" name="register">Buat Akun Sekarang</button>
    </form>
    <?php include "layout/footer.html"?>
</body>
</html>