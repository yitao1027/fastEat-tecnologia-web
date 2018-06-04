<?php
session_start();
include("db_con.php");
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
  <link rel="stylesheet" href="css/Menu.css" type="text/css" />
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





  <section class="underNav container-fluid">


    <p class="caption text-center" id="listMenu">Il Menu</p>
    <section>
      <form  id="FormProdotto" method="POST" >
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputName">ID</label>
            <input  name="piattoId" type="number" class="form-control" required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputPiatto">Piatto Nome</label>
            <input name="piattoName" type="text" class="form-control"  required>
          </div>
          <div class="form-group col-md-4">
            <label for="inputCategoria">Categoria</label>
            <input name="categoria" type="text"  class="form-control" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputName">Prezzo</label>
            <input  name="prezzo" type="number" class="form-control" id="inputPrezzo"required>
          </div>
          <div class="form-group col-md-4">
            <button type="submit" id="btn-addProdotto" class="btn btn-primary">Aggiungi</button>
          </div>
        </div>
      </form>
    </section>

<hr>

<section>

    <ul class="list-group">



      <?php


      $query ="SELECT DISTINCT (Categoria) FROM listaprodotto";
      $category= $conn->query($query);

      if ($category->num_rows > 0) {
        while($cat = $category->fetch_assoc()) {

          $query = "SELECT * FROM listaprodotto WHERE categoria='".$cat["Categoria"]."'";
          $result = $conn->query($query);

          echo "<li class='list-group-item'>
          <p class='category-caption' data-toggle='collapse' href='#".$cat["Categoria"]."' role='button' aria-expanded='false' aria-controls='".$cat["Categoria"]."Controll'>".$cat["Categoria"]."
          <i class='fas fa-angle-double-down'></i></p>
          <div class='category-item collapse' id='".$cat["Categoria"]."'>";

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              echo "<div class='row'>
              <div class='col-8'>
              <p id=".$row["PiattoN"]."ID style='color:red; font-weight:bolder; font-size:20px; ' > ".$row["PiattoN"]."</p>
              <p id=".$row["PiattoN"]."name > ".$row["PiattoName"]."</p>
              <p id=".$row["PiattoN"]."prezzo > € ".$row["Prezzo"]."</p>
              <button class='btn btn-danger rimuoviDb' value='".$row["PiattoN"]."'>rimuovi</button>
              </div>

              <div class='col-4 divIcon'>
              <button class='btn modifica 'style='color:orange;' value=".$row["PiattoN"].">
              <i class='fas fa-wrench'></i>
              </button>
              </div>
              </div>";
            }
          }
          echo "</li>";
        }
      }

      ?>
    </ul>
  </section>
</section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvyZ6DB32hcO3vkSpNR4JpAwh6hiRQqVc&libraries=places"></script>
  <script src="js/fastEat.js"></script>
  <script src="js/admin.js"></script>

</body>

</html>
