<?php
    include_once 'dbconnect.php';   // As functions.php is not included
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

include_once 'register.inc.php';
include_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Florida Fishing</title>
    <script type="text/JavaScript" src="js/sha512.js"></script> 
    <script type="text/JavaScript" src="js/forms.js"></script>
    <link href="css/style.css" rel="stylesheet">
  </head>
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
                  <li><a href="blog.php">Blog</a></li>
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
        
        <div class="container marketing">
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Join Today! <span class="text-muted">Gain access to the stories and advice of other fishermen!</span></h2>
                <p class="lead">Please enter the information below to join.</p>
                <ul>
                <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
                <li>Emails must have a valid email format</li>
                <li>Passwords must be at least 6 characters long</li>
                <li>Passwords must contain
                    <ul>
                        <li>At least one upper case letter (A..Z)</li>
                        <li>At least one lower case letter (a..z)</li>
                        <li>At least one number (0..9)</li>
                    </ul>
                </li>
                <li>Your password and confirmation must match exactly</li>
            </ul>
                
            <div class='styleform'>
            
            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                    method="post" 
                    name="registration_form">
                <label>Username:</label> <input type='text' 
                    name='username' 
                    id='username' /><div class="clear"></div><br>
                <label>Email:</label> <input type="text" name="email" id="email" /><div class="clear"></div><br>
                <label>Password:</label> <input type="password"
                                 name="password" 
                                 id="password"/><div class="clear"></div><br>
                <label>Confirm password:</label> <input type="password" 
                                         name="confirmpwd" 
                                         id="confirmpwd" /><div class="clear"></div><br>
                <input type="button" 
                       value="Register" 
                       onclick="return regformhash(this.form,
                                       this.form.username,
                                       this.form.email,
                                       this.form.password,
                                       this.form.confirmpwd);" /> 
            </form>
            </div>
            <p>Return to the <a href="login.php">login page</a>.</p>
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

      </div>
        
    <?php
        if (!empty($error_msg)) {
            echo "<script type='text/javascript'>alert('$error_msg')</script>";
        }
        ?> 
    </body>
</html>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </body>
</html>
