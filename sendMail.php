<?php 
ob_start();
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$subject = htmlspecialchars($_POST['subject']);
	$sms = htmlspecialchars($_POST['sms']);

	if ($name == null || $email == null || $subject == null || $sms == null) {
		header('location:contact.php');
	}else{

		$to = "cityhomeproperty.mm@gmail.com";
		$subject = "Hello Admin, someone contact you form your website contact page.";

		$message = "
		<html>
		<head>
			<title></title>
		</head>
		<body>
				<h1>Your get message from - ".$name."</h1>
				<h1>Email Address - ".$email."</h1>
				<h1>Subject - ".$subject."</h1>
				<h1>Message - ".$sms."</h1>
		</body>
		</html>
		";

		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		// More headers
		$headers .= 'From: <Noreply:cityhomeproperty.com>' . "\r\n";
	// 	$headers .= 'Cc: ' . "\r\n";

		mail($to,$subject,$message,$headers);

		echo "<p class='alert alert-success'>Thank you for contact us. We will reply soon. </p>";
	}
?>