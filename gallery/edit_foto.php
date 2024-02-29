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
    <title>Halaman Edit Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: white;
            font-family: arial;
            color: #1450A3;
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
    <h1 style="padding-top: 50px; text-align: center;">Halaman Edit Foto</h1>
    <p style="padding-top: 10px; text-align: center;">Selamat Datang <b><?= $_SESSION['namalengkap'] ?></b></p>
    <form action="update_foto.php" method="post" enctype="multipart/form-data">
        <?php
            include "koneksi.php";
            $fotoid = $_GET['fotoid'];
            $sql = mysqli_query($conn,"select * from foto where fotoid='$fotoid'");
            while($data = mysqli_fetch_array($sql)) {
        ?>
        <div class="container" style="margin: 0 auto; width: 400px;">
                <input type="text" name="fotoid" id="fotoid" value="<?= $data['fotoid'] ?>" hidden style="width: 70%; border-radius: 5px;">
              <div class="edit_foto/judul-foto" style="padding-bottom: 10px; padding-top: 40px;">
                <td for="judulfoto" style="display: block; color: white; font-weight: bold; text-align: center;">Judul Foto : </td>
                <input type="text" name="judulfoto" id="judulfoto"  value="<?= $data['judulfoto'] ?>" style="width: 70%; border-radius: 5px;">
              </div>
              <div class="edit_foto/deskripsi-foto" style="padding-top: 10px;">
                <td for="deskripsifoto" style="display: block; color: white; font-weight: bold; text-align: center;">Deskripsi : </td>
                <input type="text" name="deskripsifoto" id="deskripsifoto" value="<?= $data['deskripsifoto'] ?>" style="width: 70%; border-radius: 5px; margin-left: 8px;">
              </div>
              <div class="edit_foto/lokasifile" style="padding-top: 10px;">
                <td><input type="file" name="lokasifile" value="<?= $data['lokasifile'] ?>" style="bakcground-color: white; width: 70%; border-radius: 5px; padding-top: 10px;"></td>
              </div>
              <div class="edit_foto/album" style="padding-top: 10px;">
                <td for="namaalbum" style="display: block; color: white; font-weight: bold; text-align: center;">Album : </td>
                <select name="albumid" style="margin-left: 30px;">
                        <?php
                            $userid = $_SESSION['userid'];
                            $sql2 = mysqli_query($conn,"select * from album where userid='$userid'");
                            while($data2 = mysqli_fetch_array($sql2)) {
                        ?>
                            <option value="<?= $data2['albumid'] ?>" <?php if($data2['albumid'] == $data['albumid']){echo 'selected';}?>><?= $data2['namaalbum'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                          </div>
                <div class="container" style="margin-left: -13px; padding-top: 10px;">
                    <td></td>
                    <input type="submit" value="Ubah">
                </div>
        </div>
        <?php
            }
        ?>
    </form>
    <div class="container-fluid fixed-bottom" style="background-color: black; text-align: center;">copyright &copy; ukkrpl2024</div>
</body>
</html>