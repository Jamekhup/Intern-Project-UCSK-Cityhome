<?php  
    ob_start(); 
	session_start();
	if (empty($_SESSION['admin_id'])) {
    header('Location:../index.php');
  }

	require_once('../db.php');
	

	if (isset($_POST['update'])) {
		$address = mysqli_real_escape_string($dbcon,$_POST['address']);
		$township = mysqli_real_escape_string($dbcon,$_POST['township']);
		$price = mysqli_real_escape_string($dbcon,$_POST['price']);
		$room = mysqli_real_escape_string($dbcon,$_POST['room']);
		$feet = mysqli_real_escape_string($dbcon,$_POST['feet']);
		$description = $_POST['description'];
		$update_id = $_POST['update_id'];

		$file1 = $_FILES["img1"]["name"];
        $array1 = explode('.', $file1);
        $fileName1=$array1[0];
        $fileExt1=$array1[1];
        $image1=$fileName1."_".time().".".$fileExt1;
        $target1 = "../project/".$fileName1."_".time().".".$fileExt1;
		

		$file2 = $_FILES["img2"]["name"];
        $array2 = explode('.', $file2);
        $fileName2=$array2[0];
        $fileExt2=$array2[1];
        $image2=$fileName2."_".time().".".$fileExt2;
        $target2 = "../project/".$fileName2."_".time().".".$fileExt2;

		$file3 = $_FILES["img3"]["name"];
        $array3 = explode('.', $file3);
        $fileName3=$array3[0];
        $fileExt3=$array3[1];
        $image3=$fileName3."_".time().".".$fileExt3;
        $target3 = "../project/".$fileName3."_".time().".".$fileExt3;

		$file4 = $_FILES["img4"]["name"];
        $array4 = explode('.', $file4);
        $fileName4=$array4[0];
        $fileExt4=$array4[1];
        $image4=$fileName4."_".time().".".$fileExt4;
        $target4 = "../project/".$fileName4."_".time().".".$fileExt4;

		$file5 = $_FILES["img5"]["name"];
        $array5 = explode('.', $file5);
        $fileName5=$array5[0];
        $fileExt5=$array5[1];
        $image5=$fileName5."_".time().".".$fileExt5;
        $target5 = "../project/".$fileName5."_".time().".".$fileExt5;

		$file6 = $_FILES["img6"]["name"];
        $array6 = explode('.', $file6);
        $fileName6=$array6[0];
        $fileExt6=$array6[1];
        $image6=$fileName6."_".time().".".$fileExt6;
        $target6 = "../project/".$fileName6."_".time().".".$fileExt6;

		$file7 = $_FILES["img7"]["name"];
        $array7 = explode('.', $file7);
        $fileName7=$array7[0];
        $fileExt7=$array7[1];
        $image7=$fileName7."_".time().".".$fileExt7;
        $target7 = "../project/".$fileName7."_".time().".".$fileExt7;

		if ($address==null||$township==null||$price==null||$feet==null||$room == null|| $description==null||$target1==null||$image1==null) {

			$_SESSION['required'] = true;
			header('Location:../addProject.php');
			
		}else{

			$ins1 = move_uploaded_file($_FILES['img1']['tmp_name'], $target1);
			$ins2 = move_uploaded_file($_FILES['img2']['tmp_name'], $target2);
			$ins3 = move_uploaded_file($_FILES['img3']['tmp_name'], $target3);
			$ins4 = move_uploaded_file($_FILES['img4']['tmp_name'], $target4);
			$ins5 = move_uploaded_file($_FILES['img5']['tmp_name'], $target5);
			$ins6 = move_uploaded_file($_FILES['img6']['tmp_name'], $target6);
			$ins7 = move_uploaded_file($_FILES['img7']['tmp_name'], $target7);
		
		if ($ins1 AND $ins2 || $ins3 || $ins4 || $ins5 || $ins6 || $ins7  )
			{

					
			$update ="UPDATE project SET address='$address', township='$township', price='$price', feet='$feet',description='$description', img1='$image1', img2='$image2', img3='$image3', img4='$image4', img5='$image5', img6='$image6', img7='$image7' WHERE id='$update_id'";

			$query = mysqli_query($dbcon,$update);

			if ($query) {
				$_SESSION['update_success'] = true;
				header('Location:../dashboard.php');
			}

		}else{
			echo "error";
		}

		}

	}

?>