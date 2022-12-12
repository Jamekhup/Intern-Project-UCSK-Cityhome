<?php  
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Image Upload</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php if (isset($_SESSION['success'])) {
	?>
		<p style="color:cyan;text-align: center;">Image Uploaded Successfully</p>
	<?php
	}unset($_SESSION['success']);
	 ?>
	<div id="content">
		<form action="process.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="size" value=10000>
			<div>
				<input type="file" name="image">
			</div>
			<br>
			<div>
				<input type="submit" name="upload" value="Upload Image">
			</div>
		</form>
	</div>
</body>
</html>
