<?php
  require_once '../db.php';
  session_start();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $explode = explode('.', $file_name);
    $ext = end($explode);
    $allow_format = ['jpg','png','jpeg'];

    if (in_array($ext, $allow_format)) {
    	if ($file_size < 500000000) {

            $new_ext  = "banner".microtime(true).".".$ext;

    		$new_loc = '../front/img/brand/'.$new_ext;
    		move_uploaded_file($file_tmp, $new_loc);

            $insert = "INSERT INTO banner (image) VALUES('$new_ext')";
            $insert_query = mysqli_query($db,$insert);

            if($insert_query){
                header('Location: banner.php');
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