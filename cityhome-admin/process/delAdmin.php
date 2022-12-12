<?php

	session_start();
	if (empty($_SESSION['admin_id'])) {
    header('location:../index.php');
  }

	require_once('../db.php');
	ob_start(); 

	if (isset($_POST['delete'])) {
		$del_id = $_POST['del_id'];

		$del = "DELETE FROM admin WHERE id='$del_id' LIMIT 1";

		$connect= $dbcon->query($del);

		if ($connect) {
			$_SESSION['del_success'] = true;
			header('location:../admin.php');
		}
	}

?>