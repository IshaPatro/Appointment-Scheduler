<?php
	// if(!isset($_SESSION)){
	// 	session_start();
	// }
	//
	// include('../connection.php');
	// $sql="SELECT * FROM client-data where Id='" . $_SESSION["userid"] . "'";
	//
	// $q=mysqli_query($conn,$sql);
	// $row=mysqli_num_rows($q);
	// $data=mysqli_fetch_array($q);
	// $clientId=$data[1];
	// mysqli_close($conn);


	if(isset($_POST['submit'])){
		$file=$_FILES['FILE'];
		$fileName=$_FILES['file']['name'];
		$fileTmpName=$_FILES['file']['tmp_name'];
		$fileSize=$_FILES['file']['size'];
		$fileError=$_FILES['file']['error'];
		$fileType=$_FILES['file']['type'];
	}

	$fileExt = explode('.',$fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed=array('jpg','jpeg','png');

	if(in_array($fileActualExt,$allowed)){
		if($fileError === 0){
			if($fileSize < 1000000){
				// ----------------------------------------------------------------------File Name--------------------------------------------------
				$filenameNew = uniqid('',true).".".$fileActualExt;
				// $filenameNew = $clientId".".$fileActualExt;
				$fileDestination = 'Images/Clients'.$fileNameNew;
				move_uploaded_file($fileTmpName,$fileDestination);
				header("Location: index.php?uploadsuccess");
			}else{
				echo "Your file is too big!";
			}
		}else{
			echo "There was an error uploading your file";
		}
	}else{
		echo "You cannot upload files of this type!";
	}


?>
