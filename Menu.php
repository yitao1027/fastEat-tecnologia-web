<?php
session_start();
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
      <a  class="navbar-brand" href="#">
        <img class="logo img-responsive" src="img/logoP.png" alt="logo">
      </a>
      <a href="/FastEat/tecnologia-web/Carrello.php" class="menu_carello" >
        <i class="fa fa-shopping-cart fa-2x list-item" aria-hidden="true"></i><span id="numTot"><?php echo($_SESSION["numTot"]) ?></span>
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
            <i class="fa fa-user-circle fa-2x  list-item" aria-hidden="true"></i><?php echo($_SESSION["username"]);?></a>
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


          <section class="listPro">

            <h4>SiiNigiri (2pz)<i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></h4>
            <ul class="list-group listPro-categoria">
              <li class="list-group-item">
                <h5>Salmone</h5>
                <div class="pro-price"><p>€ 3,00</p></div>
                <button class="btn-pro-plus"  value="1">
                  <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
                </button>
              </li>
            </form>

            <li class="list-group-item">
              <h5>Tonno</h5>
              <div class="pro-price"><p>€ 4,00</p></div>
              <button class="btn-pro-plus" value="2">
                <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
              </button>
            </form>
          </li>

          <li class="list-group-item">
            <h5>Ebi</h5>
            <div class="pro-price"><p>€ 3,00</p></div>
            <button class="btn-pro-plus" value="3">
              <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
            </button>
          </li>
        </form>

        <li class="list-group-item">
          <h5>Branzino</h5>
          <div class="pro-price"><p>€ 3,00</p></div>
          <button class="btn-pro-plus" value="4">
            <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
          </button>
        </li>
      </form>

      <li class="list-group-item">
        <h5>Avocado</h5>
        <div class="pro-price"><p>€ 4,00</p></div>
        <button class="btn-pro-plus" value="5">
          <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
        </button>
      </li>
    </form>

    <li class="list-group-item">
      <h5>Sake Aburi</h5>
      <div class="pro-price"><p>€ 5,00</p></div>
      <button class="btn-pro-plus" value="6">
        <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
      </button>
    </li>
  </form>
</ul>
</section>

<section class="listPro">
  <h4>PiccoliHoso(6pz)<i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></h4>
  <ul class="list-group listPro-categoria">

    <li class="list-group-item">
      <h5>Salmone</h5>
      <div class="pro-price"><p>€ 4,00</p></div>
      <button class="btn-pro-plus" value="10">
        <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
      </button>
    </li>
  </form>

  <li class="list-group-item">
    <h5>Tonno</h5>
    <div class="pro-price"><p>€ 5,00</p></div>
    <button class="btn-pro-plus" value="11">
      <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
    </button>
  </li>
</form>

<li class="list-group-item">
  <h5>Ebi</h5>
  <div class="pro-price"><p>€ 4,00</p></div>
  <button class="btn-pro-plus" value="12">
    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </button>
</li>
</form>

<li class="list-group-item">
  <h5>Branzino</h5>
  <div class="pro-price"><p>€ 4,00</p></div>
  <button class="btn-pro-plus" value="13">
    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </button>
</li>
</form>

<li class="list-group-item">
  <h5>Avocado</h5>
  <div class="pro-price"><p>€ 5,00</p></div>
  <button class="btn-pro-plus" value="14">
    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </button>
</li>
</form>

<li class="list-group-item">
  <h5>Fritto Phila Ichigo</h5>
  <div class="pro-price"><p>€ 8,00</p></div>
  <button class="btn-pro-plus" value="15">
    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </button>
</li>
</form>
</ul>
</section>

<section class="listPro">
  <h4>GranUra (8pz)<i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></h4>
  <ul class="list-group listPro-categoria">

    <li class="list-group-item">
      <h5>Misto pesce (2 tipi a scelta)</h5>
      <div class="pro-price"><p>€ 10,00</p></div>
      <button class="btn-pro-plus" value="20">
        <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
      </button>
    </li>
  </form>

  <li class="list-group-item">
    <h5>MaCheFritto</h5>
    <div class="pro-price"><p>€ 10,00</p></div>
    <button class="btn-pro-plus" value="21">
      <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
    </button>
  </li>
</form>

<li class="list-group-item">
  <h5>SiAlVegetariano</h5>
  <div class="pro-price"><p>€ 10.00</p></div>
  <button class="btn-pro-plus" value="22">
    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </button>
</li>
</form>

<li class="list-group-item">
  <h5>PhiladelfiaTime</h5>
  <div class="pro-price"><p>€ 10,00</p></div>
  <button class="btn-pro-plus" value="23">
    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </button>
</li>
</form>

<li class="list-group-item">
  <h5>AllCotto</h5>
  <div class="pro-price"><p>€ 10,00</p></div>
  <button class="btn-pro-plus" value="24">
    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </button>
</li>
</form>
</ul>
</section>

<section class="listPro">
  <h4 >TemakiLove(1pz)<i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></h4>
  <ul class="list-group listPro-categoria">

    <li class="list-group-item">
      <h5>Salmone</h5>
      <div class="pro-price"><p>€ 4,00</p></div>
      <button class="btn-pro-plus" value="30">
        <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
      </button>
    </li>
  </form>

  <li class="list-group-item">
    <h5>Tonno</h5>
    <div class="pro-price"><p>€ 5,00</p></div>
    <button class="btn-pro-plus" value="31">
      <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
    </button>
  </li>
</form>

<li class="list-group-item">
  <h5>Ebi</h5>
  <div class="pro-price"><p>€ 4,00</p></div>
  <button class="btn-pro-plus" value="32">
    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </button>
</li>
</form>

<li class="list-group-item">
  <h5>Ebiten</h5>
  <div class="pro-price"><p>€ 5,00</p></div>
  <button class="btn-pro-plus" value="33">
    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </button>
</li>
</form>
</ul>
</section>

<section class="listPro">
  <h4>Bevande<i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></h4>
  <ul class="list-group listPro-categoria">

    <li class="list-group-item">
      <h5>Coca Cola/Fanta 33cl</h5>
      <div class="pro-price"><p>€ 2,50</p></div>
      <button class="btn-pro-plus" value="40">
        <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
      </button>
    </li>
  </form>

  <li class="list-group-item">
    <h5>Tè Verde Giapponese 33cl  </h5>
    <div class="pro-price"><p>€ 3,00</p></div>
    <button class="btn-pro-plus" value="41">
      <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
    </button>
  </li>
</form>

<li class="list-group-item">
  <h5>Birra Giapponese 50cl</h5>
  <div class="pro-price"><p>€ 5,00</p></div>
  <button class="btn-pro-plus" value="42">
    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </button>
</li>
</form>

<li class="list-group-item">
  <h5>Acqua 25cl</h5>
  <div class="pro-price"><p>€ 1,00</p></div>
  <button class="btn-pro-plus" value="43">
    <i class="fa fa-plus fa-2x" aria-hidden="true"></i>
  </button>
</li>
</form>
</ul>
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
