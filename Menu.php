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
            <a class="nav-link" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="FastEatLoginRegister.php" >Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>




  <section class="underNav">

  <ul class="list-group">
    <p class="menu-caption text-center">Il nostro Menu</p>

    <li class="list-group-item">
      <p class="category-caption" data-toggle="collapse" href="#nigiri" role="button" aria-expanded="false" aria-controls="nigiriControll">SiiNigiri (2pz)<i class="fas fa-angle-double-down"></i></p>
      <div class="category-item collapse" id="nigiri">

        <div class="row">
          <div class="col-6">
        <p>Salmone</p>
        <p>€ 3,00</p></div>
      <div class="col-6 divPlus">
        <button class="btn btn-outline-dark" value="1">
          <i class="fa fa-plus" aria-hidden="true"></i>
        </button>
      </div>
    </div>


    <div class="row">
    <div class="col-6">
      <p>Tonno</p>
      <p>€4,00</p></div>
      <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="2">
        <i class="fa fa-plus  " aria-hidden="true"></i>
      </button>
    </div>
  </div>



    <div class="row">
    <div class="col-6">
    <p>Ebi</p>
    <p>€ 3,00</p></div>
    <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="3">
      <i class="fa fa-plus  " aria-hidden="true"></i>
    </button>
  </div>
</div>



<div class="row">
    <div class="col-6">
  <p>Branzino</p>
  <p>€ 3,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="4">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>



<div class="row">
    <div class="col-6">
  <p>Avocado</p>
  <p>€ 4,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="5">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>

</form>

<div class="row">
    <div class="col-6">
  <p>Sake Aburi</p>
  <p>€ 5,00</p></div>
    <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="6">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>
</div>
</li>
















<li  class="list-group-item" >
  <p  class="category-caption" data-toggle="collapse" href="#hosomaki" role="button" aria-expanded="false" aria-controls="hosomakiControll">PiccoliHoso(6pz)<i class="fas fa-angle-double-down"></i></p>
<div class="category-item collapse" id="hosomaki">


    <div class="row">
    <div class="col-6">
      <p>Salmone</p>
      <p>€ 4,00</p></div>
      <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="10">
        <i class="fa fa-plus  " aria-hidden="true"></i>
      </button>
    </div>
    </div>


  <div class="row">
    <div class="col-6">
    <p>Tonno</p>
    <p>€ 5,00</p></div>
    <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="11">
      <i class="fa fa-plus  " aria-hidden="true"></i>
    </button>
  </div>
  </div>


<div class="row">
    <div class="col-6">
  <p>Ebi</p>
  <p>€ 4,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="12">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>


<div class="row">
    <div class="col-6">
  <p>Branzino</p>
  <p>€ 4,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="13">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>


<div class="row">
    <div class="col-6">
  <p>Avocado</p>
  <p>€ 5,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="14">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>


<div class="row">
    <div class="col-6">
  <p>Fritto Phila Ichigo</p>
  <p>€ 8,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="15">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>
</div>
</li>





<li  class="list-group-item" >
 <p  class="category-caption" data-toggle="collapse" href="#uramaki" role="button" aria-expanded="false" aria-controls="uramakiControll">GranUra (8pz)<i class="fas fa-angle-double-down"></i></p>
    <div class="category-item collapse" id="uramaki">

        <div class="row">
    <div class="col-6">
      <p>Misto pesce (2 tipi a scelta)</p>
      <p>€ 10,00</p></div>
      <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="20">
        <i class="fa fa-plus  " aria-hidden="true"></i>
      </button>
    </div>
    </div>



  <div class="row">
    <div class="col-6">
    <p>MaCheFritto</p>
    <p>€ 10,00</p></div>
    <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="21">
      <i class="fa fa-plus  " aria-hidden="true"></i>
    </button>
  </div>
  </div>


<div class="row">
    <div class="col-6">
  <p>SiAlVegetariano</p>
  <p>€ 10.00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="22">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>


<div class="row">
    <div class="col-6">
  <p>PhiladelfiaTime</p>
  <p>€ 10,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="23">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>


<div class="row">
    <div class="col-6">
  <p>AllCotto</p>
  <p>€ 10,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="24">
    <i class="fa fa-plus " aria-hidden="true"></i>
  </button>
</div>
</div>
</div>
</li>










<li  class="list-group-item">
<p class="category-caption"  data-toggle="collapse" href="#temaki" role="button" aria-expanded="false" aria-controls="temakiController">TemakiLove(1pz)<i class="fas fa-angle-double-down"></i></p>

<div class="category-item collapse" id="temaki">


    <div class="row">
    <div class="col-6">
      <p>Salmone</p>
      <p>€ 4,00</p></div>
      <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="30">
        <i class="fa fa-plus  " aria-hidden="true"></i>
      </button>
    </div>
    </div>


  <div class="row">
    <div class="col-6">
    <p>Tonno</p>
    <p>€ 5,00</p></div>
    <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="31">
      <i class="fa fa-plus  " aria-hidden="true"></i>
    </button>
  </div>
  </div>


<div class="row">
    <div class="col-6">
  <p>Ebi</p>
  <p>€ 4,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="32">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>


<div class="row">
    <div class="col-6">
  <p>Ebiten</p>
  <p>€ 5,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="33">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>
</div>
</li>






<li  class="list-group-item">
<p class="category-caption"  data-toggle="collapse" href="#bevande" role="button" aria-expanded="false" aria-controls="bevandeControll">Bevande<i class="fas fa-angle-double-down"></i></p>
<div class="category-item collapse" id="bevande">

    <div class="row">
    <div class="col-6">
      <p>Coca Cola/Fanta 33cl</p>
      <p>€ 2,50</p></div>
      <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="40">
        <i class="fa fa-plus  " aria-hidden="true"></i>
      </button>
    </div>
    </div>



  <div class="row">
    <div class="col-6">
    <p>Tè Verde Giapponese 33cl  </p>
    <p>€ 3,00</p></div>
    <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="41">
      <i class="fa fa-plus  " aria-hidden="true"></i>
    </button>
  </div>
  </div>


<div class="row">
    <div class="col-6">
  <p>Birra Giapponese 50cl</p>
  <p>€ 5,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="42">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>



<div class="row">
    <div class="col-6">
  <p>Acqua 25cl</p>
  <p>€ 1,00</p></div>
  <div class="col-6 divPlus"><button class="btn btn-outline-dark " value="43">
    <i class="fa fa-plus  " aria-hidden="true"></i>
  </button>
</div>
</div>
</div>
</li>
</ul>
</section>



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


  <div class="cart-container">
    <button class="btn btn-secondary"><i class="fas fa-shopping-cart"></i></</button>
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
            <script src="js/cookiesModalWindow.js"></script>
          </body>

          </html>
