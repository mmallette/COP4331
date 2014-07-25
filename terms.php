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

      
      <!-- here is the content-->

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Terms and Conditions <br><br><span class="text-muted">Use of this website implies the following agreement with Florida Fishing Inc.</span></h2>
          <p class="lead"><br>  Warning: Florida Fishing Inc. is not responsible for you not having what it takes to catch mega fish like the one in the picture. Florida Fishing Inc. is not responsible for what happens if you go out in dangerous water or weather. We just try to help you get the right lure for the job.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://stockfresh.com/files/a/anatolym/m/18/144240_stock-photo-3d-small-people---fisherman-and-fish.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Florida Fishing, Inc. &middot; <a href="terms.php">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </body>
</html>
