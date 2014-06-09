<?php
    
?>
  <!DOCTYPE html>

<html xmlns = "http://www.w3.org/1999/xhtml">

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
              <a class="navbar-brand" href="index.html">Fishing Florida</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="alvaro.html">Alvaro</a></li>
                <li><a href="kevin.html">Kevin</a></li>
                <li><a href="ibrahim.html">Ibrahim</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Sliding Pictures at top of page ================================================== -->
    <div id = "container">
        <div id = 'slide1'>
            <h1>1st Awesome Photo</h1>
        </div> 		
        <div id = 'slide2'>
            <h1>2nd Awesome Photo</h1>
        </div> 		
        <div id = 'slide3'>
            <h1>3rd Awesome Photo</h1>
        </div> 
    </div> 
    
    <!-- These are the breaks for each page link
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <hr class="featurette-divider">
      
      <!-- First Page -->

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><a href="alvaro.html" style="text-decoration: none">Alvaro's page</a> <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">this should be a generic descriptor of whats about to go down for the people that click on this page and the greatness they are about to witness. It should be long enough to clearly state where this will take you but not too long, every one hates reading.</p>
        </div>
        <div class="col-md-5">
          <a href="alvaro.html"><img style="border:0;" class="featurette-image img-responsive" src="http://stockfresh.com/files/a/anatolym/m/18/144240_stock-photo-3d-small-people---fisherman-and-fish.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- 2nd Page -->
      
      <div class="row featurette">
        <div class="col-md-5">
          <a href="kevin.html"><img style="border:0;" class="featurette-image img-responsive" src="http://stockfresh.com/files/a/anatolym/m/18/144240_stock-photo-3d-small-people---fisherman-and-fish.jpg" alt="Generic placeholder image"></a>
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading"><a href="kevin.html" style="text-decoration: none">Kevin's page</a> <span class="text-muted">Oh yeah, it's that good.</span></h2>
          <p class="lead">this should be a generic descriptor of whats about to go down for the people that click on this page and the greatness they are about to witness. It should be long enough to clearly state where this will take you but not too long, every one hates reading.</p>
        </div>
      </div>

      <hr class="featurette-divider">
      
      <!-- Last page -->
      
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><a href="ibrahim.html" style="text-decoration: none">Ibrahim's page</a> <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">this should be a generic descriptor of whats about to go down for the people that click on this page and the greatness they are about to witness. It should be long enough to clearly state where this will take you but not too long, every one hates reading.</p>
        </div>
        <div class="col-md-5">
            <a href="ibrahim.html"><img style="border:0;" class="featurette-image img-responsive" src="http://stockfresh.com/files/a/anatolym/m/18/144240_stock-photo-3d-small-people---fisherman-and-fish.jpg" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
      
      
    <!-- API box ================================================== -->
    <!-- right now its just a map hopefully one day it can be something cooler -->
    
    <div>
        <br>
        <div id = 'weatherBox'></div>
        <br>
    </div>
    
    <hr class="featurette-divider">
        
    <div id = "mapAndWeather">
        <br>
        <h1>Secret Fishing Hole!</h1>
        <div id="googleMap" style="width:500px;height:400px;"></div>
        <br>
    </div>
    
    <!-- end API box -->
    
    <hr class="featurette-divider">


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Florida Fishing, Inc. &middot; <a href="terms.html">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true_or_false&v=3.16"></script>
    <script src="js/slide.js"></script>
    <script src="js/weather.js"></script>
    <script src="js/map.js"></script>
  </body>
</html>

    
