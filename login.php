
<?php
//This is an open source project that we adapted to our project. 
//It can be found on github at: https://github.com/peredurabefrog/phpSecureLogin
    include_once 'dbconnect.php';   // As functions.php is not included
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
    include_once 'functions.php';
    sec_session_start();
 
    if (login_check($mysqli) == true) {
        $logged = 'in';
    } else {
        $logged = 'out';
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Florida Fishing</title>
    <script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script> 
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
                <li><a href="kevin.php">Jokes</a></li><li>
                <li><a href="ibrahim.php">Solunar Activity</a></li>
                <li><a href="tide.php">Tides</a></li>
                <li><a href="blog.php">Blog</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <?php if (login_check($mysqli) == true) : ?>
                <li class="active"><a href="logout.php">Logout</a></li>
                <?php else : ?>
                <li class="active"><a href="login.php">Login</a></li>
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
          <h2 class="featurette-heading">Login <span class="text-muted">to see the blog!</span></h2>
          <p class="lead">Please type in your username and password.</p>
          <form action="processLogin.php" method="post" name="login_form">                      
            Email: <input type="text" name="email" />
            Password: <input type="password" 
                             name="password" 
                             id="password"/>
            <input type="button" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
            </form>
            <p>If you don't have a login, please <a href="joinMember.php">register</a></p>
            <p>If you are done, please <a href="logout.php">log out</a>.</p>
            <p>You are currently logged <?php echo $logged ?>.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="http://stockfresh.com/files/a/anatolym/m/18/144240_stock-photo-3d-small-people---fisherman-and-fish.jpg" alt="Generic placeholder image">
        </div>
      </div>
     
      <hr class="featurette-divider">

      <!-- FOOTER -->
      <footer>
        
        <p>&copy; 2014 Florida Fishing, Inc. &middot; <a href="terms.php">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <?php
        if (isset($_GET['error'])) {
            echo "<script type='text/javascript'>alert('Check your username and password!')</script>";
        }
    ?> 
  </body>
</html>
