<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Calendar | The FUN Place</title>
        <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
         
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Playfair+Display:700i|Raleway:300" rel="stylesheet">
        <script src="js/custom.js"></script>
        <link rel='stylesheet' href='fullcalendar-3.0.1/fullcalendar.css' />
        <script src='fullcalendar-3.0.1/lib/jquery.min.js'></script>
        <script src='fullcalendar-3.0.1/lib/moment.min.js'></script>
        <script src='fullcalendar-3.0.1/fullcalendar.js'></script>
        <script src="https://cdn.firebase.com/js/client/2.2.3/firebase.js"></script>
        <link rel="stylesheet" href="css/custom.css?v=1.1">
    </head>
    <body>
        
        <?php include("inc/sidenav.php"); ?>
        <?php include("inc/nav.php"); ?>

        <!-- Booking New Event Modal -->
        <div class="modal fade" id="bookingModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">New Booking</h4>
                        </div>
                    <div class="modal-body">
                        <div class="booking-eventname">
                            <h5>Name of Event</h5>
                            <input class="name-input event-bookname" id ="eventName" type="text" placeholder="ex. Bobby's Birthday">
                        </div>
                        <div class="booking-name">
                            <h5>Name</h5>
                            <input class="name-input first-name" type="text" placeholder="first name">
                            <input class="name-input last-name" type="text" placeholder="last name">
                        </div>
                        <div class="booking-party-choice">
                            <h5>Packages</h5>
                            <p class="modal-instructions">Please select one of the following packages.</p>
                            <div class="booking-package">
                                <input type="radio" id="bronze-package" name="package-booking">
                                <label for="bronze-package">Bronze Package</label>
                            </div>
                            <div class="booking-package middle-package">
                                <input type="radio" id="silver-package" name="package-booking">
                                <label for="silver-package">Silver Package</label>
                            </div>
                            <div class="booking-package">
                                <input type="radio" id="gold-package" name="package-booking">
                                <label for="gold-package">Gold Package</label>
                            </div>
                            <p class="modal-packages-link">For a full list of our party packages and information related, please go to <a href="packages.php">this page</a></p>
                        </div>
                        <h5>Date of Event</h5>
                        <input id="book-newdate" type="date" class="booking-date">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default close-btn" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="eventStepTwo();">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Event Description Modal -->
        <div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="eventInfoTitle">*insert event name*</h4>
                    </div>
                    <div class="modal-body">
                        <h4>Date</h4>
                        <p id="event-dateinfo">*insert example date*</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default close-btn" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="container-calendar">
            <div class="book-alert">
                <div>
                    <p id="booking-instructions" style="font-size: 15px;">To book an event, simply click on the date you prefer. Please wait for events to load...</p>
                </div>
                <div id="close-bookalert">
                    <p>&times;</p>
                </div>
            </div>
            <div class="mob-bookparty-btn">Book a date</div>
            <div id='calendar'></div>
        </div>
        
        <?php include("inc/footer.php"); ?>
        
        <!-- Start of Calendar Javascript -->
         <script>
            /* Calls function to load event data from firebase database*/
            $(document).ready( function() {
                secondLoad();
                markEvents();
                
            });
        </script>
        <script src="https://www.gstatic.com/firebasejs/3.6.1/firebase.js"></script>
                    <script>
                        // Initialize Firebase
                        var config = {
                                apiKey: "AIzaSyDB-a9JteOqBVrfw85UWnhZIx4T087OSFY",
                                authDomain: "calendarproject2-22ad5.firebaseapp.com",
                                databaseURL: "https://calendarproject2-22ad5.firebaseio.com",
                                storageBucket: "calendarproject2-22ad5.appspot.com",
                                messagingSenderId: "204276617751"
                                    };
                        firebase.initializeApp(config);
                    </script>
        
        <script type="text/javascript">
            //Array of all dates checked for events
            var dates = ["2016-12-01", "2016-12-02", "2016-12-03", "2016-12-04", "2016-12-05", "2016-12-06", "2016-12-07", "2016-12-08", "2016-12-09", "2016-12-10", "2016-12-11", "2016-12-12", "2016-12-13", "2016-12-14", "2016-12-15", "2016-12-16", "2016-12-17", "2016-12-18", "2016-12-19", "2016-12-20", "2016-12-21", "2016-12-22", "2016-12-23", "2016-12-24", "2016-12-25", "2016-12-26", "2016-12-27", "2016-12-28", "2016-12-29", "2016-12-30", "2016-12-31", "2017-01-01", "2017-01-02", "2017-01-03", "2017-01-04", "2017-01-05", "2017-01-06", "2017-01-07", "2017-01-08", "2017-01-09", "2017-01-10", "2017-01-11", "2017-01-12", "2017-01-13", "2017-01-14", "2017-01-15", "2017-01-16", "2017-01-17", "2017-01-18", "2017-01-19", "2017-01-20", "2017-01-21", "2017-01-22", "2017-01-23", "2017-01-24", "2017-01-25", "2017-01-26", "2017-01-27", "2017-01-28", "2017-01-29", "2017-01-30", "2017-01-31", "2017-02-01", "2017-02-02", "2017-02-03", "2017-02-04", "2017-02-05", "2017-02-06", "2017-02-07", "2017-02-08", "2017-02-09", "2017-02-10", "2017-02-11", "2017-02-12", "2017-02-13", "2017-02-14", "2017-02-15", "2017-02-16", "2017-02-17", "2017-02-18", "2017-02-19", "2017-02-20", "2017-02-21", "2017-02-22", "2017-02-23", "2017-02-24", "2017-02-25", "2017-02-26", "2017-02-27", "2017-02-28", "2017-03-01", "2017-03-02", "2017-03-03", "2017-03-04", "2017-03-05", "2017-03-06", "2017-03-07", "2017-03-08", "2017-03-09", "2017-03-10", "2017-03-11", "2017-03-12", "2017-03-13", "2017-03-14", "2017-03-15", "2017-03-16", "2017-03-17", "2017-03-18", "2017-03-19", "2017-03-20", "2017-03-21", "2017-03-22", "2017-03-23", "2017-03-24", "2017-03-25", "2017-03-26", "2017-03-27", "2017-03-28", "2017-03-29", "2017-03-30", "2017-03-31", "2017-04-01", "2017-04-02", "2017-04-03", "2017-04-04", "2017-04-05", "2017-04-06", "2017-04-07", "2017-04-08", "2017-04-09", "2017-04-10", "2017-04-11", "2017-04-12", "2017-04-13", "2017-04-14", "2017-04-15", "2017-04-16", "2017-04-17", "2017-04-18", "2017-04-19", "2017-04-20", "2017-04-21", "2017-04-22", "2017-04-23", "2017-04-24", "2017-04-25", "2017-04-26", "2017-04-27", "2017-04-28", "2017-04-29", "2017-04-30", "2017-05-01", "2017-05-02", "2017-05-03", "2017-05-04", "2017-05-05", "2017-05-06", "2017-05-07", "2017-05-08", "2017-05-09", "2017-05-10", "2017-05-11", "2017-05-12", "2017-05-13", "2017-05-14", "2017-05-15", "2017-05-16", "2017-05-17", "2017-05-18", "2017-05-19", "2017-05-20", "2017-05-21", "2017-05-22", "2017-05-23", "2017-05-24", "2017-05-25", "2017-05-26", "2017-05-27", "2017-05-28", "2017-05-29", "2017-05-30", "2017-05-31","2017-06-01", "2017-06-02", "2017-06-03", "2017-06-04", "2017-06-05", "2017-06-06", "2017-06-07", "2017-06-08", "2017-06-09", "2017-06-10", "2017-06-11", "2017-06-12", "2017-06-13", "2017-06-14", "2017-06-15", "2017-06-16", "2017-06-17", "2017-06-18", "2017-06-19", "2017-06-20", "2017-06-21", "2017-06-22", "2017-06-23", "2017-06-24", "2017-06-25", "2017-06-26", "2017-06-27", "2017-06-28", "2017-06-29", "2017-06-30", "2017-07-01", "2017-07-02", "2017-07-03", "2017-07-04", "2017-07-05", "2017-07-06", "2017-07-07", "2017-07-08", "2017-07-09", "2017-07-10", "2017-07-11", "2017-07-12", "2017-07-13", "2017-07-14", "2017-07-15", "2017-07-16", "2017-07-17", "2017-07-18", "2017-07-19", "2017-07-20", "2017-07-21", "2017-07-22", "2017-07-23", "2017-07-24", "2017-07-25", "2017-07-26", "2017-07-27", "2017-07-28", "2017-07-29", "2017-07-30", "2017-07-31", "2017-08-01", "2017-08-02", "2017-08-03", "2017-08-04", "2017-08-05", "2017-08-06", "2017-08-07", "2017-08-08", "2017-08-09", "2017-08-10", "2017-08-11", "2017-08-12", "2017-08-13", "2017-08-14", "2017-08-15", "2017-08-16", "2017-08-17", "2017-08-18", "2017-08-19", "2017-08-20", "2017-08-21", "2017-08-22", "2017-08-23", "2017-08-24", "2017-08-25", "2017-08-26", "2017-08-27", "2017-08-28", "2017-08-29", "2017-08-30", "2017-08-31"];
            //Variables 
            var x = 0;
            var eventHeading = "";
            var eventStart = "";
            var eventEnd = "";
            var eventTitles = [];
            //Preset Events
            var eventss = [{
                    title: "Thanksgiving",
                    start: "2016-11-24"
                    },{
                    title: "Jessica's Sweet 16",
                    start: "2016-11-29"      
                           }];
            
            //Initializing attributes of fullcalendar
            $(document).ready(function() {
                // We will refer to $calendar in future code
 
                    var $calendar = $("#calendar").fullCalendar({
                        selectable: true,
                        selectHelper: true,
                        displayEventTime: false,
                        events: eventss,
                        select: function(start, end){
                            x=0;
                            eventStart = start;
                            eventEnd = end;
                            $('#calendar').fullCalendar('clientEvents', function(event){
                                x=1;
                                return true;
                            });
                            if(x==1) {
                                var startOfEvent = start.toISOString().slice(0, 10);
                                $("#bookingModal").modal("show");
                                $("#book-newdate").val(startOfEvent);
                              
                            }
                            
                        $('#calendar').fullCalendar('unselect');
                        },
                        
                        editable: true,
                        eventStartEditable: false,
                        eventClick: function(event){
                            //If a day is clicked booking modal will appear
                            $("#descriptionModal").modal("show");
                            $("#event-dateinfo").text(event.start);
                            $("#eventInfoTitle").text(event.title);
                        
                        },
                        
                        loading: function(bool){
                            $('#loading').toggle(bool);
                        }
                    });
                
                    
                var width = $(window).width();
                    if (width <= 840) {
                        $('#calendar').fullCalendar('changeView', 'listWeek');
                    }
            });
            
            
            //Function to retreive event data from firebase
            function secondLoad(){
                var ref = firebase.database().ref().child("Dates");
                for(i=0; i< dates.length; i++){
                     ref.child(dates[i]).on("value", function(datasnap){
                        eventTitles[i] = datasnap.val();
                    });    
                }
            }
            
            //Function to mark retreived data onto calendar 
            function markEvents(){  
                for(i=0; i< eventTitles.length; i++){
                    if(eventTitles[i] != "nothing") {
                    var loadedEvent = {
                        title: eventTitles[i],
                        start: dates[i],
                        end: dates[i]
                    }
                        $('#calendar').fullCalendar("renderEvent", loadedEvent, true);                             
                    }     
                }
            }
            
            //When submit is clicked, information is passed onto variable from booking modal
            function eventStepTwo(){
                var newName = document.getElementById("eventName").value;
                var newDate = document.getElementById("book-newdate").value;
                var currentDate = $('#calendar').fullCalendar('getDate');
                var curDate = currentDate.toISOString().slice(0, 10);
                eventHeading = newName;
                eventStart = newDate;
                eventEnd = newDate;
                var d1 = Date.parse(newDate);
                var d2 = Date.parse(curDate);
                var substring = "2016";
                //Checks if date is past current date 
                if (d1<d2 || newDate.includes(substring)){
                    alert("Please pick a date not in the past");
                    }else {
                        //Checks to make sure event title is not blank
                        if(eventHeading != "" || eventHeading != null){
                                eventCreated();
                        }else{
                            window.alert("Please enter an event name");
                        }  
                    }
            }
            
            //Information filled out by the user is sent to the firebase database
             function eventCreated(){
                 
                    var nameOfEvent ="";
                    var begin = eventStart;
                    //Retrieves information for selected day
                    var ref = firebase.database().ref().child("Dates");
                     ref.child(begin).on("value", function(datasnap){
                                 nameOfEvent = datasnap.val();
                            });
                    //Checks to make sure nothing is booked on the day selected
                    if(nameOfEvent == "nothing") {
                                ref.child(begin).set(eventHeading);  
                                var event = {
                                          title: eventHeading,
                                          start: eventStart,
                                          end: eventEnd
                                };
                             $('#calendar').fullCalendar("renderEvent", event, true);      

                    } else {
                        window.alert("Our server tells us there is already an event on this day");
                    }
                 
                    $("#bookingModal").modal("hide");
                }
            //Loads events 2 seconds after calendar is loaded to avoid any errors with database
            setTimeout(function() {secondLoad();}, 2000);
            setTimeout(function() {markEvents();}, 2000);
            function editText(){
                $("#booking-instructions").text("To book an event, simply click on the date you prefer.");
            }
            setTimeout(function() {editText();}, 2000);
        </script>
        <script src="js/custom.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    </body>
</html>