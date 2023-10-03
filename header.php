<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <style>

  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./Images/carbon-footprint.png" alt="" width="50px" height="50px">
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="main.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="btn-group dropstart">
      <a class="navbar-brand" href="#" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="./Images/user-profile-icon.png" alt="" width="30px" height="30px">
      </a>

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">

        <?php

        if (!isset($_SESSION['uemail'])) { ?>
          <li><a class="dropdown-item disabled">Not Logged in</a></li>
          <hr style="margin:5%">
          <li><a class="dropdown-item" href="signup&login.php">Login</a></li>
        <?php } ?>
        <?php if (isset($_SESSION['uemail'])) { ?>
          <li><a class="dropdown-item disabled"><?php echo $_SESSION['uname']; ?></a></li>
          <hr style="margin:5%">
          <li><a class="dropdown-item" href="accountInfo.php">Account Information</a></li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        <?php } ?> <!-- End if --><!-- End if -->
      </ul>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>