<?php  
    ob_start();
	session_start();
	if (empty($_SESSION['admin_id'])) {
    header('Location:../index.php');
  }

	require('../db.php');
	 

	if (isset($_POST['submit'])) {
		$address = mysqli_real_escape_string($dbcon,$_POST['address']);
		$township = mysqli_real_escape_string($dbcon,$_POST['township']);
		$price = mysqli_real_escape_string($dbcon,$_POST['price']);
		$room = mysqli_real_escape_string($dbcon,$_POST['room']);
		$category = mysqli_real_escape_string($dbcon,$_POST['category']);
		$feet = mysqli_real_escape_string($dbcon,$_POST['feet']);
		$description = $_POST['description'];

		$file1 = $_FILES["img1"]["name"];
        $array1 = explode('.', $file1);
        $fileName1=$array1[0];
        $fileExt1=$array1[1];
        $image1=$fileName1."_".time().".".$fileExt1;
        $target1 = "../rent/".$fileName1."_".time().".".$fileExt1;
		

		$file2 = $_FILES["img2"]["name"];
        $array2 = explode('.', $file2);
        $fileName2=$array2[0];
        $fileExt2=$array2[1];
        $image2=$fileName2."_".time().".".$fileExt2;
        $target2 = "../rent/".$fileName2."_".time().".".$fileExt2;

		$file3 = $_FILES["img3"]["name"];
        $array3 = explode('.', $file3);
        $fileName3=$array3[0];
        $fileExt3=$array3[1];
        $image3=$fileName3."_".time().".".$fileExt3;
        $target3 = "../rent/".$fileName3."_".time().".".$fileExt3;

		$file4 = $_FILES["img4"]["name"];
        $array4 = explode('.', $file4);
        $fileName4=$array4[0];
        $fileExt4=$array4[1];
        $image4=$fileName4."_".time().".".$fileExt4;
        $target4 = "../rent/".$fileName4."_".time().".".$fileExt4;

		$file5 = $_FILES["img5"]["name"];
        $array5 = explode('.', $file5);
        $fileName5=$array5[0];
        $fileExt5=$array5[1];
        $image5=$fileName5."_".time().".".$fileExt5;
        $target5 = "../rent/".$fileName5."_".time().".".$fileExt5;

		$file6 = $_FILES["img6"]["name"];
        $array6 = explode('.', $file6);
        $fileName6=$array6[0];
        $fileExt6=$array6[1];
        $image6=$fileName6."_".time().".".$fileExt6;
        $target6 = "../rent/".$fileName6."_".time().".".$fileExt6;

		$file7 = $_FILES["img7"]["name"];
        $array7 = explode('.', $file7);
        $fileName7=$array7[0];
        $fileExt7=$array7[1];
        $image7=$fileName7."_".time().".".$fileExt7;
        $target7 = "../rent/".$fileName7."_".time().".".$fileExt7;
        
         $file8 = $_FILES["img8"]["name"];
        $array8 = explode('.', $file8);
        $fileName8=$array8[0];
        $fileExt8=$array8[1];
        $image8=$fileName8."_".time().".".$fileExt8;
        $target8 = "../rent/".$fileName8."_".time().".".$fileExt8;
        
        $file9 = $_FILES["img9"]["name"];
        $array9 = explode('.', $file9);
        $fileName9=$array9[0];
        $fileExt9=$array9[1];
        $image9=$fileName9."_".time().".".$fileExt9;
        $target9 = "../rent/".$fileName9."_".time().".".$fileExt9;
        
        $file10 = $_FILES["img10"]["name"];
        $array10 = explode('.', $file10);
        $fileName10=$array10[0];
        $fileExt10=$array10[1];
        $image10=$fileName10."_".time().".".$fileExt10;
        $target10 = "../rent/".$fileName10."_".time().".".$fileExt10;
        
        $file11 = $_FILES["img11"]["name"];
        $array11 = explode('.', $file11);
        $fileName11=$array11[0];
        $fileExt11=$array11[1];
        $image11=$fileName11."_".time().".".$fileExt11;
        $target11 = "../rent/".$fileName11."_".time().".".$fileExt11;
        
        $file12 = $_FILES["img12"]["name"];
        $array12 = explode('.', $file12);
        $fileName12=$array12[0];
        $fileExt12=$array12[1];
        $image12=$fileName12."_".time().".".$fileExt12;
        $target12 = "../rent/".$fileName12."_".time().".".$fileExt12;
        
        $file13 = $_FILES["img13"]["name"];
        $array13 = explode('.', $file13);
        $fileName13=$array13[0];
        $fileExt13=$array13[1];
        $image13=$fileName13."_".time().".".$fileExt13;
        $target13 = "../rent/".$fileName13."_".time().".".$fileExt13;
        
        $file14 = $_FILES["img14"]["name"];
        $array14 = explode('.', $file14);
        $fileName14=$array14[0];
        $fileExt14=$array14[1];
        $image14=$fileName14."_".time().".".$fileExt14;
        $target14 = "../rent/".$fileName14."_".time().".".$fileExt14;
        
        $file15 = $_FILES["img15"]["name"];
        $array15 = explode('.', $file15);
        $fileName15=$array15[0];
        $fileExt15=$array15[1];
        $image15=$fileName15."_".time().".".$fileExt15;
        $target15 = "../rent/".$fileName15."_".time().".".$fileExt15;
        
        $file16 = $_FILES["img16"]["name"];
        $array16 = explode('.', $file16);
        $fileName16=$array16[0];
        $fileExt16=$array16[1];
        $image16=$fileName16."_".time().".".$fileExt16;
        $target16 = "../rent/".$fileName16."_".time().".".$fileExt16;
        
        $file17 = $_FILES["img17"]["name"];
        $array17 = explode('.', $file17);
        $fileName17=$array17[0];
        $fileExt17=$array17[1];
        $image17=$fileName17."_".time().".".$fileExt17;
        $target17 = "../rent/".$fileName17."_".time().".".$fileExt17;
        
        $file18 = $_FILES["img18"]["name"];
        $array18 = explode('.', $file18);
        $fileName18=$array18[0];
        $fileExt18=$array18[1];
        $image18=$fileName18."_".time().".".$fileExt18;
        $target18 = "../rent/".$fileName18."_".time().".".$fileExt18;
        
        $file19 = $_FILES["img19"]["name"];
        $array19 = explode('.', $file19);
        $fileName19=$array19[0];
        $fileExt19=$array19[1];
        $image19=$fileName19."_".time().".".$fileExt19;
        $target19 = "../rent/".$fileName19."_".time().".".$fileExt19;
        
        $file20 = $_FILES["img20"]["name"];
        $array20 = explode('.', $file20);
        $fileName20=$array20[0];
        $fileExt20=$array20[1];
        $image20=$fileName20."_".time().".".$fileExt20;
        $target20 = "../rent/".$fileName20."_".time().".".$fileExt20;

		if ($address==null||$township==null||$price==null||$category==null||$feet==null||$description==null||$target1==null||$image1==null) {
			$_SESSION['required'] = true;
			header('Location:../addRent.php');
		}else{


			$ins1 = move_uploaded_file($_FILES['img1']['tmp_name'], $target1);
			$ins2 = move_uploaded_file($_FILES['img2']['tmp_name'], $target2);
			$ins3 = move_uploaded_file($_FILES['img3']['tmp_name'], $target3);
			$ins4 = move_uploaded_file($_FILES['img4']['tmp_name'], $target4);
			$ins5 = move_uploaded_file($_FILES['img5']['tmp_name'], $target5);
			$ins6 = move_uploaded_file($_FILES['img6']['tmp_name'], $target6);
			$ins7 = move_uploaded_file($_FILES['img7']['tmp_name'], $target7);
			$ins8 = move_uploaded_file($_FILES['img8']['tmp_name'], $target8);
            $ins9 = move_uploaded_file($_FILES['img9']['tmp_name'], $target9);
            $ins10 = move_uploaded_file($_FILES['img10']['tmp_name'], $target10);
            
            $ins11 = move_uploaded_file($_FILES['img11']['tmp_name'], $target11);
            
            $ins12 = move_uploaded_file($_FILES['img12']['tmp_name'], $target12);
            
            $ins13 = move_uploaded_file($_FILES['img13']['tmp_name'], $target13);
            
            $ins14 = move_uploaded_file($_FILES['img14']['tmp_name'], $target14);
            
            $ins15 = move_uploaded_file($_FILES['img15']['tmp_name'], $target15);
            
            $ins16 = move_uploaded_file($_FILES['img16']['tmp_name'], $target16);
            
            $ins17 = move_uploaded_file($_FILES['img17']['tmp_name'], $target17);
            
            $ins18 = move_uploaded_file($_FILES['img18']['tmp_name'], $target18);
            
            $ins19 = move_uploaded_file($_FILES['img19']['tmp_name'], $target19);
            
            $ins20 = move_uploaded_file($_FILES['img20']['tmp_name'], $target20);
			

			if ($ins1 AND $ins2 || $ins3 || $ins4 || $ins5 || $ins6 || $ins7) {

				 $stmt = $dbcon->prepare("INSERT INTO for_rent (address,township,price,room,feet,description,img1,img2,img3,img4,img5,img6,img7,img8,img9,img10,img11,img12,img13,img14,img15,img16,img17,img18,img19,img20,category_name) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");


				$stmt->bind_param("sssssssssssssssssssssssssss", $myaddress,$mytownship,$myprice,$myroom,$myfeet,$myDes,$myimg1,$myimg2,$myimg3,$myimg4,$myimg5,$myimg6,$myimg7,$myimg8,$myimg9,$myimg10,$myimg11,$myimg12,$myimg13,$myimg14,$myimg15,$myimg16,$myimg17,$myimg18,$myimg19,$myimg20,$mycategory);

				$myaddress = $address;
				$mytownship=$township;
				$myprice	= $price;
				$myroom	= $room;
				$myfeet	= $feet;
				$myDes	= $description;
				$myimg1	= $image1;
				$myimg2	= $image2;
				$myimg3	= $image3;
				$myimg4	= $image4;
				$myimg5	= $image5;
				$myimg6	= $image6;
				$myimg7	= $image7;
				$myimg8	= $image8;
                $myimg9	= $image9;
                $myimg10	= $image10;
                $myimg11	= $image11;
                $myimg12	= $image12;
                $myimg13	= $image13;
                $myimg14	= $image14;
                $myimg15	= $image15;
                $myimg16	= $image16;
                $myimg17	= $image17;
                $myimg18	= $image18;
                $myimg19	= $image19;
                $myimg20	= $image20;
				$mycategory	= $category;
				
				

				if ($stmt->execute()) {
					$_SESSION['success'] = true;
					header('Location:../forrent.php');
				}else{
				echo "Upload Error";
			}

		}else{
			echo "error";
		}

		}

	}

	
?>