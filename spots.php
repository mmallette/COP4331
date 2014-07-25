<?php
    include_once 'dbconnect.php';   
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
    include_once 'functions.php';
    sec_session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Florida Fishing</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/spots.css" rel="stylesheet">
  </head>
  
<!-- NAVBAR ================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="index.php">Fishing Florida</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="spots.php">Spots</a></li>
                <li><a href="alvaro.php">Fish Id</a></li>
                <li><a href="kevin.php">Jokes</a></li>
                <li><a href="ibrahim.php">Solunar Activity</a></li>
                <li><a href="tide.php">Tides</a></li>
                <li><a href="blog.php">Blog</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <?php if (login_check($mysqli) == true) : ?>
                <li><a href="logout.php">Logout</a></li>
                <?php else : ?>
                <li><a href="login.php">Login</a></li>
                <?php endif; ?>
                <li><a href="joinMember.php">Become a Member</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Main Page Content
    ================================================== -->

    <div class="container marketing">

      
    <!-- API box ================================================== -->
    <!-- right now its just a map hopefully one day it can be something cooler -->
    <div id = "mapAndWeather">

        <h1>Where in Florida will you be fishing?</h1><br>

        <div id="local">
          <input id="address" type="textbox" value="Orlando">
          <input id="button" type="button" value="Go Fish" onclick="codeAddress()">
        </div>

        <div id="googleMap" style="width:1000px; height:500px;"></div>
        <br>
    </div>
    
    <!-- end API box -->
    
    <hr class="featurette-divider">
    
    
    <div>
        <div id = 'weatherBox'>
          <div id = 'heading'></div>
          <div id = 'containment'>
            <div id = 'radar' class = 'bigBlock'></div>
            <div class = 'bigBlock'>
              <h2>Current Conditions</h2>
              <div class = 'current'>
                  <div class = 'block conditions'></div>
                  <div class = 'block temp'></div>
                  <div class = 'block wind'></div>
              </div>
              <div class = 'current'>
                  <div class = 'block visibility'></div>
                  <div class = 'block humidity'></div>
                  <div class = 'block UV'></div>
              </div>
            </div>
          </div>
        </div>
      <div id = 'nowcast'></div> 
    </div>
  

    <hr class="featurette-divider">

      <!-- Special Precations -->


      <div class = "precautions">
        <h1>Tips for Your Tackle Box!</h1>
        <br>
        <br>
        <div class="row">
          <div class="col-md-4">
            <button type="button" class = "sunscreen inActivePrecaution popover-dismiss" data-toggle="popover" title="Don't Forget Sunscreen!" data-content="The UV index is 6 or over. This means you are at a high risk of overexposure to UV radiation! Overexposure to the sun can happen in just a few hours. A bad reaction includes tenderness, pain, swelling, and blistering, and may include fever, chills, and nausea. While there is no cure for sunburn, wet compresses, cool tub baths, and soothing lotions may help. If you have a bad burn, see your dermatologist. Fishing Tip: fishing is more fun when your not sunburned, wear your sunscreen!" data-placement = "top">
            </button>
          </div>
          <div class="col-md-4">
            <button type="button" class="hydrate inActivePrecaution popover-dismiss" data-toggle="popover" title="Drink Plenty of Water" data-content="Its hot out there, make sure to stay hydrated! Severe dehydration can cause: extreme thirst, extreme fussiness or sleepiness in infants and children, irritability and confusion in adults, very dry mouth, skin and mucous membranes, and sunken eyes. If somebody is experiancing dehydration... Take the person to a cool, shady place to lie down and rest. Remove excess clothing and sports equipment. Put cool, wet cloths on his skin, and/or spray with a mist-water spray bottle. Fan the skin. Encourage him to drink plenty of liquids. Sports drinks can help replace fluids and salts. Fishing Tip: if its this hot for you at the surface of the water its also this hot for fish, try using swimming lures, spoons, weights, or bombers until the water cools off a little bit. Also, underneith structures and shade will be full of fish just hanging out!" data-placement = "top">
            </button>
          </div>
          <div class="col-md-4">
            <button type="button"  class="breezy inActivePrecaution popover-dismiss" data-toggle="popover" title="Don't Forget Your Raincoat" data-content="Florida storms can hit hard and hit fast so its best to be prepaired. Florida storms can bring heavy winds, heavy rain and a lot of lightning. If the conditions are dangerous (any ammount of nearby lightning is dangerous), seek cover the fish will still be there tomorrow. If the conditions aren't dangerous make sure to wear the proper clothing that can keep you dry (don't forget your feet!), hypothermia is still a danger in Florida when a person is wet. Only if it is safe to go outside and you have the proper clothing should you fishs in this sort of weather. Fishing Tip: durring the rain is when fish become more aggressive to protective and tend to bite first ask questions later. Darker color lures tend to work well, fish in shallower waters than you would on a clear day. If the rain is very light try topwaters under the right conditions a frog, popping plug, or walking-the-dog style will bring in the biggest catches!" data-placement = "top">
            </button>
          </div>
        </div>
      </div>

      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Florida Fishing, Inc. &middot; <a href="terms.php">Terms</a></p>
      </footer>

    </div><!-- /.container -->
        


    </div><!-- /.container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places,visualization&v=3.exp"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true_or_false&v=3.16"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
    <script src="js/weather.js"></script>
    <script src="js/map.js"></script>
  </body>
</html>
