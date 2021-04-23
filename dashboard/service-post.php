<?php
  require_once '../db.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $icon = $_POST['icon'];
    $summary = $_POST['summary'];

    $insert = "INSERT INTO service (name,icon,summary) VALUES('$name','$icon','$summary')";
    $query = mysqli_query($db,$insert);
    if($query) {
        $_SESSION['insert'] = "Insert Succesfully";
        header("Location: service.php");
    }
    else{
      echo "Try Again";
    }
  }
?>