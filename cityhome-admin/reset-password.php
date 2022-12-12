<!DOCTYPE html>
<html lang="en">
<head>
	 <?php include('pages/head.php'); ?>
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success sticky-top">
	  <?php include('pages/nav.php'); ?>
	</nav>
	<br>
	<br>
	<br>
	<br>
		<div class="container">
			<div class="col-md-6 offset-md-3">
				<div id="text"></div>
				<h3 class="text-center">Reset Password</h3>
				<form class="resetPass">
					<div class="form-group">
						<input type="email" placeholder="Enter Email" class="form-control" id="email" autocomplete="off">
					</div>
					<button class="btn btn-info" type="submit">Submit</button>
				</form>
			</div>
		</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<?php include('pages/footer.php'); ?>

	<script>
		const form = document.querySelector('.resetPass');
		form.addEventListener('submit',resetpassword);

		function resetpassword(e){
			e.preventDefault();

			let mail = $('#email').val();
			if (!mail) {
				alert("Email is required");
			}else{
				$.ajax({
					method:"POST",
					url:"process/sendResetPass.php",
					data:{mail:mail},

					success:function(sendText){
						$("#text").html(sendText);
					}
				});
			}
		}

	</script>
	
</body>
</html>