<?php  
	session_start();
	ob_start(); 
	if (empty($_SESSION['admin_id'])) {
    header('location:../index.php');
  }

	require('../db.php');

	if (isset($_POST['update'])) {
		$name = mysqli_real_escape_string($dbcon,$_POST['name']);
		$email = mysqli_real_escape_string($dbcon,$_POST['email']);
		$password = mysqli_real_escape_string($dbcon,$_POST['password']);
		$role = mysqli_real_escape_string($dbcon,$_POST['role']);
		$update_id = mysqli_real_escape_string($dbcon,$_POST['update_id']);

		if ($name==null||$email==null||$password==null||$role==null) {
			$_SESSION['required'] = true;
			echo "blank";
		}else{
					
			$update ="UPDATE admin SET name='$name', email='$email', password='$password', role='$role' WHERE id='$update_id'";
			$query = mysqli_query($dbcon,$update);

			if ($query) {
				$_SESSION['update_success'] = true;
				header('location:../admin.php');
			}


				
			}
		}

	

	
?>