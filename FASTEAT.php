<?php
session_start();
$_SESSION["prodotto"]=array();
$_SESSION["numTot"]=0;
$_SESSION["logged"]="";
?>
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8" />
  <title>FastEat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="css/FastEat.css" />
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="header-nav container-fluid">
      <a class="navbar-brand" href="#">
        <img class="logo img-responsive" src="img/logoP.png" alt="logo">
      </a>
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="list-menu" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars fa-2x"></i>
        </button>
      </div>
    </div>
  </nav>
  <div id="navbar">
    <ul class=" navbar-list text-uppercase nav navbar-right" data-spy="affix" data-offset-top="205">
  <li>
    <a href="#aboutUs">
      <i class="fa fa-share-alt fa-2x list-item" aria-hidden="true"></i>About Us</a>
    </li>
    <li>
      <a href="#Menu">
        <i class="fa fa-share-alt fa-2x list-item" aria-hidden="true"></i>Menu</a>
      </li>
      <li>
        <a href="#accessForm" data-toggle="modal">
          <i class="fa fa-user-circle fa-2x  list-item" aria-hidden="true"></i>Login</a>
        </li>
      </ul>
    </div>

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
if($_SESSION["logged"]==false){
  echo "<script> alert('Errore login')</script>";
}

?>



  <section id="cover" class="container-fluid">
    <h2 class=" slogan-h2 text-uppercase">L'armonia tra
      <strong style="color:rgb(48, 221, 48);">fast</strong> e
      <strong style="color:rgb(48, 221, 48);">Health</strong>
    </h2>
    <div class="slogan text-uppercase">
      <h4>Stanco di solito pranzo</h4>
      <p>sushi freschi
        <img src="img/sushi.svg" alt="sushi-icon"> tutti giorni</p>
        <button type="button" id="formButton" class="btn text-uppercase text-important">Ordina su FastEat</button>
      </div>
    </section>

    <div class="separator"></div>

    <footer class=" text-center container-fluid ">
      <div class="row first">
        <div class="contact col-sm-3">
          <i class="fa fa-phone fa-2x"></i>
          <p> 0547 673522</p>
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

        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fastEat.js"></script>
      </body>

      </html>
