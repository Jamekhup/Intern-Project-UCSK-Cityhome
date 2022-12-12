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
			header("Location:../forrent.php");
		}else{

			$soldSql = "UPDATE for_rent SET sold=1 WHERE id='$id' LIMIT 1";

			$soldQ = mysqli_query($dbcon,$soldSql);

			if ($soldQ) {
				
				header('Location:../forrent.php');
			}else{
				header('Location:../forrent.php');
			}
		}
	}

?>