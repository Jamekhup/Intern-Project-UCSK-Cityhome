<?php
    ob_start();
	session_start();
	 
	if (empty($_SESSION['admin_id'])) {
    header('Location:../index.php');
  }

	require_once('../db.php');

	if (isset($_POST['delete'])) {
		$del_id = $_POST['del_id'];

		$del = "DELETE FROM for_rent WHERE id='$del_id' LIMIT 1";

		$connect= $dbcon->query($del);

		if ($connect) {
			$_SESSION['del_success'] = true;
			header('Location:../forrent.php');
		}
	}

?>