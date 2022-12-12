<?php  
	
	if (isset($_GET['reset'])) {
		require_once('db.php');
		$key = $_GET['reset'];
		$selectkey = "SELECT * FROM admin WHERE reset_key='$key'";
		$keyQuery = mysqli_query($connect,$selectkey);
		if ($keyQuery->num_rows > 0) {
			$forkey = mysqli_fetch_assoc($keyQuery);
			$keylink = $forkey['reset_key'];
			$keyid = $forkey['id'];

			if ($key !== $keylink){
				header('location:login.php');
			}else{
			?>
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
					<div class="container">
						<div class="col-md-6 offset-md-3">
							<div id="text"></div>
							<h4 class="text-center">Enter the five digit which had been sent to your email</h4>
							<form class="resetForm">
								<div class="form-group">
									<input type="text" name="code" class="form-control" id="code" placeholder="Enter 6 digit code">
								</div>
								<input type="hidden" value="<?php echo $keyid; ?>" id="keyid">
								<button type="submit" class="btn btn-info" name="submit">Submit</button>

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
						$(document).ready(function(){
							$('.resetForm').on('submit',resetProcess);

							function resetProcess(e){
								e.preventDefault();
								let getCode = $('#code').val();
								let keyid = $("#keyid").val();
								if (!getCode) {
									alert('Cannot be empty');
								}else{
									$.ajax({
										method:"POST",
										url:"process/passResetProcess.php",
										data:{code:getCode,keyid:keyid},

										success:function(successText){
											window.location.assign('change-pass.php');
										}
									});
								}
							}
						});
					</script>
					
				</body>
				</html>
			<?php
			}
		}else{
			header('location:login.php');
		}
	}else{
		header('location:login.php');
	}

?>
