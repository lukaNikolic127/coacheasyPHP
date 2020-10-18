<?php
  include "config.php";
  // test 123
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Coach Easy</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#First">
        <img style="max-height: 60px;" src="img/logo-raster.svg">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><?php echo $lang['home'] ?><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="order.php"><?php echo $lang['order'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><?php echo $lang['app'] ?></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php echo $lang['language'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?lang=en"><?php echo $lang['english'] ?></a>
          <a class="dropdown-item" href="index.php?lang=sr"><?php echo $lang['serbian'] ?></a>
          <a class="dropdown-item" href="#"><?php echo $lang['hungarian'] ?></a>
          <a class="dropdown-item" href="#"><?php echo $lang['german'] ?></a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="first">
<div class="padding">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
          <h2 class="pb-5"><?php echo $lang['section1-1'] ?></h2>
          <p class="lead pb-5"><?php echo $lang['section1-2'] ?>
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <img src="img/image 2.svg" class="img-responsive">
        </div>
      </div>
    </div>
</div>
<div class="padding">
    <div class="container py-5" style="background-color: #EEF1F5;">
      <div class="row align-items-center justify-content-center">
          <h2 class="text-center"><?php echo $lang['section2'] ?></h2>
      </div>
      <div class="row align-items-center justify-content-center pt-4">
          <button type="button" class="btn" onClick="document.location.href='order.php'"><?php echo $lang['order'] ?></button>
      </div>
    </div>
</div>
</div>
<div class="padding" style="min-height: 100vh">
    <div class="container py-5" style="background-color: #EEF1F5;">
      <div class="row align-items-center justify-content-center">
            <h1><?php echo $lang['section3-1'] ?></h1>
        </div>
        <div class="row align-items-center justify-content-center">
            <h2 class="text-center"><?php echo $lang['section3-2'] ?></h2>
        </div>
        <div class="row pt-4">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                <img src="img/coach 1.svg" class=".img-fluid. p-5 max-width: 100%; height: auto;">
                <p class="par"><?php echo $lang['section3-3'] ?>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                <img src="img/football-team 1.svg" class=".img-fluid. p-5 max-width: 100%; height: auto;">
                <p class="par"><?php echo $lang['section3-4'] ?>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                <img src="img/friendly 1.svg" class=".img-fluid. p-5 max-width: 100%; height: auto;">
                <p class="par"><?php echo $lang['section3-5'] ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="padding">
    <div class="container py-5" style="background-color:white; height:100vh;">
      <div class="row py-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2 class="pb-5"><?php echo $lang['section4-1'] ?></h2>
          <p class="lead pb-5"><?php echo $lang['section4-2'] ?>
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <img src="img/image 3.svg" class=".img-fluid. max-width: 100%; min-height: auto;">
        </div>
      </div>
    </div>
</div>
<div class="padding">
    <div class="container py-5"  style="background-color:white; min-height:100vh;">
      <div class="row py-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <img src="img/smartphone 1.svg" class=".img-fluid. pb-5 max-width: 100%; height: auto;">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2 class="pb-5"><?php echo $lang['section5-1'] ?></h2>
          <p class="lead"><?php echo $lang['section5-2'] ?>
          </p>
        </div>
      </div>
    </div>
</div>
<div class="padding">
    <div class="container py-5"  style="background-color:white; min-height:100vh;">
      <div class="row py-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2 class="pb-5"><?php echo $lang['section6-1'] ?></h2>
          <p class="lead pb-5"><?php echo $lang['section6-2'] ?>
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <img src="img/image 6.svg" class=".img-fluid. max-width: 100%; height: auto;">
        </div>
      </div>
    </div>
</div>
<div class="padding">
    <div class="container py-5"  style="background-color:#354454; color:white;">
        <div class="row align-items-center justify-content-center">
            <h2 class="text-center"><?php echo $lang['section7-1'] ?></h2>
        </div>
        <div class="row align-items-center justify-content-center pt-3">
            <button type="button" class="btn" onClick="document.location.href='order.php'"><?php echo $lang['order'] ?></button>
        </div>
        <p class="lead pt-3 text-center"><?php echo $lang['section7-2'] ?></p>
    </div>
</div>
<nav class="navbar navbar-light bg-light align-items-center justify-content-center">
  <a class="navbar-brand" href="#"><?php echo $lang['home'] ?></a>
  <a class="navbar-brand" href="order.php"><?php echo $lang['order'] ?></a>
  <a class="navbar-brand" href="#"><?php echo $lang['app'] ?></a>

</nav>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>