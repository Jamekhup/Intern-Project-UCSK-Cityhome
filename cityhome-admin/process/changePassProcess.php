<?php  
	session_start();
	ob_start(); 

	require('../db.php');

	$newpass = $_POST['pass'];
	$passId = $_POST['passId'];

	// pass encrypt
	$encPass = md5($newpass);

	$passSql = "UPDATE admin SET password='$encPass' WHERE id='$passId'";
	if (mysqli_query($connect,$passSql)) {
		unset($_SESSION['reset']);
		unset($_SESSION['passId']);

		echo "<p class='alert alert-success'>Password Reset Successfully! <a href='login.php'>Click Here to login Now</a></p>";
	}
?>