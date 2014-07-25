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
                <li><a href="spots.php">Spots</a></li>
                <li><a href="alvaro.php">Fish Id</a></li>
                <li><a href="kevin.php">Jokes</a></li>
		<li><a href="ibrahim.php">Solunar Activity</a></li>
                <li class="active"><a href="tide.php">Tides</a></li>
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
<div class="container marketing">	
	<h1 align="center">Floridian Tide</h1>
	<h2>About</h2>
	<p style="font-size: 17px">
		This page will provide you data about tides in Florida from any location wthin Florida. It is accurate to within a week.
	</p>
	<h2>Why is this data relevant for fishing?</h2>
	<p style="font-size: 17px">
		Good question. It turns out that fishes have a tendancy to move during tides. 
		A certain observation has been made time and time again. the following is an excerpt from About.com:
	</p>
	<p style="font-size: 17px;margin-left: 100px;margin-right: 100px">
		...On a high tide, water will flood the marshes, covering acres and 
		acres with as much as two feet or more of water. Crabs and small baitfish 
		will follow that rising tide to feed on in the shallows. Larger fish, such 
		as redfish, flounder, drum and trout will also follow that rising tide in to 
		feed on these baitfish. High tide in the coastal marsh finds large schools of 
		small redfish on a shallow flat, roaming in search of forage. Individual large 
		reds can be seen tailing as they root for crabs and other crustaceans in the mud. 
		As the tide begins to fall, the water coming off these flats begins to funnel into 
		small channels, leading into larger channels and eventually into the creeks and rivers. 
		Fish sense the dropping water and will move out with the tide to deeper water. These tidal 
		outflows to deeper water are where fishing can be great. As the water drops, oyster bars become
		visible, and the juvenile crabs can be seen scurrying about the shells. Take note of the life that
		abounds on the oyster bars. They almost tend to be a self contained ecosystem, with each resident 
		depending on the other for survival. Take note, because the larger fish in the area will definitely take note...
		<a href="http://saltfishing.about.com/od/tidesweatherreefs/a/aa050317c.htm">(Ron Brooks)</a>
	</p>
	<p style="font-size: 17px">
		Also when your out deep sea fishing you want to have a smooth tranquil experience not a rocky tide one!
	</p>
	<h2>So how can we help?</h2>
	<p style="font-size: 17px">
		Our site will provide a simple interface (below) where you simply enter in your location in florida as a city/town,zip code,longitude/latitude.
	</p>
	<h2>How to use</h2>
	<p style="font-size: 17px">
		For a city/town in Florida use the following input: FL/"name of city/town without quotaion marks"
	</p>
	<p>
		Example: <img src="img/cityortown.jpg">
	</p>
	<p style="font-size: 17px">
		For a zipcode in Florida use the following input: "zipcode without quotaion marks"
	</p>
	<p>
		Example: <img src="img/zipcode.jpg">
	</p>
	<p style="font-size: 17px">
		For latitude/longitude use the following input: "latitude value, longitude value without qoutation marks but with comma"
	</p>
	<p>
		Example: <img src="img/longlat.jpg">
	</p>
	<div id="local">
	  <input id="address" type="textbox" style="width: 200px">
	  <input id="button" type="button" value="Find Tides">
	</div> 
    
    <div id="myTide">
        <br>
			<div id= 'TideTitle'></div>
			<table id='tideTable'></table>
        <br>
    </div

	<hr class="featurette-divider">
	
	<!-- FOOTER -->
	<footer>
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p>&copy; 2014 Florida Fishing, Inc. &middot; <a href="terms.php">Terms</a></p>
	</footer>
	
	    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/tide.js"></script>
	
	</div><!-- /.container -->
  </body>
  </html>
