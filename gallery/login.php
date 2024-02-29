<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            background-image: url('wallpaper/wpregis.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            font-family: arial;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center; color: white; padding-top: 80px;">Halaman Login</h1>
    <div class="container" style="margin: 0 auto; width:400px;">
        <form action="proses_login.php" method="post">
            <label for="username" style="display: block; color: white; font-weight: bold; text-align: center; padding-top: 80px; padding-bottom: 10px;">Username</label>
            <input type="text" name="username" id="username" style="width: 100%; border-radius: 5px;">
            <label for="password" style="display: block; color: white; font-weight: bold; text-align: center; padding-top: 25px; padding-bottom: 10px;">Password</label>
            <input type="password" name="password" id="password" style="width: 100%; border-radius: 5px;">
            <div class="container" style="padding-top: 25px;">
                <td></td>
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>