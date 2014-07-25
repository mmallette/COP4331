<?php

    include_once 'dbconnect.php';   // As functions.php is not included
    include_once 'functions.php';
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
    sec_session_start(); 
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Florida Fishing</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
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
                <li class="active"><a href="blog.php">Blog</a></li>
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
          <?php if (login_check($mysqli) == true) : ?>
          <p class= "lead">Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>  
          <h2 class="featurette-heading">Post <span class="text-muted"> Questions, Tips!</span></h2>
         
        </div>
      </div>

      <hr class="featurette-divider">
      
      <!-- Button trigger modal -->
      <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Post!</button>

      <hr class="featurette-divider">
<?php 
    $result = mysqli_query($mysqli,"SELECT * FROM blog");
      
    while($row = mysqli_fetch_array($result)) { 
        $file = $row['picName'];
          ?>
      <div class='template'>
        <div class="row featurette">
          <div class="col-md-5">
            <?php if ($file != "") : ?>
            <img class="featurette-image img-responsive" src= "<?php echo $file ?>" >
            <?php else : ?>
            <img class="featurette-image img-responsive" src= "css/img/SpeakFish.png" alt="Generic placeholder image">
            <?php endif; ?>
          </div>
          <div class="col-md-7">
            <h3 class='name'><?php echo $row['username']; ?></h3>
            <p class='post'><?php echo $row['text']; ?></p>
          </div>
        </div>
        <hr class="featurette-divider">
      </div>

      <div class='blog'></div>
    <?php } ?>
      

      <!-- Modal -->
      
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Post by: <?php echo htmlentities($_SESSION['username']); ?>  </h4>
              </div>
              <form action = "insertDB.php" method="post" enctype="multipart/form-data">
              
              <div class="modal-body">
                    <textarea id='userInput' rows="7" cols="80" placeholder="Post Your Comment Here..." name ="text" ></textarea>
                    <hr class="featurette-divider">
                      <p>Click to Add a Photo...</p>
                      <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                      <input name = "pic" type="file" id="userfile">
                      <section>
                        <div class="checkboxFour" id="question">

                            <input type="checkbox" value="1" id="checkboxFourInput" name="question" />
                            <label for="checkboxFourInput"></label>
                            </div>
                          <label for="question">Question?</label>
                      </section>
                      <section>
                        <div class="checkboxFour" id="tale">

                                <input type="checkbox" value="1" id="checkboxFourInput2" name="tale" /> 
                                <label for="checkboxFourInput2" ></label>
                        </div>
                      <label for="tale">Tell a Tale</label>
                    </section>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary submit" name = "submit">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              </form>
            </div>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="js/blog.js"></script>

  <?php else : ?>
        <p>
            <span class="error" >You are not authorized to access this page.</span> Please <a href="login.php">login</a>.
        </p>
  <?php endif; ?>
  </body>
</html>
