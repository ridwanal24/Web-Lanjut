

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sekolahmu</title>

  <!-- <link rel="stylesheet" href="css/guru.css"> -->
  <!-- Bootstrap core CSS -->
  
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body class="bg-light">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="../index.php">Dashboard Admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      if (isset($_SESSION['username'])) {
        ?>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            
            <!-- Change Login Menu to User's Name -->
            
            <?php
            if (isset($_SESSION['username'])) {
              ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                  <?php echo $_SESSION['username'];
                }
                ?>
                
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                <a class="dropdown-item" href="logout.php">Keluar</a>
                
              </li>
              <!-- End Of Change User's Name -->
              
            </ul>
          </div>
        <?php } ?>
      </div>
    </nav>
 <!-- Batas -->
 