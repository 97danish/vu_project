<?php 

session_start();
	
	 if(!empty($_SESSION['doctor'])){
 		unset($_SESSION['doctor']);
		session_destroy();
	 }
	 else if(!empty($_SESSION['patient'])){
 		unset($_SESSION['patient']);
		session_destroy();
	 }
	 else if(!empty($_SESSION['admin'])){
 		unset($_SESSION['admin']);
		session_destroy();
	 }
	 else{
	 	echo "User Session destroyed!";
	 	header("location: index.php");
	 }
	 	header("location: index.php");
	 	

 ?>