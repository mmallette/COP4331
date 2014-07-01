<?php
    
?>

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
                <li><a href="index.php">Home</a></li>
                <li><a href="spots.html">Spots</a></li>
                <li><a href="alvaro.html">Alvaro</a></li>
                <li><a href="kevin.html">Jokes</a></li>
                <li><a href="ibrahim.html">Tides</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
                <li class="active"><a href="joinMember.php">Become a Member</a></li>
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
          <h2 class="featurette-heading">Join Today! <span class="text-muted">Gain access to the stories and advice of other fishermen!</span></h2>
          <p class="lead">Please enter the information below to join.</p>
          <form class="pad" name="joinInfo" action="processLogin.php" method="post">
            Username: <input type="text" name="username" maxlength="20" /> <br />
            Password:  <input type="text" name="password" maxlength="20" /> <br />
            Confirm Password: <input type="text" name="cPassword" maxlength="20" /> <br />
            <input type="submit" name="submit" value="Submit Join Info" />
          </form>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://stockfresh.com/files/a/anatolym/m/18/144240_stock-photo-3d-small-people---fisherman-and-fish.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- FOOTER -->
      <footer>
        
        <p>&copy; 2014 Florida Fishing, Inc. &middot; <a href="terms.html">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </body>
</html>
