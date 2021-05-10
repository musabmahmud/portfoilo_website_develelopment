<?php
  require_once '../db.php';
  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $number = $_POST['number'];
    $icon = $_POST['icon'];

    $insert = "INSERT INTO customer_count (name,number,icon) VALUES('$name','$number','$icon')";
    $query = mysqli_query($db,$insert);
    if($query) {
        $_SESSION['insert'] = "Insert Succesfully";
        header("Location: customer-count.php");
    }
    else{
      echo "Try Again";
    }
  }
?>