<?php
session_start();
include("db_con.php");
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
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img class="logo img-responsive" src="img/logoP.png" alt="logo">
      </a>
      <button type="button" class="navbar-toggle" data-toggle="list-menu" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-bars fa-2x"></i>
      </button>
    </div>
  </nav>
  <div id="navbar">
    <ul class=" navbar-list text-uppercase nav navbar-right" data-spy="affix" data-offset-top="205">
      <li>
        <a href="/FastEat.php">
          <i class="fa fa-home fa-2x  list-item" aria-hidden="true"></i>Home</a>
        </li>
        <li>
          <a href="/UserProfilo.php" data-toggle="modal">
            <i class="fa fa-user-circle fa-2x  list-item" aria-hidden="true"></i><?php echo($_SESSION["username"]);  ?></a>
          </li>
          <li>
            <a href="#aboutUs">
              <i class="fa fa-share-alt fa-2x list-item" aria-hidden="true"></i>About Us</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-sign-out fa-2x  list-item" aria-hidden="true"></i>Log out</a>
              </li>
            </ul>
          </div>
          <div class="separator"></div>

          <?php
          if(isset($_POST["prodotto"])){
            if(isset($_SESSION["prodotto"]) && array_key_exists($_POST["prodotto"],$_SESSION["prodotto"])){
              $_SESSION["prodotto"][$_POST["prodotto"]]= $_SESSION["prodotto"][$_POST["prodotto"]]+1;
              $_SESSION["numTot"]=array_sum($_SESSION["prodotto"]);
            }else {
              $_SESSION["prodotto"][$_POST["prodotto"]]="1";

            }
            $_SESSION["numTot"]=array_sum($_SESSION["prodotto"]);
            header("Location:Menu.php");
          }
          ?>



          <section class="Carrello">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>&nbsp&nbsp&nbsp</th>
                  <th>Carrello</th>
                  <th>Quantità</th>
                  <th>Totale</th>

                </tr>
              </thead>
              <tbody>


                <?php
                foreach ($_SESSION["prodotto"] as $key => $value) {
                  $query = "SELECT * FROM listaprodotto WHERE PiattoN='".$key."'";
                  $result=$conn->query($query);
                  if($result->num_rows>0){
                    $row = $result->fetch_assoc();
                    $totale=$value*$row["Prezzo"];
                    echo "<tr><th> </th><td>".$row["piattoName"]."</td><td>$value</td><td>$totale €</td></tr>";
                  }
                }
                ?>


              </tbody>
            </table>
          </section>

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
