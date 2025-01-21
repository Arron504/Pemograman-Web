<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h2>Form Login</h2>
    <form action="konek.php" method="post">
        <label for="username">username</label>
        <input type="text" id="username" name="username" require><br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" require><br><br>
        <input type="submit" name="Login">
</form>
</body>
</html>