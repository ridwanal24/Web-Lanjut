<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sekolahmu</title>

  <!-- Bootstrap core CSS -->
  
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

<!--   <link rel="stylesheet" href="css/pengumuman.css">
 -->  <!-- <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
</head>

<body class="bg-light">

  <!-- Navigation -->
  <nav class="navbar shadow navbar-expand-lg bg-white border-secondary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-secondary" href="index.php">Sekolahmu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link text-secondary" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="galeri.php">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="profil_sekolah.php">Profil Sekolah</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-secondary" href="kritik_saran.php">Kritik & Saran</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-secondary" href="ekstra.php">Ekstrakurikuler</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-secondary" href="daftar_guru.php">
              Daftar Guru
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary" href="daftar_siswa.php">
              Daftar Siswa
            </a>
          </li>

          <!-- Change Login Menu to User's Name -->
          <?php
          if (!isset($_SESSION['status'])) {
            ?>

            <li class="nav-item dropdown text-secondary">
              <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="login_admin.php">Admin</a>
                <a class="dropdown-item" href="login_guru.php">Guru</a>
                <a class="dropdown-item" href="login_siswa.php">Siswa</a>
              </li>
            <?php }
            else if (isset($_SESSION) && ($_SESSION['status'] == "Admin"))
            {
              ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-haspopup="trueS" aria-expanded="false"><?php
                echo $_SESSION['username'];
                ?>
                
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="dashboard/">Dashboard</a>
                <a class="dropdown-item" href="logout.php">Keluar</a>
                
              </li>
              <?php
            } else{
              ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-haspopup="trueS" aria-expanded="false"><?php
                echo $_SESSION['username'];
                ?>
                
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                <a class="dropdown-item" href="logout.php">Keluar</a>
                
              </li>
              <?php
            }
            ?>
            <!-- End Of Change User's Name -->

          </ul>
        </div>
      </div>
    </nav>