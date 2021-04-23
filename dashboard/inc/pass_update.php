<?php
  require_once 'session.php';
  require_once '../../db.php';

            



  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_SESSION['id'];

    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    $samepass = $_POST['samepass'];



    $pass_check = "SELECT * FROM users where id = '$id'";
    $pass_query = mysqli_query($db,$pass_check);
    $pass_assoc = mysqli_fetch_assoc($pass_query);

    if($pass_assoc['password'] == $oldpass){
        if($pass_query == $samepass){
            $update = "UPDATE users SET password = '$newpass' WHERE id = 1";
            $query = mysqli_query($db,$update);
            if ($query) {
                echo "Success";
                   header('location: ../users.php');
                }
            }

        }
        else{
            $_SESSION['invalid'] "Password Are not Same";
        }
    }
    else{
        $_SESSION['invalid'] = "Please provide current password";
    }

?>