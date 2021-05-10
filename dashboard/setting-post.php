<?php
  require_once '../db.php';
  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $tagline = $_POST['tagline'];
    $about = $_POST['about'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $copyright = $_POST['copyright'];
    $office_address = $_POST['office_address'];

    $insert = "INSERT INTO settings (tagline,about,email,phone,copyright,office_address) VALUES('$tagline','$about','$email','$phone','$copyright','$office_address')";
    $query = mysqli_query($db,$insert);
    
    $last_insert_id = mysqli_insert_id($db);

    $last_insert_id = mysqli_insert_id($db);
    $file_name = $_FILES['logo']['name'];
    $file_size = $_FILES['logo']['size'];
    $file_tmp = $_FILES['logo']['tmp_name'];
    $explode = explode('.', $file_name);
    $ext = end($explode);
    $allow_format = ['jpg','png','jpeg'];
    if (in_array($ext, $allow_format)) {
    	if ($file_size < 500000000) {
    		$new_ext =  "logo_white".$last_insert_id.".".$ext;

    		$new_loc = '../front/img/images/'.$new_ext;
    		move_uploaded_file($file_tmp, $new_loc);


    		$update = "UPDATE settings SET logo = '$new_ext' WHERE id = '$last_insert_id'";
      	$update_query = mysqli_query($db,$update);
    	}
    	else{
    		echo "Files size too high";
    	}
    }
    else{
    	echo "Wrong Format";
    }

    $featured_file_name = $_FILES['logo_black']['name'];
    $featured_file_size = $_FILES['logo_black']['size'];
    $featured_file_tmp = $_FILES['logo_black']['tmp_name'];
    $featured_explode = explode('.', $featured_file_name);
    $featured_ext = end($featured_explode);
    $featured_allow_format = ['jpg','png','jpeg'];
    if (in_array($featured_ext, $featured_allow_format)) {
    	if ($featured_file_size < 500000000) {
    		$featured_new_ext =  "logo_black".$last_insert_id.".".$featured_ext;

    		$featured_new_loc = '../front/img/images/'.$featured_new_ext;
    		move_uploaded_file($featured_file_tmp, $featured_new_loc);


    		$featured_update = "UPDATE settings SET logo_black = '$featured_new_ext' WHERE id = '$last_insert_id'";
      	$featured_query = mysqli_query($db,$featured_update);
        if($featured_query){
          header('Location: settings.php');
        }
    	}
    	else{
    		echo "Files size too high";
    	}
    }
  }
?>