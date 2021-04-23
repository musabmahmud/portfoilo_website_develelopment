<?php
	session_start();

  	$id = $_GET['id'];
	if(!isset($_SESSION['email'])){
		header('location: login.php');
	}
?>