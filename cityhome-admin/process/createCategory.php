<?php 
    ob_start(); 
	session_start();
	if (empty($_SESSION['admin_id'])) {
    header('location:../index.php');
  }

	require('../db.php');

	if (isset($_POST['submit'])) {
		$name = mysqli_real_escape_string($dbcon,$_POST['name']);
	

		if ($name==null) {
			$_SESSION['required'] = true;
			header('Location:createCategory.php');
		}else{
			$stmt = $dbcon->prepare("INSERT INTO category(name) VALUES (?)");


				$stmt->bind_param("s", $myname);

				$myname = $name;


				if ($stmt->execute()) {
					$_SESSION['success'] = true;
					header('Location:../category.php');
				}
		}
	
				 
		
			
		}

	

	
?>