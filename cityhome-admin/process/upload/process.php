<?php 
	session_start();

if (isset($_POST['upload'])) {
	$target = "../../images/".basename($_FILES['image']['name']);
	
	$db = mysqli_connect("localhost", "root", "", "cityhome");
	
	$image = $_FILES['image']['name'];
	
	
	$sql = "INSERT INTO for_sale (img) VALUES ('$target')";
	mysqli_query($db, $sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		
		$_SESSION['success'] = true;
		header('location:index.php');
		
	}else{
		$msg = "There was a problem uploading image";
	}

}

?>