<?php
session_start();
$_SESSION["prodotto"]=array();
$_SESSION["numTot"]=0;
$_SESSION["subtotale"]=0;
?>
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8" />
  <title>FastEat</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/Custom.css" type="text/css" />
</head>

<body>
  <header id="Home">
    <nav class="navbar fixed-top navbar-expand-lg navbar-left  navbar-dark">
      <a class="navbar-brand" href="#">
        <img class="img-logo" src="img/logoP.png" alt="logoApplicazione" style="height:55px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mt-2 mt-lg-0 ">
          <li class="nav-item active">
            <a class="nav-link" href="#Home">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/FastEat/tecnologia-web/menu.php" target="_blank">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#accessForm" data-toggle="modal">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

        <!--modal fade : login form effetto fade-->
        <div id="accessForm" class="modal fade" role="dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class=" text-uppercase">Login</h3>
            </div>

            <div class="modal-body">
              <form action="FastEatLogin.php" method="POST">
                <label>
                  <b>Username</b>
                </label>
                <input class="form-control" type="text" placeholder="Enter Username" name="uname" required>
                <label>
                  <b>Password</b>
                </label>
                <!-- form-control : width 100% backgrounf borderadius etc-->
                <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
                <button class="form" name="login" type="submit">Login</button>
                <label>
                  <input type="checkbox" checked="checked"> Remember me
                </label>
              </div>
              <div class="modal-footer" style="background-color:#f1f1f1">
                <span class="psw">Forgot
                  <a href="#">password?</a>
                </span>
                <span class="register">
                  <a id="registra" data-toggle="modal">New here?Sign Up</a>
                </span>

              </div>
            </form>
          </div>
        </div>


        <div id="registerForm" class="modal fade" role="dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class=" text-uppercase">Register</h3>
            </div>
            <div class="modal-body">
              <form action="FastEatRegister.php" method="POST">
                <label>
                  <b>Username</b>
                </label>

                <input class="form-control" type="text" placeholder="Enter Username" id="uname" name="uname" title="inserire username" required>
                <label>
                  <b>Password</b>
                </label>

                <div id="messagePsw" style="display:none"> <p id="msm"></p></div>
                <!-- form-control : width 100% backgrounf borderadius etc-->
                <input class="form-control" type="password" id="psw"  placeholder="Enter Password" name="psw"required>
                <label>
                  <b>Confirm Password</b>
                </label>
                <div id="messageConfpsw" style="display:none"> <p  id="confmsm" ></p></div>
                <input class="form-control" id="confpsw" title="inserire min 8 caratterti" type="password" placeholder="Confirm Passsord" name="confpsw" required>
                <label>
                  <b>Email</b>
                </label>
                <input class="form-control" type="text" id="email" placeholder="E-mail" name="email" required>
                <button class="form" id="register" name="register" type="submit">Create Account</button>
              </div>
              <div class="modal-footer" style="background-color:#f1f1f1">
              </div>
            </form>
          </div>
        </div>

        <?php
        if(isset($_SESSION["logged"])){
            echo("<p>".$_SESSION["logged"]."</p>");
        }
        ?>



<section class="container-fluid" style="padding:0; margin-top:80px;">
  <div class="carousel-inner">

        <img class="img-fluid" src="/FastEat/tecnologia-web/img/cover.jpg">

          <div class="carousel-caption text-center">
            <h2 class="text-uppercase">L'armonia tra
                  <strong style="color:rgb(48, 221, 48);">fast</strong> e
                  <strong style="color:rgb(48, 221, 48);">Health</strong><br>
            </h2>
              <p class="lead font-weight-normal">
                  Stanco di solito pranzo ?<br>
                  sushi freschi tutti giorni.</p>
              <button class="btn btn-success" type="button" id="formButton">Ordina su FastEat</button>

        </div>

</div>
</section>



          <footer class=" text-center container-fluid ">
            <div class="row first">
              <div class="contact col-sm-3">
                <i class="fa fa-phone fa-2x"></i>
                <a href="tel:0547 673522" target="_blank"> 0547 673522</a>
              </div>
              <div class="contact col-sm-3">
                <i class="fa fa-map-marker fa-2x"></i>
                <p>Viale Trento, 34
                  <br>47042 cesenatico(FC)</p>
                </div>
                <div class="contact col-sm-3">
                  <i class="fa fa-envelope fa-2x"></i>
                  <p>okinawaCesenatico.it</p>
                </div>

                <div class="contact col-sm-3">
                  <div class="row second">
                    <div class="contact col-sm-6">
                      <i class="fa fa-facebook-f fa-2x"></i>
                      <i class="fa fa-instagram fa-2x"></i>
                      <i class="fa fa-tripadvisor fa-2x"></i>
                      <i class="fa fa-twitter fa-2x"></i>
                    </div>
                    <div class="contact col-sm-6">
                      <img class=" img-responsive" src="img/app.svg" style="float:left;"></img>
                      <img class=" img-responsive" src="img/google.png" style="float:right;height:40px;">
                    </div>
                  </div>
                </div>
                <div class=" separator"></div>
                <div class="pie">
                  <p>@FastEat S.R.L 2018
                    <br>Partita Iva:124248912312
                    <br>
                    <a href="file/privacy.pdf">
                      <u>termini e condizioni d'uso privacy</u>
                    </a>
                  </p>
                </div>
              </footer>

              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <script src="js/fastEat.js"></script>
            </body>

            </html>
