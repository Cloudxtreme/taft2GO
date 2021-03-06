<!DOCTYPE html>
<?php require_once 'ti.php' ?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php startblock('imports') ?>

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
            <?php startblock('style') ?><link rel="stylesheet" href="style.css" type="text/css"><?php endblock()?>
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <!--
            <link rel="import" href="bower_components/polymer/polymer-element.html">
            <link rel="import" href="bower_components/iron-ajax/iron-ajax.html">
            <link rel="import" href="bower_components/paper-button/paper-button.html">
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <?php endblock() ?>
</head>

<body>
	<?php startblock('navbar') ?>
		<nav class="navbar navbar-expand-md navbar-dark m-0 style transparent">
            <a href="/taft2GO/Homepage">
			<?php startblock('logo' )?><img src="T2G Logo.png" width="" height="50" class="d-inline-block align-top m-0" alt=""><?php endblock()?>
            </a>


            <!--
            <div class="container" style="opacity: 0.2;">
			  <a class="navbar-brand m-0" href="#"></a>
			  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			  <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
			    <ul class="navbar-nav"></ul>
			  </div>
			</div>
            -->
            <?php
            if(!isset($_SESSION)){
                session_start();
            }
            if (!isset($_SESSION['isLoggedIn'])){
                echo '<a class="btn navbar-btn ml-2 btn-light text-primary body baloo" href="/taft2GO/Host">Become a Host</a>
                    <!--<a class="btn navbar-btn ml-2 btn-light text-primary body baloo" href="/taft2GO/Help">Help--><p><?php echo " ". $_SESSION[\'fname\'] ." ". $_SESSION[\'lname\'];?></p>
                        <br> </a>
                    <a class="btn navbar-btn ml-2 btn-light text-primary baloo" href="/taft2GO/Signup">Sign Up</a>
                    <a class="btn navbar-btn ml-2 btn-light text-primary baloo" href="/taft2GO/Login">Log In</a>';
            }

            else{

                echo "<div class=\"w3-dropdown-hover\">
                      <img src=\"acico.png\" width=\"\" height=\"50\"
                           class=\"d-inline-block align-top m-0\" alt=\"\">
                          <div class=\"w3-dropdown-content w3-card-4\">
                              <!--<img src=\"img_london.jpg\" alt=\"London\" style=\"width:100%\">-->
                              <div class=\"w3-container\">
                                  <p></p>
                                  <p>{$_SESSION['fname']} {$_SESSION['lname']}</p>
                                  <!--<a href=\"#\" class=\"w3-bar-item w3-button\">Profile</a>-->
                                  <a class=\"btn navbar-btn ml-2 btn-light text-primary baloo\" href=\"/taft2GO/Stays\">Stays</a>
                                    <a class=\"btn navbar-btn ml-2 btn-light text-primary baloo\" href=\"/taft2GO/Listings\">Listings</a>
                                  <button onclick='clearSession()' class=\"w3-bar-item w3-button\">Logout</button>
                              </div>
                          </div>
                          <div class=\"w3-dropdown-content w3-bar-block w3-border\">
                                <!--
                              <a href=\"#\" class=\"w3-bar-item w3-button\">Profile</a>
                              <a href=\"/taft2GO/Logout\" class=\"w3-bar-item w3-button\">Logout</a>
                              <!--<a href=\"#\" class=\"w3-bar-item w3-button\">Link 3</a>-->
                          </div>
                      </div>";

                echo '<!--<a class="btn navbar-btn ml-2 btn-light text-primary body baloo" href="addlisting.php">Host-->
                      <br> </a>
                  
                  <!--<a class="btn navbar-btn ml-2 btn-light text-primary baloo" href="/taft2GO/Help">Help</a>-->';
            }
            ?>

            <?php startblock('searchbar') ?>
            <?php endblock() ?>

		</nav>

        <?php startblock('navbar2') ?>
        <?php endblock() ?>
	<?php endblock() ?>

	<?php startblock('content') ?>
        <?php startblock('sidemenu') ?>
        <?php endblock() ?>

        <?php startblock('menucontent') ?>
        <?php endblock() ?>

	<?php endblock() ?>

	<?php startblock('footer') ?>
		<div class="bg-dark text-white">
		    <div class="container">
		      <div class="row">
		        <div class="p-4 col-md-3">
		          <img src="T2GO Logo.png" width="" height="50" class="d-inline-block align-top m-0" alt="">
		          <p class="text-white">A website where you can find the right place for you to stay.</p>
		        </div>
		        <div class="p-4 col-md-3">
		          <h2 class="mb-4 baloo">Mapsite</h2>
		          <ul class="list-unstyled">
		            <a href="#" class="text-white">Home</a>
		            <br>
		            <a href="about.html" class="text-white">About us</a>
		            <br>
		            <a href="#" class="text-white">Our services</a>
		            <br>
		            <a href="#" class="text-white">Stories</a>
		          </ul>
		        </div>
		        <div class="p-4 col-md-3">
		          <h2 class="mb-4 baloo">Contact</h2>
		          <p>
		            <a href="tel:+246 - 542 550 5462" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-phone"></i>+63 - 999 550 5462</a>
		          </p>
		          <p>
		            <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>info@taft2GO.com</a>
		          </p>
		          <p>
		            <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>2401 Taft Ave., MNL</a>
		          </p>
		        </div>
		        <div class="p-4 col-md-3">
		          <h2 class="mb-4 text-light baloo">Subscribe</h2><i class="fa fa-fw fa-facebook fa-3x text-white"></i><i class="fa fa-fw fa-twitter fa-3x text-white"></i><i class="fa fa-fw fa-instagram text-white fa-3x"></i> </div>
		      </div>
		      <div class="row">
		        <div class="col-md-12 mt-3">
		          <p class="text-center text-white">© Copyright 2017 Taft2GO - All rights reserved. </p>
		        </div>
		      </div>
		    </div>
	  	</div>
	<?php endblock() ?>

  
    <script>
        function clearSession() {
            sessionStorage.clear();
            console.log('cleared session storage');
            var url = window.location.href;
            url = url.substr(0, url.indexOf('O')+1);    // domain/taft2GO/
            console.log(url);
            window.location.href = url + '/Logout';
        }

    </script>
    <div class="fb-customerchat"
         page_id="540456353037708"
         minimized="false">
    </div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId            : '912333495590130',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v2.11'
            });
        };
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>