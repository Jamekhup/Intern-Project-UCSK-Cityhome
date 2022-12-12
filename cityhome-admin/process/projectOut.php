<?php 
	session_start();

	ob_start();
	if (empty($_SESSION['admin_id'])) {
	    header('Location:../index.php');
	 } 

	if (isset($_POST['submit'])) {

		require('../db.php');

		$sold = $_POST['soldout'];
		$id = $_POST['soldid'];

		if ($sold == null || $id == null) {
			header("Location:../dashboard.php");
		}else{

			$soldSql = "UPDATE project SET sold=1 WHERE id='$id' LIMIT 1";

			$soldQ = mysqli_query($dbcon,$soldSql);

			if ($soldQ) {
				
				header('Location:../dashboard.php');
			}else{
				header('Location:../dashboard.php');
			}
		}
	}

?>