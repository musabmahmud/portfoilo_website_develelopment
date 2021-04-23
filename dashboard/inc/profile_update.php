<?php
  require_once 'session.php';
  require_once '../../db.php';
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $id = $_SESSION['id'];

	$file_name = $_FILES['profile_image']['name'];
	$file_size = $_FILES['profile_image']['size'];
	$file_tmp = $_FILES['profile_image']['tmp_name'];
    $explode = explode('.', $file_name);
    $ext = end($explode);
    $allow_format = ['jpg','png','jpeg'];
    if (in_array($ext, $allow_format)) {
    	if ($file_size < 500000000) {
    		$new_ext =  $id.".".$ext;

            $img_check = "SELECT * FROM users where id = $id";
            $img_query = mysqli_query($db,$img_check);
            $img_assoc = mysqli_fetch_assoc($img_query);
            $old_img_location = '../../assets/img/'.$img_assoc['profile_image'];
            if(file_exists($old_img_location)){
                unlink($old_img_location);
            }

    		$new_loc = '../../assets/img/'.$new_ext;
    		move_uploaded_file($file_tmp, $new_loc);


    		$update = "UPDATE users SET name= '$name' , username= '$username' ,profile_image = '$new_ext' , email = '$email' WHERE id = '$id'";
      		$query = mysqli_query($db,$update);
    		if ($query) {
    			$_SESSION['name'] = $name;
    			header('location: ../users.php');
    		}
    		else{

    		}
    	}
    	else{
    		echo "Files size too high";
    	}
    }
    else{
    	echo "Wrong";
    }
  }
?>