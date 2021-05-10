<?php
  require_once '../db.php';
  session_start();

  $id = $_GET['id'];

  $select = "SELECT * FROM messages WHERE id = '$id'";
  $query = mysqli_query($db,$select);
  $assoc = mysqli_fetch_assoc($query);


  if($assoc['status'] == 1) {
    $update_status = "UPDATE messages SET status = 2 WHERE id = '$id'";
    if(mysqli_query($db,$update_status)){
      header("Location: messages.php");
    }
  }
  elseif($assoc['status'] == 2){
    $update_status = "UPDATE messages SET status = 1 WHERE id = '$id'";
    if(mysqli_query($db,$update_status)){
      header("Location: messages.php");
    }
  }
  else{
    echo "Try Again";
  }


?>