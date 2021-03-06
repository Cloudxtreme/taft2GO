<?php include 'base.php' ?>

    <?php startblock('style')?>
    <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>
    <link rel="import" href="bower_components/vaadin-date-picker/vaadin-date-picker.html">

    <link rel="stylesheet" href="/taft2GO/style.css" type="text/css">
    <link rel="import" href="my-carousel.html">
    <link rel="import" href="my-description.html">
    <link rel="import" href="bower_components/paper-button/paper-button.html">
    <link rel="import" href="bower_components/paper-input/paper-input.html">
    <link rel="import" href="bower_components/paper-dropdown-menu/paper-dropdown-menu.html">
    <link rel="import" href="bower_components/paper-item/paper-item.html">
    <link rel="import" href="bower_components/paper-listbox/paper-listbox.html">


    <script src="https://cdn.vaadin.com/vaadin-elements/master/mock-http-request/lib/mock.js"></script>
    <link rel="import" href="bower_components/vaadin-upload/vaadin-upload.html">
    <style>

        my-carousel {
            width: 100%;
        }

        my-carousel::after {
            display: block;
            content: '';
            padding-top: 40%; /* 4:3 = height is 75% of width */
        }

        my-carousel img {
            position: absolute;
            width: 100%;
            height: 300px;
        }

        paper-button.primary {
            color: #fff;
            background: limegreen;/*var(--primary-color);*/
        }
        paper-dropdown-menu, paper-listbox {
            width: 200px;
        }
        paper-dropdown-menu {
            height: 70px;
            margin: auto;
            margin-left: 0;
            display: block;
        }

    </style>
    <?php endblock()?>


<?php startblock('searchbar') ?>
    <input class="form-control mr-sm-2 baloo" type="text" placeholder="Find the right place...">
    <a href="/taft2GO/Search" class="btn btn-outline-primary baloo">Search</a>
<?php endblock() ?>

<?php startblock('logo') ?><img src="/taft2GO/T2G Logo.png" width="" height="50" class="d-inline-block align-top m-0" alt=""><?php endblock()?>



<?php startblock('content')?>

<div id="changeable">

    <my-carousel id="images">
        <img data-src="images/coverphoto.jpg">
        <img data-src="images/home%201.png">
        <img data-src="images/home%202.png">
        <img data-src="images/home%203.png">
        <img data-src="images/manres.jpg">
    </my-carousel>

    <div class="py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">

                <h2 id="title" class="text-primary"></h2>
                <div id="verified"></div>
                <div id="host"></div>

                <p id="aveRating"></p><br>
                <p id="type"></p>
                <p id="capacity"></p>
                <p id="monthlyRate"></p>
                <p id="rules"></p>
                <p id="beds"></p>
                <p id="bathrooms"></p>
                <p id="monthlyRate"></p>
                <p id="amenities"></p>

                <hr>
                <p id="description" class=""></p>

            </div>

            <div class="col-md-6">
                <div class="card">
                    <div id="dailyRate" class="card-header bg-primary text-white"> From&nbsp;₱1,185 per night&nbsp;</div>
                    <div class="card-body">
                        <div class="card-body p-5">
                            <h3 class="pb-3">Make a reservation</h3>
                            <form id="bookingForm">
                                <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
                                <!--
                                <div class="form-group"> <label>Check in</label>
                                    <input id="checkin" type="date" class="form-control" required> </div>
                                <div class="form-group"> <label>Check out</label>
                                    <input id="checkout" type="date" class="form-control" required> </div>
                                -->

                                <vaadin-date-picker id="checkin" onchange="alert()" label="Check-in" placeholder="Pick a date">
                                </vaadin-date-picker>

                                <vaadin-date-picker id="checkout" min="checkin.value" onchange="alert()" label="Check-out" placeholder="Pick a date">
                                </vaadin-date-picker>

                                <div class="form-group" id="numOfPeople"> <label>People Staying</label>
                                    <input type="number" class="form-control" min=1 placeholder="2"> </div>

                                <div class="form-group" id="total"></div>

                            </form>
                            <button class="btn btn-primary baloo" onclick="BOOK()">Request to Book</button>
                        </div>
                        <h6 class="text-muted">You won't be charged yet.</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1 class="baloo" style="width: 500px; display: inline">Reviews</h1>
                <!--<a class="btn btn-primary baloo" href="">Add Review</a>-->

            </div>
        </div>
        <div id="disqus_thread"></div>

        <!--    Original Review section
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-primary pt-3 baloo"><i class="fa fa-user fa-fw"></i>Person 1</h2>
                <p class="">October 24, 2017</p>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h2 class="text-primary pt-3 baloo"><i class="fa fa-user fa-fw"></i>Person 2</h2>
                <p class="">October 24, 2017</p>
                <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        -->
    </div>
    </div>
</div> <!-- END OF CHANGEABLE -->
    <script>
        const imgCarousel = document.querySelector('#images');
        setInterval(_ => imgCarousel.next(), 3000);

    </script>
    <script>
        function getURLParameter(name) {
            return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
            /*var url = window.location.href;
            url = url.substr(url.lastIndexOf('s')+2);
            console.log(url);
            return url;*/
        }
        var accountID;
        var listingID = getURLParameter("listingID");
        var checkin = '';
        var checkout = '';
        var days = 0;
        var total = '';
        $(document).ready(function(){

            console.log(listingID);


            var hostfname;
            var profPic;
            var monthlyRate = 0;
            $.ajax({
                type: "GET",
                url: "http://localhost:8080/taft2GO/listing/?filter={'_id': {'$oid': '" + listingID +"'}}",
                dataType: "json",
                success: function(response){
                    // get the object in listing
                    console.log(response._embedded);
                    var title = response._embedded[0].title;
                    var description = response._embedded[0].description;
                    var address = response._embedded[0].address;
                    var type = response._embedded[0].type;
                    var photo = response._embedded[0].photo;
                    var capacity = parseInt(response._embedded[0].capacity);
                    var rules = response._embedded[0].rules;
                    var beds = parseInt(response._embedded[0].beds);
                    var bathrooms = parseFloat(response._embedded[0].bathrooms);
                    var amenities = response._embedded[0].amenities;
                    monthlyRate = parseFloat(response._embedded[0].monthlyRate);
                    var status = response._embedded[0].status;
                    var aveRating = response._embedded[0].aveRating;
                    var verified = response._embedded[0].isVerified;
                    var verifiedPic = "http://www.iconarchive.com/download/i103471/paomedia/small-n-flat/sign-check.ico";
                    accountID = response._embedded[0].accountID;

                    $('#title').html(title);
                    $('#description').html(description);
                    $('#type').html('Listing Type: '+type);
                    $('#capacity').html('Capacity: '+capacity);
                    $('#monthlyRate').html('Monthly Rate: ₱'+monthlyRate);
                    $('#rules').html('House Rules: <br>'+rules);
                    $('#beds').html('No. of beds: '+beds);
                    $('#bathrooms').html('No. of bathrooms: '+bathrooms);
                    $('#aveRating').html('Rating: '+aveRating);
                    $('#amenities').html('Amenities: <br>'+amenities);
                    $('#coverphoto').css("background-image","url("+ photo +")");// TO DO: should be <img>
                    $('#dailyRate').html('<span class="baloo" style="font-size: 36px">₱'+(monthlyRate/30).toFixed(2)+'</span> per night');
                    if(verified == 1){
                        $('#verified').html('<img width="50" src="'+verifiedPic+'"><p>  Verified Place</p>');
                    }
                    /*
                    var numOfPeople = '<label>People Staying</label><br><select id="numPersons">';
                    for(var i = 1; i <= capacity; i++){
                        numOfPeople += '<option value="' + i + '">' + i + ' person(s)</option>';
                    }
                    numOfPeople += '</select>';
                    */
                    var numOfPeople = '<paper-dropdown-menu id="numPersons" label="People staying">' +
                        '<paper-listbox slot="dropdown-content">';
                    for(var i = 1; i <= capacity; i++){
                        numOfPeople += "<paper-item>"+ i +"</paper-item>";
                    }

                    numOfPeople += '</paper-listbox></paper-dropdown-menu>';
                    $('#numOfPeople').html(numOfPeople);


                    // get the host first name and photo
                    (function () {
                        $.ajax({
                            type: "GET",
                            url: "http://localhost:8080/taft2GO/account/?filter={'_id': {'$oid': '" + accountID +"'}}",
                            dataType: "json",
                            success: function(response){
                                console.log(response._embedded);
                                hostfname = response._embedded[0].fname;
                                profPic = 'https://cdn1.iconfinder.com/data/icons/mix-color-4/502/Untitled-1-512.png';
                                sessionStorage.setItem('hostfname', hostfname);
                                sessionStorage.setItem('hostPic', profPic);
                                $('#host').html('<img width="50" src="'+profPic+'"><br><p>Hosted by '+hostfname+'</p>');
                            },
                            error: function(jqXHR, exception){
                                console.log("Error");
                                console.log(jqXHR.responseText);
                            }
                        });
                    })();
                },
                error: function(jqXHR, exception){
                    console.log("Error");
                    console.log(jqXHR.responseText);
                }
            });



            $('#checkin').on("input change", function (e) {
                console.log("Date changed: ", e.target.value);
                checkin = e.target.value;
                console.log("checkin date: "+checkin);

                if(checkin != '' && checkout != '') {
                    console.log('yay not empty for both');
                    showDays(checkout, checkin);
                    total = '<h4><b>Total: ₱'+ (monthlyRate/30*days).toFixed(2)+ '</b></h4> <p>('+ (monthlyRate/30).toFixed(2) +' x '+ days +' days) </p>';
                    $('#total').html(total);
                }

            });
            $('#checkout').on("input change", function (e) {
                console.log("Date changed: ", e.target.value);
                checkout = e.target.value;
                console.log("checkout date: "+checkout);

                if(checkin != '' && checkout != '') {
                    console.log('yay not empty for both');
                    showDays(checkout, checkin);
                    total = '<h4><b>Total: ₱'+ (monthlyRate/30*days).toFixed(2)+ '</b></h4> <p>('+ (monthlyRate/30).toFixed(2) +' x '+ days +' days) </p>';
                    $('#total').html(total);
                }
            });
            function showDays(firstDate,secondDate){

                var startDay = new Date(firstDate);
                var endDay = new Date(secondDate);
                var millisecondsPerDay = 1000 * 60 * 60 * 24;

                var millisBetween = startDay.getTime() - endDay.getTime();
                days = millisBetween / millisecondsPerDay;

                // Round down.
                console.log( Math.floor(days));

            }



            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

            var disqus_config = function () {
                this.page.url = "localhost/taft2GO/room-page.php?listingID=";  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = listingID; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };

            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://taft2go.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        });

        function BOOK() {
            //document.getElementById('bookingForm').submit();
            var checkin = document.getElementById("checkin").value;
            var checkout = document.getElementById("checkout").value;

            if(checkin == '' || checkout == ''){
                total = '<h4><b>Please choose a date range.</b></h4>';
                $('#total').html(total);
            }
            else if(checkin > checkout){
                total = '<h4><b>Check-in date is sooner than checkout date.</b></h4>';
                $('#total').html(total);
            }
           /* else if(document.getElementById('numOfPeople').value == undefined){
                total = '<h4><b>How many people are staying?</b></h4>';
                $('#total').html(total);
            }*/
            else {
                console.log('in set session');
                sessionStorage.setItem('listingID', listingID);
                sessionStorage.setItem('checkin', checkin);
                sessionStorage.setItem('checkout', checkout);
                var numPersons = document.getElementById("numPersons").value;
                //numPersons = numPersons.options[numPersons.selectedIndex].value;
                sessionStorage.setItem('numPersons', numPersons);
                sessionStorage.setItem('total', total);
                var url = window.location.href;
                url = url.substr(0, url.indexOf('O') + 1);
                console.log(url);

                var isLoggedIn = <?php if (!empty($_SESSION['isLoggedIn'])) echo 'true'; else echo 'false';?>;
                console.log(isLoggedIn);

                if (isLoggedIn == true) {

                    if (accountID == "<?php if (isset($_SESSION['objID'])) echo $_SESSION['objID']; else echo '';?>") {
                        alert('You cannot book your own place.');
                        window.location.href = url + '/Listings';
                    }
                    else {
                        var noConflict = true;
                        $.ajax({
                            type: "GET",
                            url: "http://localhost:8080/taft2GO/booking/?filter={'listingID': '" + listingID + "'}",
                            dataType: "json",
                            success: function (response) {
                                console.log('get bookings');
                                console.log(response._embedded);

                                var mgaBookings = response._embedded;
                                var checkin2;
                                var checkout2;
                                for (var k = 0; k < mgaBookings.length; k++) {
                                    checkin1 = new Date(checkin);
                                    checkout1 = new Date(checkout);
                                    checkin2 = new Date(mgaBookings[k].checkIn);
                                    checkout2 = new Date(mgaBookings[k].checkOut);
                                    console.log(checkin2);
                                    if (checkin1 <= checkout2 && checkout1 >= checkin2) {
                                        noConflict = false;
                                    }

                                }
                            },
                            async: false,
                            error: function (jqXHR, exception) {
                                console.log("Error");
                                console.log(jqXHR.responseText);
                            }
                        });
                        if (noConflict) { // no conflict
                            $('#total').html('');
                            window.location.href = url + '/Booking';
                        }
                        else {
                            total = '<h4><b>Sorry, but those dates are unavailable.</b></h4>';
                            $('#total').html(total);
                        }
                    }

                }
                else {
                    var roompageURL = window.location.href;
                    roompageURL = roompageURL.substr(roompageURL.indexOf('O') + 1)
                    console.log(roompageURL);
                    sessionStorage.setItem('roompage', roompageURL);
                    window.location.href = url + '/Login';
                }
            }
        }

        function areDatesAvailable(){

        }

    </script>
    <script id="dsq-count-scr" src="//taft2go.disqus.com/count.js" async></script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

<?php endblock() ?>