<?php  
	session_start();
	session_destroy();
	header('Location:../../indexPortada.php');
?>