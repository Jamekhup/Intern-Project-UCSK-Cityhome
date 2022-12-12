<?php 
	session_start();

	ob_start();
	if (empty($_SESSION['admin_id'])) {
	    header('location:../index.php');
	 } 

	if (isset($_POST['submit'])) {

		require('../db.php');

		$sold = $_POST['soldout'];
		$id = $_POST['soldid'];

		if ($sold == null || $id == null) {
			header("Location:../forsale.php");
		}else{

			$soldSql = "UPDATE for_sale SET sold=1 WHERE id='$id' LIMIT 1";

			$soldQ = mysqli_query($dbcon,$soldSql);

			if ($soldQ) {
				
				header('Location:../forsale.php');
			}else{
				header('Location:../forsale.php');
			}
		}
	}

?>