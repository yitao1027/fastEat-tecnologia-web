<?php
session_start();

?>
<!DOCTYPE html>
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

      <div class=" collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mt-2 mt-lg-0 ">
          <li class="nav-item active">
            <a class="nav-link" href="FASTEAT.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <?php
            if(isset($_SESSION["logIn"])&&$_SESSION["logIn"]==true){

              echo "<div class='row' style='margin:0;'><div class='col-8' style='padding:0'><a class='nav-link ' href='Carrello.php'><i class='fas fa-user'></i>   ".$_SESSION["user"]."</a></div>";
              echo "<div class='col-4'style='padding:0;display:flex; align-items: center;justify-content: flex-end;'><button id='logOutBtn' type='button' class='btn btn-link'><i class='fas fa-sign-out-alt'></i></button></div></div>";
            }else{
              echo "<a class='nav-link' href='FastEatLoginRegister.php'>Login</a>";
            }

            ?>
          </li>
        </ul>
      </div>
    </nav>
  </header>





  <div class="container-fluid underNav">

    <p class="caption text-center" id="Carrello">Carrello</p>
  <hr>
    <?php

    if(isset($_SESSION["ordine"]) && count($_SESSION["ordine"])>1){

      $order=array_slice($_SESSION["ordine"], 1, count($_SESSION["ordine"]));;

      $subtotale=0;

      foreach($order as $item) {
        //($x=1;$x<count($order);$x++){

        $piatto=$item->{'piattoName'};
        $quantita=$item->{'quantità'};
        $prezzo=$item->{'prezzo'};


        $totalePiatto=str_replace("€", "", $prezzo)*$quantita;
        $esempioImg="salmone nigiri";
        echo"<div class='row'>
        <div class='col'>
        <img class='img-fluid' src='img/".$esempioImg.".jpg' alt=".$piatto.">
        <small><button class='btn btn-link rimuovi' value='".$piatto."'>rimuovi</button></small>
        </div>
        <div class='col'>
        <p>".$piatto."</p>
        <p>Quantità: ".$quantita."</p>
        <p>Prezzo: ".$totalePiatto."€</p>
        </div>
        </div>
        <hr>";
        $subtotale+=$totalePiatto;
      }
      $totale=$subtotale;
      echo "<div class='row'>
      <div class='col'>
      <p>subtotale </p>
      <p>costo consegna </p>
      <p style='font-weight:bold;'>totale</p>
      </div>
      <div class='col' style='text-align: right;''>
      <p>€ ".$subtotale."</p>
      <p id='costoConsegna'>€ 0</p>
      <p id='totaleCosto' style='font-weight:bold;'>€ ".$totale."</p>
      </div>
      </div><hr>";


    }else {
      echo  "<p class='text-center' style='font-size:30px; margin:50px 0;'>VUOTO</p><hr>  ";
    }
    ?>

    <div class="btn-group" role="group" aria-label="ordine ">
      <select class="btn btn-primary" id="tipoOrdine">
        <option value="TipoConsegna">
          Consegna a Domicilio
        </option>
        <option value="TipoRitiro">
          Ritiro a Ristorante
        </option>
      </select>
    </div>

    <form>
      <div class="FormOrdine" id="FormConsegna">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputDate">Data</label>
            <input type="date" class="form-control" id="inputData" placeholder="GG/MM">
          </div>
          <div class="form-group col-md-6">
            <label for="inputOra">Ora</label>
            <input type="time" min="11:00" max="23:00" class="form-control" id="inputOra" placeholder="HH:MM">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputName">Nome</label>
            <input type="text" class="form-control" id="inputNome" placeholder="Nome">
          </div>
          <div class="form-group col-md-4">
            <label for="inputCell">Cellulare</label>
            <input type="tel" class="form-control" id="inputCellulare" placeholder="+039">
          </div>
          <div class="form-group col-md-4">
            <label for="inputIndirizzo">Indirizzo</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Via roma 1">
          </div>
        </div>
      </div>

      <div class="FormOrdine" id="FormRitiro">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputDate">Data</label>
            <input type="date" class="form-control" id="inputData" placeholder="GG/MM">
          </div>
          <div class="form-group col-md-6">
            <label for="inputOra">Ora</label>
            <input type="time" min="11:00" max="23:00" class="form-control" id="inputOra" placeholder="HH:MM">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputName">Nome</label>
            <input type="text" class="form-control" id="inputNome" placeholder="Nome">
          </div>
          <div class="form-group col-md-4">
            <label for="inputCell">Cellulare</label>
            <input type="tel" class="form-control" id="inputCellulare" placeholder="+039">
          </div>
        </div>
      </div>
      <hr>
      <div class="FormOrdine" id="FormPay">

        <div class="form-row">
          <div class="form-group col">
            <h3>Payment</h3>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col">
            <label  for="fname">Accepted Cards</label>
            <div class="icon">
              <i class="fab fa-cc-visa fa-2x" style="color:navy;"></i>
              <i class="fab fa-cc-amex  fa-2x" style="color:blue;"></i>
              <i class="fab fa-cc-mastercard  fa-2x" style="color:red;"></i>
              <i class="fab fa-cc-discover  fa-2x" style="color:orange;"></i>
              <i class="fab fa-paypal fa-2x" style="color: #008ae6  ;"></i>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class=" form-group col-md-6">
            <label for="cname">Name</label>
            <input class="form-control" type="text" id="cname" name="cardname" placeholder="Name">
          </div>
          <div class="form-group col-md-6">
            <label for="ccnum">Credit card number</label>
            <input class="form-control" type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="expmonth">Exp Month</label>
            <input class="form-control" type="text" id="expmonth" name="expmonth" placeholder="Settembre">
          </div>
          <div class="form-group col-md-4">
            <label for="expyear">Exp Year</label>
            <input class="form-control" type="text" id="expyear" name="expyear" placeholder="2018">
          </div>
          <div class="form-group col-md-4">
            <label for="cvv">CVV</label>
            <input class="form-control" type="text" id="cvv" name="cvv" placeholder="352">
          </div>
        </div>
        <div class="row ">
          <div class="col-md-4">
            <button type="submit" id="btn-pagamento" class="btn btn-primary">Procedi</button>
          </div>
        </div>

      </div>
    </form>
  </div>

  <section>
    <div class="container-fluid text-center">
      <h3>Contatti</h3>
      <div class="row">
        <div class="contact col-sm-3">
          <i class="fa fa-phone fa-2x"></i><br>
          <a href="tel:0547 673522" target="_blank"> 0547 673522</a>
        </div>
        <div class="contact col-sm-3">
          <i class="fa fa-map-marker fa-2x"></i><br>
          <a href="https://goo.gl/maps/mEad6reUpAS2" target="_blank">Via Puglie, 65
            <br>47521 Cesena FC</a>
          </div>
          <div class="contact col-sm-3">
            <i class="fa fa-envelope fa-2x"></i><br>
            <a href="mailto:FastEat@gmail.com">FastEat@gmail.it</a>
          </div>

          <div class="contact col-sm-3">
            <div class="row">
              <div class="contact col-sm-6">
                <a><i class="fab fa-facebook-f fa-2x"></i></a>
                <a><i class="fab fa-instagram fa-2x"></i></a>
                <a><i class="fab fa-tripadvisor fa-2x"></i></a>
                <a><i class="fab fa-twitter fa-2x"></i></a>
              </div>
              <div class="contact col-sm-6">
                <img class="app img-responsive" src="img/app.svg" ></img>
                <img class="app img-responsive" src="img/google.png" style="height:40px;">
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <footer class=" text-center container-fluid ">
      <div class="pie">
        <p>@FastEat S.R.L 2018
          <br>Partita Iva:124248912312
          <br>
          <a data-toggle="modal" data-target="#policyPrivacyModal">
            <u>termini e condizioni d'uso privacy</u>
          </a>
        </p>
      </div>


    </footer>


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



    <!-- Modal detail privacy  -->
    <div class="modal fade" id="policyPrivacyModal" tabindex="-1" role="dialog" aria-labelledby="policyPrivacyModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">IT policies, disclaimers and notices  privacy policy</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">


              <h3>policy privacy</h3>
              <p> A privacy policy explains how you will respect the privacy of your website users. It says what information you will gather, how you will use it and how you will keep it secure. You will need a privacy policy:

                if you collect personal information
                to make sure that you comply with data protection legislation in the UK</p>
                <h4>IMPORTANT: The General Data Protection Regulation (GDPR) will apply in the UK from 25 May 2018. It will replace the 1998 Data Protection Act and introduce new rules on privacy notices, as well as processing and safeguarding personal data. We will be updating this privacy policy template ahead of 25 May to reflect the new rules.</h4>

                <p>
                  Website privacy policy
                  This privacy policy sets out how [business name] uses and protects any information that you give [business name] when you use this website.

                  [business name] is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, then you can be assured that it will only be used in accordance with this privacy statement.

                  [business name] may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes. This policy is effective from [date].</p>

                  <h4>  What we collect</h4>
                  <p>  We may collect the following information:

                    name and job title
                    contact information including email address
                    demographic information such as postcode, preferences and interests
                    other information relevant to customer surveys and/or offers
                    What we do with the information we gather
                    We require this information to understand your needs and provide you with a better service, and in particular for the following reasons</p>

                    <h4>Internal record keeping.</h4>
                    <p>  We may use the information to improve our products and services.
                      We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided.
                      From time to time, we may also use your information to contact you for market research purposes. We may contact you by email, phone, fax or mail. We may use the information to customise the website according to your interests.
                      Security
                      We are committed to ensuring that your information is secure. In order to prevent unauthorised access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p>


                      <h4>  Links to other websites</h4>
                      <p>    Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.</p>

                      <h4>  Controlling your personal information</h4>
                      <p>    You may choose to restrict the collection or use of your personal information in the following ways
                      </p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>




              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
              <script src="js/fastEat.js"></script>

            </body>

            </html>
