<?php
session_start();
?>
<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="utf-8" />
  <title>FastEat</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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

      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mt-2 mt-lg-0 ">
  
          <li class="nav-item active">
            <a class="nav-link"   href="DBProdotti.php" >Database Prodotti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Ordini.php">Ordini Attivi</a>
          </li>
          <li class="nav-item">
            <?php
            if(isset($_SESSION["logIn"])&&$_SESSION["logIn"]==true){

              echo "<div class='row' style='margin:0;'><div class='col-8' style='padding:0'><a class='nav-link ' href='Administratore.php'><i class='fas fa-user'></i>   ".$_SESSION["user"]."</a></div>";
              echo "<div class='col-4'style='padding:0;display:flex; align-items: center;justify-content: flex-end;'><button id='logOutBtn' type='button' class='btn btn-link'><i class='fas fa-sign-out-alt'></i></button></div></div>";
            }

            ?>
          </li>
        </ul>
      </div>
    </nav>
  </header>




  <div id="divMsg" class='modal fade' tabindex='-1' role='dialog'>
    <div class='modal-dialog modal-dialog-centered' role='document'>
      <div class='modal-content'>
        <div class='modal-body'>
          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
            <span aria-hidden='true'  >&times;</span>
          </button>
          <p id="responseMsg"></p>
        </div>
      </div>
    </div>
  </div>





  <section class="container-fluid underNav panel-admin">

    <div class="text-center icon-admin">
      <img class="img-fluid" src="img/admin.png">
    </div>
    <div class="row text-center ">
      <div class="col"><a id='DbProdotti'  href="DBProdotti.php" type='button' class='btn btn-primary'>Data Base Prodotti</a></div>
      <div class="col"><a id='OrdiniAttivi'  href="Ordini.php" type='button' class='btn btn-primary'>Ordini Attivi</a></div>
    </div>

  </section>








  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvyZ6DB32hcO3vkSpNR4JpAwh6hiRQqVc&libraries=places"></script>
  <script src="js/fastEat.js"></script>
  <script src="js/admin.js"></script>

</body>

</html>
