<?php  
	session_start();
	if (empty($_SESSION['admin_id'])) {
    header('location:../index.php');
  }

	require('../db.php');
	ob_start(); 

	if (isset($_POST['submit'])) {
		$name = mysqli_real_escape_string($dbcon,$_POST['name']);
		$email = mysqli_real_escape_string($dbcon,$_POST['email']);
		$password = mysqli_real_escape_string($dbcon,$_POST['password']);
		$role = mysqli_real_escape_string($dbcon,$_POST['role']);


		$enc_pass = md5($password);
		

		if ($name==null||$email==null||$password==null||$role==null) {
			$_SESSION['required'] = true;
			header('location:createAdmin.php');
		}else{
					
				 $stmt = $dbcon->prepare("INSERT INTO admin (name,email,password,role) VALUES (?,?,?,?)");


				$stmt->bind_param("ssss", $myname,$myemail,$mypassword,$myrole);

				$myname = $name;
				$myemail	= $email;
				$mypassword	= $enc_pass;
				$myrole	= $role;


				

				if ($stmt->execute()) {
					$_SESSION['success'] = true;
					header('location:../admin.php');
				}
		
			}
		}

?>