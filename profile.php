<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="style.css" type="text/css">
    <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>
    <link rel="import" href="bower_components/paper-date-picker/paper-date-picker.html">
    <link rel="import" href="bower_components/paper-date-picker/paper-date-picker-dialog.html">
</head>


<body>
<paper-date-picker onclick="picker.open()"></paper-date-picker>
<paper-date-picker-dialog id="picker" ></paper-date-picker-dialog>
  <nav class="navbar navbar-expand-md navbar-dark bg-light m-0 style">
    <div class="container">
      <a class="navbar-brand m-0" href="#"></a>
      <img src="T2G Logo.png" width="" height="50" class="d-inline-block align-top m-0" alt="">
      <input class="form-control mr-sm-2 baloo" type="text" placeholder="Find the right place...">
      <a href="search-results.html" class="btn btn-outline-primary baloo">Search</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav"></ul>
      </div>
    </div>
    <a class="btn navbar-btn ml-2 btn-light text-primary body baloo" href="addlisting.html">Host
      <br> </a>
    <a class="btn navbar-btn ml-2 btn-light text-primary baloo" href="stays.html">Stays</a>
    <a class="btn navbar-btn ml-2 btn-light text-primary baloo" href="inbox.html">Messages</a>
    <a class="btn navbar-btn ml-2 btn-light text-primary baloo" href="help.html">Help</a>
    <img src="https://poorishaadi.com/user-icon-png-pnglogocom.png" width="" height="50" class="d-inline-block align-top m-0" alt=""> </nav>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
      <ul class="navbar-nav"></ul>
      <a class="btn navbar-btn ml-2 btn-link baloo text-white" href="dashboard.html">Dashboard
        <br> </a>
      <a class="btn navbar-btn ml-2 text-white btn-link baloo" href="inbox.html">Inbox
        <br> </a>
      <a class="btn navbar-btn ml-2 btn-link baloo text-white" href="listing.html">Listings
        <br> </a>
      <a class="btn navbar-btn ml-2 text-white btn-link baloo" href="stays.html">Stays
        <br> </a>
      <a class="btn navbar-btn ml-2 btn-link baloo text-secondary" href="profile.html">Profile
        <br> </a>
      <a class="btn navbar-btn ml-2 text-white btn-link baloo" href="account.html">Account </a>
    </div>
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 text-secondary">
          <a class="btn navbar-btn ml-2 btn-link baloo ml-auto text-secondary text-left menu">Edit Profile</a>
          <a class="btn navbar-btn ml-2 btn-link baloo text-dark text-left ml-auto menu" href="profile-photo.html">Photos and Videos</a>
          <a class="btn navbar-btn ml-2 btn-link baloo text-dark ml-auto menu text-left" href="profile-trust.html">Trust and Verification</a>
          <a class="btn navbar-btn ml-2 btn-link baloo text-dark ml-auto menu text-left" href="profile-reviews.html">Reviews</a>
          <a class="btn navbar-btn ml-2 btn-link baloo text-dark ml-auto menu text-left" href="profile-references.html">References</a>
          <a class="btn btn-primary baloo" href="view-profile.html">View Profile
            <br> </a>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header"> Required</div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4" style="transition: all 0.25s;">
                  <p class="lead text-right">First Name</p>
                </div>
                <div class="col-md-8" style="transition: all 0.25s;">
                  <input class="form-control mr-sm-2 baloo" type="text" placeholder="First Name"> </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4" style="transition: all 0.25s;">
                  <p class="lead text-right">Last Name</p>
                </div>
                <div class="col-md-8" style="transition: all 0.25s;">
                  <input class="form-control mr-sm-2 baloo" type="text" placeholder="Last Name">
                  <p class="text-secondary">Your public profile only shows your first name. When you request a booking, your host will see your first and last name.</p>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4" style="transition: all 0.25s;">
                  <p class="lead text-right">I am</p>
                </div>
                <div class="col-md-8" style="transition: all 0.25s;">
                  <div class="btn-group">
                    <button class="btn btn-primary dropdown-toggle baloo" data-toggle="dropdown"> Gender</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Female</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Male</a>
                    </div>
                  </div>
                  <p class="text-secondary"> </p>
                  <p class="text-secondary">We use this data for analysis and never share it with other users.</p>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4" style="transition: all 0.25s;">
                  <p class="lead text-right">Birth Date</p>
                </div>
                <div class="col-md-8" style="transition: all 0.25s;">
                  <div class="btn-group baloo">
                    <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"> November</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group baloo">
                    <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"> 3</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                  <div class="btn-group baloo">
                    <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"> 1996</button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                  </div>
                  <p class="text-secondary">The magical day you were dropped from the sky by a stork. We use this data for analysis and never share it with other users.</p>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4" style="transition: all 0.25s;">
                  <p class="lead text-right">Email Address</p>
                </div>
                <div class="col-md-8" style="transition: all 0.25s;">
                  <input class="form-control mr-sm-2 baloo" type="email" placeholder="juan_delaacruz@gmail.com"> </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4" style="transition: all 0.25s;">
                  <p class="lead text-right">Phone Number</p>
                </div>
                <div class="col-md-8" style="transition: all 0.25s;">
                  <p class="">No phone number entered</p>
                  <div class="card">
                    <div class="card-body">
                      <h5 class="text-secondary">Choose a country:</h5>
                      <div class="btn-group baloo">
                        <button class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown"> Philippines</button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                      </div>
                      <h5 class="text-secondary">&nbsp;</h5>
                      <h5 class="text-secondary">Add a phone number:</h5>
                      <input class="form-control mr-sm-2 baloo" type="number" placeholder="+63">
                      <p class=" p-y-1">&nbsp;</p>
                      <a class="btn btn-primary baloo" href="">Verify SMS
                        <br> </a>
                      <a class="btn btn-primary baloo" href="">Verify via Call
                        <br> </a>
                    </div>
                  </div>
                  <p class="p-y-1 text-secondary">&nbsp;This is only shared once you have a confirmed booking with another taft2GO user. This is how we can all get in touch.</p>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4" style="transition: all 0.25s;">
                  <p class="lead text-right">Where You Live</p>
                </div>
                <div class="col-md-8" style="transition: all 0.25s;">
                  <input class="form-control mr-sm-2 baloo" type="text" placeholder="e.g. Quezon City / Pasay City / Makati City"> </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-4" style="transition: all 0.25s;">
                  <p class="lead text-right">Describe Yourself</p>
                </div>
                <div class="col-md-8" style="transition: all 0.25s;"> <textarea rows="4" cols="50"></textarea>
                  <p class="text-secondary">taft2GO is built on relationships. Help other people get to know you.</p>
                  <p class="text-secondary">Tell them about the things you like: What are 5 things you can’t live without? Share your favorite travel destinations, books, movies, shows, music, food.</p>
                  <p class="text-secondary">Tell them what it’s like to have you as a guest or host: What’s your style of traveling? Of taft2GO hosting?</p>
                  <p class="text-secondary">Tell them about you: Do you have a life motto?</p>
                </div>
              </div>
            </div>
          </div>
          <p class="lead">&nbsp;</p>
          <div class="card">
            <div class="card-header"> Optional</div>
            <div class="card-body">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4" style="transition: all 0.25s;">
                    <p class="lead text-right">School</p>
                  </div>
                  <div class="col-md-8" style="transition: all 0.25s;">
                    <input class="form-control mr-sm-2 baloo" type="text" placeholder=""> </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4" style="transition: all 0.25s;">
                    <p class="lead text-right">Work</p>
                  </div>
                  <div class="col-md-8" style="transition: all 0.25s;">
                    <input class="form-control mr-sm-2 baloo" type="text" placeholder="Company name or job title"> </div>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4" style="transition: all 0.25s;">
                    <p class="lead text-right">Emergency Contact</p>
                  </div>
                  <div class="col-md-8" style="transition: all 0.25s;">
                    <p class="text-secondary">Give our Customer Experience team a trusted contact we can alert in an urgent situation.</p>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="text-secondary">Name</h5>
                        <input class="form-control mr-sm-2 baloo" type="text" placeholder="First Name">
                        <h5 class="text-secondary">&nbsp;</h5>
                        <h5 class="text-secondary">Phone</h5>
                        <input class="form-control mr-sm-2 baloo" type="number" placeholder="+63">
                        <h5 class="text-secondary">&nbsp;</h5>
                        <h5 class="text-secondary">Email
                          <br> </h5>
                        <input class="form-control mr-sm-2 baloo" type="email" placeholder="juan_delaacruz@gmail.com">
                        <h5 class="text-secondary">&nbsp;</h5>
                        <h5 class="text-secondary">Relationship</h5>
                        <input class="form-control mr-sm-2 baloo" type="text" placeholder=""> </div>
                    </div>
                    <p class="p-y-1 text-secondary">&nbsp;This is only shared once you have a confirmed booking with another taft2GO user. This is how we can all get in touch.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <h5 class="text-secondary">&nbsp; </h5>
          <a class="btn btn-primary baloo" href="">Save</a>
        </div>
      </div>
    </div>
  </div>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>