<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            color: #1450A3;
            background-color: white;
            font-family: arial;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['userid'])) {
        } else {
    ?>
    
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

<h1 style="padding-top: 50px; text-align: center;">Halaman Landing</h1>
<p style="padding-top: 10px; text-align: center;">Selamat Datang <b><?= $_SESSION['namalengkap'] ?></b></p>
    <?php
        }
    ?>
<div class="container-fluid">
<table class="table-bordered" border="1" cellpadding="5" cellspacing="0" style="width: 100%; border: 2px solid #1450A3;">
        <tr>
            <th style="text-align: center; background-color: white; color: #1450A3;">ID</th>
            <th style="text-align: center; background-color: white; color: #1450A3;">Judul</th>
            <th style="text-align: center; background-color: white; color: #1450A3;">Deskripsi</th>
            <th style="text-align: center; background-color: white; color: #1450A3;">Foto</th>
            <th style="text-align: center; background-color: white; color: #1450A3;">Uploader</th>
            <th style="text-align: center; background-color: white; color: #1450A3;">Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $sql = mysqli_query($conn, "select * from foto,user where foto.userid=user.userid");
            while($data = mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td style="text-align: center; background-color: white; color: #1450A3;"><?= $data['fotoid'] ?></td>
            <td style="text-align: center; background-color: white; color: #1450A3;"><?= $data['judulfoto'] ?></td>
            <td style="text-align: center; background-color: white; color: #1450A3;"><?= $data['deskripsifoto'] ?></td>
            <td style="text-align: center; background-color: white; color: #1450A3;"><img src="gambar/<?= $data['lokasifile'] ?>" width="200px"></td>
            <td style="text-align: center; background-color: white; color: #1450A3;"><?= $data['namalengkap'] ?></td>
            <td>
                <?php
                    $fotoid = $data['fotoid'];
                    $sql2 = mysqli_query($conn, "select * from likefoto where fotoid='$fotoid'");
                    echo mysqli_num_rows($sql2);
                ?>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
    <div class="container-fluid fixed-bottom" style="background-color: black; text-align: center; color: white;">copyright &copy; ukkrpl2024</div>
</body>
</html>