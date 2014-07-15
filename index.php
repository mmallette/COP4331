<?php
    
?>
 <!DOCTYPE html>


<html lang="en">
  <head>
    <title>Florida Fishing</title>
    <link href="css/style.css" rel="stylesheet">
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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="spots.html">Spots</a></li>
                <li><a href="alvaro.html">Fish Id</a></li>
                <li><a href="kevin.html">Jokes</a></li>
                <li><a href="ibrahim.html">Solunar Activity</a></li>
                <li><a href="tide.html">Tides</a></li>
                <li><a href="blog.php">Blog</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
                <li><a href="joinMember.php">Become a Member</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Sliding Pictures at top of page ================================================== -->
    <div id = "container">
        <div id = 'slide1'>
            <h1>Visit the Research page for all your fishing information</h1>
        </div>    
        <div id = 'slide2'>
            <h1>Visit the tides page to know when you should fish</h1>
        </div>    
        <div id = 'slide3'>
            <h1>Brag about your catch on our blog!</h1>
        </div> 
    </div> 
    
    <!-- These are the breaks for each page link
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <hr class="featurette-divider">

      <!-- fishing spots and weather -->
      
      <div class="row featurette">
        <div class="col-md-5">
          <a href="spots.html"><img style="border:0;" class="featurette-image img-responsive" src="css/img/spots.png"></a>
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading"><a href="spots.html" style="text-decoration: none">Fishing Spots</a> <span class="text-muted"> and Weather</span></h2>
          <p class="lead">Grab your gear, we're going fishing. Fishing spots, weather, swag, oh my! Well help you find where to go, what you need, and where to buy it! Type in your city we can find you local charters, fishing holes, bait shops, and sporting goods stores. Well also find your local weather and help give you a few suggestions on things to remember for your tackle box! </p>
        </div>
      </div>

      <hr class="featurette-divider">
      
      <!-- First Page -->

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><a href="alvaro.html" style="text-decoration: none">Fishing Research</a> <span class="text-muted">for all your fishing knowledge</span></h2>
          <p class="lead">Before you go out and fish, shouldn't you know what you want to get? Well look no further! Visit the research page to answer all your Florida fishing questions.</p>
        </div>
        <div class="col-md-5">
          <a href="alvaro.html"><img style="border:0;" class="featurette-image img-responsive" src="http://flyanglersonline.com/travel/florida2004/floridapagetop.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- 2nd Page -->
      
      <div class="row featurette">
        <div class="col-md-5">
          <a href="kevin.html"><img style="border:0;" class="featurette-image img-responsive" src="css/img/funny-fish.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading"><a href="kevin.html" style="text-decoration: none">Jokes</a> <span class="text-muted"> of the fishing kind.</span></h2>
          <p class="lead">We have so many jokes! Tiny fish jokes, big fish jokes, jokes that in season, jokes that are out of season, and so many more!</p>
        </div>
      </div>

      <hr class="featurette-divider">
      
      <!-- Tides -->
      
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><a href="ibrahim.html" style="text-decoration: none">Tides</a> <span class="text-muted">,plan for them</span></h2>
          <p class="lead">Did you know that fish are active depending on the tides? Some fish like to come out at night, while others like the day. Some like low tides while others high tide. Be prepared! Look up when the fish are out so you don't get stuck catching nothing!</p>
        </div>
        <div class="col-md-5">
            <a href="ibrahim.html"><img style="border:0;" class="featurette-image img-responsive" src="http://cdn.twitrcovers.com/wp-content/uploads/2013/08/Sun-Moon-Skies-l.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- Blog -->
      
      <div class="row featurette">
        <div class="col-md-5">
          <a href="blog.html"><img style="border:0;" class="featurette-image img-responsive" src="css/img/SpeakFish.png" alt="Generic placeholder image"></a>
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading"><a href="blog.html" style="text-decoration: none">Blog</a> <span class="text-muted"> Post and Catch</span></h2>
          <p class="lead">Theres plenty of fish in the sea, show all your fishing friends that you got the biggest catch! Share techniques, ask questions, and share spots (except for that secrete one).</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Florida Fishing, Inc. &middot; <a href="terms.html">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/slide.js"></script>
  </body>
</html>
