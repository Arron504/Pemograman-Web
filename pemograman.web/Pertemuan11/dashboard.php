<?php  
session_start();
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header('location:index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "layout/header.html"?>
    <h3> selamat datang <?=$_SESSION["username"]?></h3>
    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">logout</button>
    </form>
</body>
</html>