<?php  
	
    ob_start(); 
	if (isset($_POST['submit'])) {
	    
	    session_start();
	    require_once('db.php');
		
		$email = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['email']));
		$pwd = htmlspecialchars(mysqli_real_escape_string($dbcon,$_POST['pwd']));

		if($email == ''|| $pwd == ''){
		   
		    header("Location:index.php");
		  //  exit();
		}else{
		    $pass_enc = md5($pwd);

    		$sql = "SELECT * FROM admin WHERE email='$email' AND password='$pass_enc'";
    
    		$result = mysqli_query($dbcon,$sql);
    
    		if ($result->num_rows > 0) {
    			
    			
    			while($admin = mysqli_fetch_assoc($result)){
    			     $_SESSION['admin_id'] = $admin['id'];
        			$_SESSION['admin_email'] = $admin['email'];
        			$_SESSION['admin_name'] = $admin['name'];
        			
        			if(isset($_SESSION['admin_id'] )){
        			    header('location:dashboard.php');
        			}else{
        		
        			    header('location:index.php');
        			}
    			}
               

			
    			
    		}else{
                
    			header('location:index.php');
    
    		}
		}


	}
	

?>