<?php 
	$user = isset($_SESSION['user']) ? $_SESSION['user'] : null;
	if ($user) {
		
	}else{
		header('location: '.BASE_URL.'admin/user.php');
	}

 ?>