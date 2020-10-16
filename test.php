<?php
  include "config.php";
  // test
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
        <a class="nav-link" href="#"><?php echo $lang['order'] ?></a>
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
<div class="padding">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <img src="img/image 2.svg" class="img-responsive">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-center">
          <h2>All about using Bootstrap</h2>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Deserunt possimus omnis cumque dolorem quidem accusantium ipsa aspernatur tempora!
              Facilis sint accusantium laboriosam aperiam autem tempora et, dicta saepe quis alias!
          </p>
        </div>
      </div>
    </div>
</div>
<div class="padding">
    <div class="container py-5">
      <div class="row align-items-center justify-content-center">
          <h2>Order Coach Easy App and use it completely free for 2 months!</h2>
      </div>
      <div class="row align-items-center justify-content-center pt-4">
          <button type="button" class="btn btn-primary" id="order-btn">Order</button>
      </div>
    </div>
</div>
<div class="padding">
    <div class="container py-5">
      <div class="row align-items-center justify-content-center">
            <h1>Tailor-made for</h1>
        </div>
        <div class="row align-items-center justify-content-center">
            <h2>coaches, players and management</h2>
        </div>
        <div class="row pt-4">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                <img src="img/coach 1.svg" class=".img-fluid. max-width: 100%; height: auto;">
                <p class="par">Real-time analytics of all the <br> relevant parameters helps <br> coaches during training <br> optimization and it lets <br> them focus on the individual <br> player
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                <img src="img/football-team 1.svg" class=".img-fluid. max-width: 100%; height: auto;">
                <p class="par">Better time management as <br> well as increased <br> self-awareness improves <br> injury prevention for more <br> than 70%
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                <img src="img/friendly 1.svg" class=".img-fluid. max-width: 100%; height: auto;">
                <p class="par">Coach Easy App increases <br> management transparency <br> to a whole new level. <br> Real-time analytics and <br> reporting is a game changer <br> when it comes to making <br> fast decisions
                </p>
            </div>
        </div>
    </div>
</div>
<div class="padding">
    <div class="container py-5"  style="background-color:white;">
      <div class="row py-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2>Easy training scheduling <br> and player presence <br> tracking</h2>
          <p class="lead">Schedule your trainings easily and let <br> your players know about it. Have a <br> real-time insight in player presence.
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <img src="img/image 3.svg" class=".img-fluid. max-width: 100%; height: auto;">
        </div>
      </div>
    </div>
</div>
<div class="padding">
    <div class="container py-5"  style="background-color:white;">
      <div class="row py-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <img src="img/smartphone 1.svg" class=".img-fluid. max-width: 100%; height: auto;">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2>Minimalistic design with <br> real-time notifications</h2>
          <p class="lead">Players have the ability to rate certain <br> training parameters and give their <br> perspective on the training quality <br> both from physical and mental <br> perspective. Based on this, valuable <br> reports are generated that help making <br> future corrections and better training <br> planning in the future.
          </p>
        </div>
      </div>
    </div>
</div>
<div class="padding">
    <div class="container py-5"  style="background-color:white;">
      <div class="row py-5">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2>Top-notch reports at all <br> times</h2>
          <p class="lead">Coaches and management have <br> outstanding reports on both team and <br> individual performance at all time. <br> Reports are very intuitive and easily <br> readable plus they are showing <br> important information in real time that <br> are necessary for optimal team <br> management.
          </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <img src="img/image 6.svg" class=".img-fluid. max-width: 100%; height: auto;">
        </div>
      </div>
    </div>
</div>
<div class="padding">
    <div class="container py-5"  style="background-color:white;">
        <div class="row align-items-center justify-content-center">
            <h2>Order Coach Easy App and use it completely free for 2 months!</h2>
        </div>
        <div class="row align-items-center justify-content-center">
            <button type="button" class="btn btn-primary" id="order-btn">Order</button>
        </div>
        
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>