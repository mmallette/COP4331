<?php
    
    include_once 'dbconnect.php';   
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
    include_once 'functions.php';
    sec_session_start(); 
    
    $username= htmlentities($_SESSION['username']);
    $text ='';
    $question=FALSE;
    $tale=FALSE;
    $content='';
    $fileType='';
    $fileSize='0';
    $fileName='';
    $text = mysqli_real_escape_string($mysqli, $_POST['text']);
    if(isset($_POST['submit']) && $_FILES['pic']['size'] > 0)
    {
        $fileName = $_FILES['pic']['name'];
        $tmpName  = $_FILES['pic']['tmp_name'];
        $fileSize = $_FILES['pic']['size'];
        $fileType = $_FILES['pic']['type'];

        move_uploaded_file($_FILES['pic']['tmp_name'], $fileName);
       // $fp      = fopen($tmpName, 'r');
       // $content = fread($fp, filesize($tmpName));
       // $content = addslashes($content);
       // fclose($fp);

        
    }
    
    if(isset($_POST['question']) && $_POST['question'] == '1')  {
         $question = TRUE;
     }
     if(isset($_POST['tale']) && $_POST['tale'] == '1') {
         $tale = TRUE;
     }
 
    $sql="INSERT INTO blog (username, text, questionFlag, storyFlag, extType, picSize, picName)
    VALUES ('$username', '$text', '$question', '$tale', '$fileType', '$fileSize', '$fileName')";

    if (!mysqli_query($mysqli,$sql)) {
      die('Error: ' . mysqli_error($mysqli));
    }
    
    header('Location: ../blog.php');

