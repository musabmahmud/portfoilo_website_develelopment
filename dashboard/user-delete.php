<?php
	require_once '../db.php';
  $id = $_GET['id'];
  $insert = "DELETE FROM users WHERE id = $id";
    $query = mysqli_query($db,$insert);
    if ($query) {
      $_SESSION['delete'] = "User Delete Succesfully";
      header("location: users.php");
      }
      else{
        echo "Try Again";
      }
?>

