<?php  
    ob_start(); 
	session_start();
	if (empty($_SESSION['admin_id'])) {
    header('Location:../index.php');
  }

	require('../db.php');

	if (isset($_POST['update'])) {
		$catname = mysqli_real_escape_string($dbcon,$_POST['name']);
		$update_id = mysqli_real_escape_string($dbcon,$_POST['update_id']);
		

		if ($catname==null) {
			$_SESSION['required'] = true;
			echo "blank";
		}

					
			$update ="UPDATE category SET name='$catname' WHERE id='$update_id'";
			$query = mysqli_query($dbcon,$update);

			if ($query) {
				$_SESSION['update_success'] = true;
				header('Location:../category.php');
			}

		

	}

	
?>