<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Snacks | The FUN Place</title>
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
        
        <!-- Snack Nutrition Modal -->
        <div class="modal fade" id="nutritionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="snackModalTitle">*INSERT NAME*</h4>
                    </div>
                    <!-- Nutrition Modal Body (The label) --> 
                    <div class="modal-body nutrition-label" style="overflow: hidden;">
                        <h4>Nutrition Facts</h4>
                        <h5 id="serving-size">Serving Size: 1 cup</h5>
                        <h5 id="servings-container">Servings Per Container: 2</h5>
                        <div style="width: 100%; background-color: #000; height: 20px; margin-top: 10px; margin-bottom: 10px;"></div>
                        <h5>Amount Per Serving</h5>
                        <hr style="color: 000;">
                        <b>Calories </b><p id="num-calories" style="display: inline-block;">280</p><p id="cal-fat" style="float: right; display: inline-block;">Calories from Fat 40</p>
                        <div style="width: 100%; background-color: #000; height: 10px; margin-top: 10px; margin-bottom: 10px;"></div>
                        <b>TOTAL FAT </b><p id="num-fat" style="display: inline-block;">2g</p>
                        <hr>
                        <b>Cholesterol </b><p id="num-cholesterol" style="display: inline-block;">0g</p>
                        <hr>
                        <b>Sodium </b><p id="num-sodium" style="display: inline-block;">0g</p>
                        <hr>
                        <b>Total Carbohydrates </b><p id="num-carbs" style="display: inline-block;">20g</p>
                        <hr>
                        <b>Protein </b><p id="num-protein" style="display: inline-block;">0g</p>
                        <div style="width: 100%; background-color: #000; height: 20px; margin-top: 10px; margin-bottom: 10px;"></div>
                        <p style="font-size: 13px;">*Percent Daily Values are based on a 2,000 calorie diet. Your daily values may be higher or lower depending on your calorie needs.</p>
                    </div>
                    <!-- End of Nutrition Modal Body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default close-btn" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Snack Nutrition Modal -->
        
        <!-- Start of Snacks Body -->
        <div id="snacks-body">
            <div id="snacks-header">
                <div class="snacks-h-text">
                    <h1><b>Snacks</b></h1>
                    <p>The FUN Place knows healthy food is best food and has a wide array of nutritional items to help boost your energy!</p>
                </div>
            </div>
        </div>
        
        <!-- Start of Snack Items -->
        <div id="snacks-container">
            <div class="snack">
                <img src="img/snacks/smoothies.png">
                <h2>SMOOTHIES</h2>
                <div class="snack-types">
                    <p class="snk-type-title">Types</p><p>#banana-nut</p><p>#strawberry</p><p>#mango-licious</p>
                </div>
                <div class="snack-div">
                    <p class="snk-text">Our ice cold smoothies are a great way for you to refresh and get some healthy fruit in your system. Choose between our awesome flavors!</p>
                    <div class="snack-description-block">
                        <div class="snack-nums">
                            <div class="snack-description">
                                <b>CALORIES </b>
                                <p class="snack-text-value">376</p>
                            </div>
                            <div class="snack-description">
                                <b>PRICE </b>
                                <p class="snack-text-value">$3.99</p>
                            </div>
                        </div>
                        <div class="snk-learnmore smoothie-modal">
                            LEARN MORE
                        </div>
                    </div>
                </div>
            </div>
            <div class="snack">
                <img src="img/snacks/pizza.png">
                <h2>PIZZA</h2>
                <div class="snack-types">
                    <p class="snk-type-title">Types</p><p>#protein-meat</p><p>#veggie-madness</p>
                </div>
                <div class="snack-div">
                    <p class="snk-text">Who doesn't love pizza? Here at theFun, we specialize in making healthy pizza slices filled with protein, nutrients, and vitamins. Stay healthy!</p>
                    <div class="snack-description-block">
                        <div class="snack-nums">
                            <div class="snack-description">
                                <b>CALORIES </b>
                                <p class="snack-text-value">220</p>
                            </div>
                            <div class="snack-description">
                                <b>PRICE </b>
                                <p class="snack-text-value">$2.49</p>
                            </div>
                        </div>
                        <div class="snk-learnmore pizza-modal">
                            LEARN MORE
                        </div>
                    </div>
                </div>
            </div>
            <div class="snack">
                <img src="img/snacks/pasta.png">
                <h2>PASTA</h2>
                <div class="snack-types">
                    <p class="snk-type-title">Types</p><p>#fettucini-alfredo</p><p>#chicken-alfredo</p>
                </div>
                <div class="snack-div">
                    <p class="snk-text">We all know after a great day of spending lots of energy the first thing you should get are some carbohydrates. Why not refill on a tasty bowl of pasta?</p>
                    <div class="snack-description-block">
                        <div class="snack-nums">
                            <div class="snack-description">
                                <b>CALORIES </b>
                                <p class="snack-text-value">415</p>
                            </div>
                            <div class="snack-description">
                                <b>PRICE </b>
                                <p class="snack-text-value">$6.49</p>
                            </div>
                        </div>
                        <div class="snk-learnmore pasta-modal">
                            LEARN MORE
                        </div>
                    </div>
                </div>
            </div>
            <div class="snack">
                <img src="img/snacks/kabobs.png">
                <h2>KABOBS</h2>
                <div class="snack-types">
                    <p class="snk-type-title">Types</p><p>#mediterranean</p><p>#fruit</p>
                </div>
                <div class="snack-div">
                    <p class="snk-text">Food on sticks are just so much fun we had to get them available here. Get some healthy fruit kabobs or some protein-loaded meat sticks.</p>
                    <div class="snack-description-block">
                        <div class="snack-nums">
                            <div class="snack-description">
                                <b>CALORIES </b>
                                <p class="snack-text-value">220</p>
                            </div>
                            <div class="snack-description">
                                <b>PRICE </b>
                                <p class="snack-text-value">$2.75</p>
                            </div>
                        </div>
                        <div class="snk-learnmore kabob-modal">
                            LEARN MORE
                        </div>
                    </div>
                </div>
            </div>
            <div class="snack">
                <img src="img/snacks/sandwhiches.png">
                <h2>SANDWICHES</h2>
                <div class="snack-types">
                    <p class="snk-type-title">Types</p><p>#chicken</p><p>#swiss mushroom</p>
                </div>
                <div class="snack-div">
                    <p class="snk-text">Try some great sandwhiches. Our swiss mushroom is famous for it's melty, warm, cheesy bite. Our chicken sandwich brings back the great southern feel. Try one today!</p>
                    <div class="snack-description-block">
                        <div class="snack-nums">
                            <div class="snack-description">
                                <b>CALORIES </b>
                                <p class="snack-text-value">269</p>
                            </div>
                            <div class="snack-description">
                                <b>PRICE </b>
                                <p class="snack-text-value">$3.99</p>
                            </div>
                        </div>
                        <div class="snk-learnmore sandwhich-modal">
                            LEARN MORE
                        </div>
                    </div>
                </div>
            </div>
            <div class="snack" id="bottom-snack">
                <img src="img/snacks/ice-cream.png">
                <h2>ICE CREAM</h2>
                <div class="snack-types">
                    <p class="snk-type-title">Types</p><p>#sundaes</p><p>#cake</p>
                </div>
                <div class="snack-div">
                    <p class="snk-text">Wanna add some more fun to your day? Get some ice cream! Whether it's your birthday and you need a cake or you're just relaxing and need a sundae, get some of our low-fat nutrient ice cream.</p>
                    <div class="snack-description-block">
                        <div class="snack-nums">
                            <div class="snack-description">
                                <b>CALORIES </b>
                                <p class="snack-text-value">267</p>
                            </div>
                            <div class="snack-description">
                                <b>PRICE </b>
                                <p class="snack-text-value">$2.49</p>
                            </div>
                        </div>
                        <div class="snk-learnmore icecream-modal">
                            LEARN MORE
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- End of Snack Items -->
        <!-- End of Snacks Body -->
        
        <script type="text/javascript">
            
            $(document).ready(function() {
                $(".smoothie-modal").click(function() {
                     $("#snackModalTitle").text("Smoothie");
                     $("#serving-size").text("Serving Size: 20 oz");
                     $("#servings-container").text("Servings Per Container: 1");
                     $("#num-calories").text("376");
                     $("#cal-fat").text("Calories from Fat 0");
                     $("#num-protein").text("4g");
                     $("#num-fat").text("0g");
                     $("#num-carbs").text("90g");
                     $("#num-cholesterol").text("6mg");
                     $("#num-sodium").text("131mg");
                    
                     $("#nutritionModal").modal("show"); 
                });
                
                $(".pizza-modal").click(function() {
                     $("#snackModalTitle").text("Pizza");
                     $("#serving-size").text("Serving Size: 1 Slice");
                     $("#servings-container").text("Servings Per Container: 1");
                     $("#num-calories").text("265");
                     $("#cal-fat").text("Calories from Fat 109");
                     $("#num-protein").text("10.64g");
                     $("#num-fat").text("12.14g");
                     $("#num-carbs").text("27.68g");
                     $("#num-cholesterol").text("21mg");
                     $("#num-sodium").text("610mg");
                    
                     $("#nutritionModal").modal("show"); 
                });
                
                $(".pasta-modal").click(function() {
                     $("#snackModalTitle").text("Pasta");
                     $("#serving-size").text("Serving Size: 1 Cup");
                     $("#servings-container").text("Servings Per Container: 2");
                     $("#num-calories").text("415");
                     $("#cal-fat").text("Calories from Fat 115");
                     $("#num-protein").text("16.27g");
                     $("#num-fat").text("17.18g");
                     $("#num-carbs").text("48.19g");
                     $("#num-cholesterol").text("32mg");
                     $("#num-sodium").text("334mg");
                    
                     $("#nutritionModal").modal("show"); 
                });
                
                $(".kabob-modal").click(function() {
                     $("#snackModalTitle").text("Kabob");
                     $("#serving-size").text("Serving Size: (226g)");
                     $("#servings-container").text("Servings Per Container: 1");
                     $("#num-calories").text("220");
                     $("#cal-fat").text("Calories from Fat 22.5");
                     $("#num-protein").text("15.39g");
                     $("#num-fat").text("2.5g");
                     $("#num-carbs").text("8g");
                     $("#num-cholesterol").text("95mg");
                     $("#num-sodium").text("1180mg");
                    
                     $("#nutritionModal").modal("show"); 
                });
                
                $(".sandwhich-modal").click(function() {
                     $("#snackModalTitle").text("Sandwich");
                     $("#serving-size").text("Serving Size: (130g)");
                     $("#servings-container").text("Servings Per Container: 1");
                     $("#num-calories").text("269");
                     $("#cal-fat").text("Calories from Fat 153");
                     $("#num-protein").text("14g");
                     $("#num-fat").text("17g");
                     $("#num-carbs").text("18g");
                     $("#num-cholesterol").text("30mg");
                     $("#num-sodium").text("589mg");
                    
                     $("#nutritionModal").modal("show"); 
                });
                
                $(".icecream-modal").click(function() {
                     $("#snackModalTitle").text("Ice Cream");
                     $("#serving-size").text("Serving Size: 1 Cup");
                     $("#servings-container").text("Servings Per Container: 2");
                     $("#num-calories").text("267");
                     $("#cal-fat").text("Calories from Fat 128");
                     $("#num-protein").text("4.68g");
                     $("#num-fat").text("14.26g");
                     $("#num-carbs").text("32.45g");
                     $("#num-cholesterol").text("53mg");
                     $("#num-sodium").text("98mg");
                    
                     $("#nutritionModal").modal("show"); 
                });
            });
        </script>
        
        <?php include("inc/footer.php"); ?>
        
        <script src="js/custom.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    </body>
</html>