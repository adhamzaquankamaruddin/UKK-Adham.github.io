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
  <h1 style="padding-top: 50px; text-align: center; color: #1450A3;">Halaman Album</h1>
  <p style="padding-top: 10px; text-align: center;">Selamat Datang <b><?= $_SESSION['namalengkap'] ?></b></p>
    </div>
        <div class="container" style="margin: 0 auto; width: 1000px; padding-right: 100px; padding-top: 40px;">
        <table class="table-bordered" border="1" cellpadding="5" cellspacing="0" style="width: 100%; margin-right: 100px; border: 2px solid #1450A3;">
          <tr>
            <th style="text-align: center; background-color: white; color: #1450A3;">ID</th>
            <th style="text-align: center; background-color: white; color: #1450A3;">Nama Album</th>
            <th style="text-align: center; background-color: white; color: #1450A3;">Deskripsi</th>
            <th style="text-align: center; background-color: white; color: #1450A3;">Tanggal Dibuat</th>
            <th style="text-align: center; background-color: white; color: #1450A3;">Aksi</th>
          </tr>
        <?php
            include "koneksi.php";
            $userid = $_SESSION['userid'];
            $sql = mysqli_query($conn,"select * from album where userid='$userid'");
            while($data = mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td style="text-align: center; background-color: white; color: #1450A3;"><?= $data['albumid'] ?></td>
            <td style="text-align: center; background-color: white; color: #1450A3;"><?= $data['namaalbum'] ?></td>
            <td style="text-align: center; background-color: white; color: #1450A3;"><?= $data['deskripsi'] ?></td>
            <td style="text-align: center; background-color: white; color: #1450A3;"><?= $data['tanggaldibuat'] ?></td>
            <td style="text-align: center; background-color: white; color: #1450A3;">
            <button type="button" class="btn btn-danger"><a href="hapus_album.php?albumid=<?= $data['albumid'] ?>" style="color: white; text-decoration: none;">Hapus</a></button>
            <button type="button" class="btn btn-primary"><a href="edit_album.php?albumid=<?= $data['albumid'] ?>" style="color: white; text-decoration: none;">Edit</a></button>
            </td>
        </tr>
        <?php
            }
        ?>
        </table>
            <div class="" style="padding-top: 10px; padding-bottom: 50px; margin-left: ;">
                <td></td>
                <button class="btn btn-success"><a href="tambah_album2.php" style="color: white; text-decoration: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
</svg></a></button>
            </div>
        </div>
    </div>
    <div class="container-fluid fixed-bottom" style="background-color: black; text-align: center; color: white;">copyright &copy; ukkrpl2024</div>
</body>
</html>