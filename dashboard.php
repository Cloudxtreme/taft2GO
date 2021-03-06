<!DOCTYPE html>
<?php require_once 'ti.php' ?>
<?php
if(!isset($_SESSION))
{
    session_start();
}
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isAdmin'] == 1)
    header("Location: http://".$_SERVER['HTTP_HOST'].  "/taft2GO/Logout");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css"> </head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<!-- Data Table Libs  -->
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.0/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.0/js/responsive.bootstrap4.min.js"></script>

<?php startblock('imports') ?>
<?php endblock() ?>

<body>
    <?php startblock('navbar') ?>
      <nav class="navbar navbar-expand-md navbar-dark bg-light m-0 style">
            <a href="/taft2GO/Homepage">
                <img src="T2G Logo.png" width="" height="50" class="d-inline-block align-top m-0" alt="">
            </a>
          <!--
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
            <ul class="navbar-nav"></ul>
          </div>-->


        <!--<a href="login.html">-->
          <div class="w3-dropdown-hover">
                <img src="https://poorishaadi.com/user-icon-png-pnglogocom.png" width="" height="50"
               class="d-inline-block align-top m-0" alt="">
              <div class="w3-dropdown-content w3-card-4">
                  <!--<img src="img_london.jpg" alt="London" style="width:100%">-->
                  <div class="w3-container">
                      <p></p>
                      <p><?php echo " ". $_SESSION['fname'] ." ". $_SESSION['lname'];?></p>
                      <!--<a href="#" class="w3-bar-item w3-button">Profile</a>-->
                      <a class="btn navbar-btn ml-2 btn-light text-primary baloo" href="Stays">Stays</a>
                      <a class="btn navbar-btn ml-2 btn-light text-primary baloo" href="/taft2GO/Listings">Listings</a>
                      <a href="/taft2GO/Logout" class="w3-bar-item w3-button">Logout</a>
                  </div>
              </div>
              <div class="w3-dropdown-content w3-bar-block w3-border">
                    <!--
                  <a href="#" class="w3-bar-item w3-button">Profile</a>
                  <a href="/taft2GO/Logout" class="w3-bar-item w3-button">Logout</a>
                  <!--<a href="#" class="w3-bar-item w3-button">Link 3</a>-->
              </div>
          </div><!-- dropdown logout -->

        <!--</a>-->
          <!--<a class="btn navbar-btn ml-2 btn-light text-primary body baloo" href="addlisting.html">Host
              <br> </a>-->

          <!--<a class="btn navbar-btn ml-2 btn-light text-primary baloo" href="/taft2GO/Help">Help</a>-->

          <input class="form-control mr-sm-2 baloo" type="text" placeholder="Find the right place...">
          <a href="Search" class="btn btn-outline-primary baloo">Search</a>
      </nav>

      <nav class="navbar navbar-expand-md bg-primary navbar-dark">

        <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">

            <?php startblock('dashboardlink') ?><!--
          <a class="btn navbar-btn ml-2 btn-link baloo text-secondary" href="/taft2GO/Dashboard">Dashboard
            <br> </a><?php endblock() ?>
          <!--<a class="btn navbar-btn ml-2 text-white btn-link baloo" href="inbox.php">Inbox
            <br> </a>-->
            <?php startblock('listingslink') ?>
          <a class="btn navbar-btn ml-2 btn-link baloo text-white" href="/taft2GO/Listings">Listings
            <br> </a><?php endblock() ?>
            <?php startblock('stayslink') ?>
          <a class="btn navbar-btn ml-2 text-white btn-link baloo" href="/taft2GO/Stays">Stays
            <br> </a><?php endblock() ?>
            <?php startblock('profilelink') ?><!--
          <a class="btn navbar-btn ml-2 text-white btn-link baloo" href="/taft2GO/Profile">Profile
            <br> </a><?php endblock() ?>
            <?php startblock('accountlink') ?>
          <a class="btn navbar-btn ml-2 text-white btn-link baloo" href="/taft2GO/Account">Account </a>
            <?php endblock() ?>-->
        </div>
        <div class="container">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        </div>
      </nav>
    <?php endblock() ?>

    <?php startblock('content') ?>
        <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
            <h4 class="alert-heading">Welcome to taft2GO!</h4>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            <a class="btn btn-primary baloo" href="">Get started
              <br> </a>
          </div>
          <div class="card">
            <div class="card-header"> Listings in progress</div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4">
                  <img class="img-fluid d-block" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg"> </div>
                <div class="col-md-8">
                  <h4>Manila Residence Room 1408</h4>
                  <h6 class="text-muted">Last updated on October 5, 2017</h6>
                  <p class=" p-y-1">You are 50% done with your listing</p>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                  </div>
                  <p class=" p-y-1">&nbsp;</p>
                  <a class="btn btn-primary baloo" href="addlisting.html">Get started
                    <br> </a>
                  <a href="room-page.html" class="btn btn-outline-primary baloo">Preview</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
            <a href="#" class="text-white">About us</a>
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

</body>

</html>