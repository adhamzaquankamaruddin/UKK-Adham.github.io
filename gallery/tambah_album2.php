<?php
    session_start();
    if(!isset($_SESSION['userid'])) {
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            color: #1450a3;
            background-color: white;
            font-family: arial;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid" style="background-color: #1450A3;">
    <h1 style="color: white; padding-left: 20px; padding-right: 1000px;">Gallery</h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" style="color: white; font-size: 20px;">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="album.php" style="color: white; font-size: 20px;">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="foto.php" style="color: white; font-size: 20px;">Foto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: white; font-size: 20px;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container" style="margin: 0 auto; width: 400px;">
        <form action="tambah_album.php" method="post">
            <h1 style="padding-top: 50px; text-align: center; color: #1450A3;">Halaman Album</h1>
            <h6 style="color: white; font-weight: bold; text-align: left; padding-top: 40px; color: #1450A3;">Tambah Foto</h6>
            <div class="album/namaalbum" style="padding-top: 10px;">
              <label for="namaalbum" style="color: #1450A3; font-weight: bold; text-align: center;">Nama Album : </label>
              <input type="text" name="namaalbum" id="namaalbum" style="border-radius: 5px;">
            </div>
            <div class="album/deskripsialbum" style="padding-top: 10px;">
              <label for="deskripsi" style="color: #1450A3; font-weight: bold; text-align: center;">Deskripsi : </label>
              <input type="text" name="deskripsi" id="deskripsi" style="border-radius: 5px; margin-left: 25px;">
            </div>
              <div class="container" style="padding-top: 10px; padding-bottom: 50px; margin-left: -12px;">
                <td></td>
                <input type="submit" class="btn btn-success" value="Tambah">
            </div>
        </form>
    </div>
    <div class="container-fluid fixed-bottom" style="background-color: black; text-align: center; color: white;">copyright &copy; ukkrpl2024</div>
</body>
</html>