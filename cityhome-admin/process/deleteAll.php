<?php 
 require_once('../db.php');

 if (isset($_POST["id"]))
 {
 	foreach ($_POST ["id"] as $id )
 	 {
 		$query="DELETE FROM project WHERE id='".$id."';
 		echo "Delete Successful";
 	}
 }
 ?>