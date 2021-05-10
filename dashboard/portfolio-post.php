<?php
  require_once '../db.php';
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $category = $_POST['category'];
    $summary = $_POST['summary'];

    $insert = "INSERT INTO portfolio (title,category,summary) VALUES('$title', '$category','$summary')";

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
    		$new_ext =  "thumbnail".$last_insert_id.".".$ext;

    		$new_loc = '../front/img/images/'.$new_ext;
    		move_uploaded_file($file_tmp, $new_loc);


    		$update = "UPDATE portfolio SET thumbnail = '$new_ext' WHERE id = '$last_insert_id'";
      	$update_query = mysqli_query($db,$update);
    	}
    	else{
    		echo "Files size too high";
    	}
    }
    else{
    	echo "Wrong Format";
    }

  $featured_file_name = $_FILES['featured_image']['name'];
	$featured_file_size = $_FILES['featured_image']['size'];
	$featured_file_tmp = $_FILES['featured_image']['tmp_name'];
  $featured_explode = explode('.', $featured_file_name);
  $featured_ext = end($featured_explode);
  $featured_allow_format = ['jpg','png','jpeg'];
    if (in_array($featured_ext, $featured_allow_format)) {
    	if ($featured_file_size < 500000000) {
    		$featured_new_ext =  "featured_image".$last_insert_id.".".$featured_ext;

    		$featured_new_loc = '../front/img/images/'.$featured_new_ext;
    		move_uploaded_file($featured_file_tmp, $featured_new_loc);


    		$featured_update = "UPDATE portfolio SET featured_image = '$featured_new_ext' WHERE id = '$last_insert_id'";
      	$featured_query = mysqli_query($db,$featured_update);
        if($featured_query){
          header('Location: portfolio.php');
        }
    	}
    	else{
    		echo "Files size too high";
    	}
    }
    else{
    	echo "Wrong Format";
    }

    
  }
?>