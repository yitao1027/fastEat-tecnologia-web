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

    <!-- cookies modal-->













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

            <div class="input-group mb-3">
              <input type="text" value="" class="form-control" placeholder="Inserisci il tuo indirizzo" id="AddressSearch">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary "  style="background-color:rgb(48, 221, 48);" type="button" ><i class="fas fa-location-arrow" style="color:white;"></i></button>
              </div>
            </div>


          </div>

        </div>
      </section>

      <section>

      </section>





      <div class="container-fluid text-center">
        <div class="row">
          <div class="contact col-sm-3">
            <i class="fa fa-phone fa-2x"></i><br>
            <a href="tel:0547 673522" target="_blank"> 0547 673522</a>
          </div>
          <div class="contact col-sm-3">
            <i class="fa fa-map-marker fa-2x"></i><br>
            <a href="https://goo.gl/maps/FKWqDztU5rL2" target="_blank">Piazza Alessandro Bornaccini, 6
              <br>47923 Rimini RN</a>
            </div>
            <div class="contact col-sm-3">
              <i class="fa fa-envelope fa-2x"></i><br>
              <a href="mailto:FastEat@gmail.com">FastEat.it</a>
            </div>

            <div class="contact col-sm-3">
              <div class="row">
                <div class="contact col-sm-6">
                  <i class="fab fa-facebook-f fa-2x"></i>
                  <i class="fab fa-instagram fa-2x"></i>
                  <i class="fab fa-tripadvisor fa-2x"></i>
                  <i class="fab fa-twitter fa-2x"></i>
                </div>
                <div class="contact col-sm-6">
                  <img class=" img-responsive" src="img/app.svg" style="float:left;"></img>
                  <img class=" img-responsive" src="img/google.png" style="float:right;height:40px;">
                </div>
              </div>
            </div>
          </div>
        </div>


        <footer class=" text-center container-fluid ">
          <div class="pie">
            <p>@FastEat S.R.L 2018
              <br>Partita Iva:124248912312
              <br>
              <a data-toggle="modal" data-target="#exampleModalLong">
                <u>termini e condizioni d'uso privacy</u>
              </a>
            </p>
          </div>

          <div id="cookiesModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <p>Utilizziamo i cookie per essere sicuri che tu possa avere la migliore esperienza sul nostro sito.</p>
            </div>

          </div>
        </footer>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">IT policies, disclaimers and notices  privacy policy</h5>
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

                        <h4>How we use cookies</h4>
                        <p>  A cookie is a small file which asks permission to be placed on your computer's hard drive. Once you agree, the file is added and the cookie helps analyse web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes and dislikes by gathering and remembering information about your preferences.

                          We use traffic log cookies to identify which pages are being used. This helps us analyse data about webpage traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system.

                          Overall, cookies help us provide you with a better website by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us.

                          You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.</p>

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
