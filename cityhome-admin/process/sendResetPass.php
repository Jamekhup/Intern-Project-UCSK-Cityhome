<?php  
	
	require_once('../db.php');
	ob_start(); 
	$email = $_POST['mail'];

	if ($email == null) {
		echo "Email is required";
	}else{
			// generate reset pass code
			$reset_code = mt_rand(100000, 999999);

			// generate reset pass key
			$reset_key = md5(time().$email);
			$link = "UPDATE admin SET reset_pass='$reset_code',reset_key='$reset_key' WHERE email='$email'";

			if (mysqli_query($dbcon,$link)) {
				//send reset password email
				$to = $email;
				$subject = "Reset Password Link";

				$message = "
				<html>
				<head>
					<title></title>
				</head>
				<body>
				<h2 style='text-align:center;'>The Below link to reset your password</h2>
				<a href='password-reset.php?reset=$reset_key'style='text-align:center;'>Click Here to reset your password</a>
				</body>
				</html>
				";

				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From: <Noreply:yoonmyatnoeaung1@gmail.com>' . "\r\n";
			// 	$headers .= 'Cc: ' . "\r\n";

				mail($to,$subject,$message,$headers);

				echo "<p class='alert alert-info'>Password reset link has been sent to you email address</p>";
			}else{
				echo "Failed to send link";
			}


			
		}

?>