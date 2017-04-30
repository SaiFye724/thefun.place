<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home | The FUN Place</title>
        <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
         
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom.css?v=1">
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display:700i|Raleway:300" rel="stylesheet">
        <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous"></script>
        <script src="js/custom.js"></script>
    </head>
    <body>
        <?php include("inc/sidenav.php"); ?>
        <?php include("inc/nav.php"); ?>
        
        <!-- Banner and Text -->
        <div id="header-window">
            <div class="header-wrapper">
                <div class="header-text">
                    <h1><b>Have <i>Fun</i>, Stay <i>Happy</i></b></h1>
                    <p class="caption-text">The FUN Place is THE one stop spot for a great time by staying happy, healthy, and having fun!</p>
                </div>
                <a class="about-arrow" href="#about"><div class="arrow bounce"></div></a>
            </div>
        </div>
        <!-- End of Banner & Text -->
        
        <!-- About Window Start -->
        <a class="about-page-link" name="about">
        </a>
        <div id="about-window">
        <div class="about-content">
            <h1><b>About</b></h1>
            <div class="about-information">
                <p>FUN is our company's acronym: Fun Unifying the Nation with our activities and snacks. With this purpose in mind, we guarantee incredible experiences playing sports, arcade games, or eating fun snacks.</p>
            </div>
        </div>
        <img  id="about-img-a" src="img/about-illustration.png">
        </div>
        <!-- About Window End -->
            
        <!-- Features Window Start -->
        <div id="features-window">
            <div class="feature" id="feature-01">
                <img src="img/activities.png">
                <h1>ACTIVITIES</h1>
                <p>The FUN Place offers a variety of activities for all families. We have arcade games, basketball courts, tracks. Our arcade features almost 100 machines. Our basketball courts can carry 4 games at a time. Our activities can hold 300+ people.</p>
                <a href="activities.html" style="text-decoration:none"><div class="feature-CTA CTA-activities">SEE ALL ACTIVTIES</div></a>
            </div>
            <div class="feature" id="feature-02">
                <img src="img/snacks.png">
                <h1>SNACKS</h1>
                <p>The FUN Place knows healthy food is best food and has a wide array of nutritional items to help boost your energy! We constantly update the menu and make sure there's something for everybody.</p>
                <a href="snacks.html" style="text-decoration:none"><div class="feature-CTA CTA-snacks">SEE ALL SNACKS</div></a>
            </div>
            <div class="feature" id="feature-03">
                <img src="img/events.png">
                <h1>EVENTS</h1>
                <p>At The FUN Place, there are events every day to keep our communities engaged and active. From basketball tournaments to dance competitions, there are always events to participate in. When there isn't, host your own at The FUN Place!</p>
                <a href="calendar.html" style="text-decoration:none"><div class="feature-CTA CTA-events">SEE ALL EVENTS</div></a>
            </div>
        </div>
        <!-- Features Window End -->
        
        <!-- Start of Events Window -->
        <div id="events-window">
            <h1><b>Events</b></h1>
            <div id="main-event">
                <h1><b>Fourth of July</b></h1>
                <p>Come join us and celebrate with Fireworks!</p>
                <p id="main-event-date">JUL 4</p>
            </div>
            <div class="event-wrapper">
                <div id="event-01">
                    <div class="calendar-div">
                        <h3>AUG</h3>
                        <p class="calendar-num">9</p>
                    </div>
                        <h4><b>BACK TO SCHOOL</b></h4>
                        <p class="event-info">Come play arcade games with us again before school starts!</p>
                </div>
                <div id="event-02">
                    <div class="calendar-div">
                        <h3>AUG</h3>
                        <p class="calendar-num">12</p>
                    </div>
                    <div class="calendar-text">
                        <h4><b>BOWLING BRACKET</b></h4>
                        <p class="event-info">Come show us what you've got and knock down some pins!</p>
                    </div>
                </div>
            </div>
            <a href="calendar.html"><div class="CTA-fullcalendar">SEE FULL CALENDAR</div></a>
        </div>
        <!-- End of Events Window -->
        
        <!-- Call to Action Block for Booking Party -->
        <div id="CTA-bookaparty">
            <p id="CTA-text">Interested in hosting your next party or event at The FUN Place?</p>
            <a href="packages.php"><div class="CTA CTA-bookparty">
                BOOK A PARTY
            </div></a>
        </div>
        <!-- End of CTA -->
        <?php include("inc/footer.php"); ?>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    </body>
</html>