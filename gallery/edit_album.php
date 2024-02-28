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
    <title>Halaman Edit Album</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
            font-family: arial;
            color: white;
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
    <h1 style="padding-top: 50px; text-align: center; color: #1450A3;">Halaman Edit Album</h1>
    <p style="padding-top: 10px; text-align: center; color: #1450A3;">Selamat Datang <b><?= $_SESSION['namalengkap'] ?></b></p>
    <form action="update_album.php" method="post">
        <?php
            include "koneksi.php";
            $albumid = $_GET['albumid'];
            $sql = mysqli_query($conn,"select * from album where albumid='$albumid'");
            while($data = mysqli_fetch_array($sql)) {
        ?>
        <input type="text" name="albumid" value="<?= $data['albumid'] ?>" hidden>
        <div class="container" style="margin: 0 auto; width: 400px;">
            <form action="update_album.php" method="post">
                <label for="namaalbum" style="display: block; color: #1450A3; font-weight: bold; text-align: center; padding-top: 80px; padding-bottom: 10px;">Nama Album</label>
                <input type="text" name="namaalbum" id="namaalbum"  value="<?= $data['namaalbum'] ?>" style="width: 100%; border-radius: 5px;">
                <label for="deskripsi" style="display: block; color: #1450A3; font-weight: bold; text-align: center; padding-top: 25px; padding-bottom: 10px;">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" value="<?= $data['deskripsi'] ?>" style="width: 100%; border-radius: 5px;">
                <div class="container" style="padding-top: 25px; padding-bottom: 10px; margin-left: -10px;">
                    <td></td>
                    <input type="submit" value="Ubah">
                </div>
            </form>
        </div>
        <?php
            }
        ?>
    </form>
    <div class="container-fluid fixed-bottom" style="background-color: black; text-align: center; color: white;">copyright &copy; ukkrpl2024</div>
</body>
</html>