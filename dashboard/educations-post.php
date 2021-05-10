<?php
  require_once '../db.php';
  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $year = $_POST['year'];
    $progress = $_POST['progress'];

    $insert = "INSERT INTO educations (title,year,progress) VALUES('$title','$year','$progress')";
    $query = mysqli_query($db,$insert);
    if($query) {
        $_SESSION['insert'] = "Insert Succesfully";
        header("Location: educations.php");
    }
    else{
      echo "Try Again";
    }
  }
?>