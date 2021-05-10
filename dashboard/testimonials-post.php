<?php
  require_once '../db.php';
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $quotes = $_POST['quotes'];
    $position = $_POST['position'];

    $insert = "INSERT INTO testimonials (name,quotes,position) VALUES('$name','$quotes','$position')";
    $query = mysqli_query($db, $insert);
    $last_insert_id = mysqli_insert_id($db);

	$file_name = $_FILES['thumbnail']['name'];
	$file_size = $_FILES['thumbnail']['size'];
	$file_tmp = $_FILES['thumbnail']['tmp_name'];
    $explode = explode('.', $file_name);
    $ext = end($explode);
    $allow_format = ['jpg','png','jpeg'];
    if (in_array($ext, $allow_format)) {
    	if ($file_size < 500000000) {
    		$new_ext =  "testimonial".$last_insert_id.".".$ext;

    		$new_loc = '../front/img/images/'.$new_ext;
    		move_uploaded_file($file_tmp, $new_loc);


    		$update = "UPDATE testimonials SET image = '$new_ext' WHERE id = '$last_insert_id'";
      	    $update_query = mysqli_query($db,$update);
            
            header('Location: testimonials.php');
    	}
    	else{
    		echo "Files size too high/format doesn't match";
    	}
    }
    else{
    	echo "Wrong Format";
    }
  }
?>