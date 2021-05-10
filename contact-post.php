<?php
    require_once "db.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $summary = $_POST['summary'];

    $insert = "INSERT INTO messages (name,email,summary) VALUES('$name','$email','$summary')";
    $query = mysqli_query($db,$insert);
    if($query) {
        $_SESSION['insert'] = "Insert Succesfully";
        header("Location: index.php#contact");
    }
    else{
      echo "Try Again";
    }
  }
?>
