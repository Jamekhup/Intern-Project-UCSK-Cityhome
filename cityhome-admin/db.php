

<?php  

	$server = 'gator3047.hostgator.com';
	$username = 'myanmarw_muante';
	$password = 'cityhomemuante143$yg';
	$dbname = 'myanmarw_muanyg';
// 	$server = 'localhost';
// 	$username = 'root';
// 	$password = '';
// 	$dbname = 'cityhome';

	$dbcon = mysqli_connect($server,$username ,$password,$dbname);

	if (mysqli_connect_errno()) {
		echo "Failed to connect database" . mysqli_connect_errno();
	}
	

?>