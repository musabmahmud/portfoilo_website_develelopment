<?php
	require_once '../db.php';
  $id = $_GET['id'];
  $delete = "DELETE FROM socials WHERE id = '$id'";
    $query = mysqli_query($db,$delete);
    if ($query) {
      $_SESSION['delete'] = "User Delete Succesfully";
      header("location: socials.php");
    }
    else{
      echo "Try Again";
    }
?>

