<?php
	include('config.php');

	if (isset($_POST['btnInsert'])) {
		$name = $_POST['txtIname'];
		$image_name = $_FILES['fuIimg']['name'];
		$image_temp_name = $_FILES['fuIimg']['tmp_name'];
		$image_path =  "img/".$image_name;
		
		$insert_query = "INSERT INTO imagecrud VALUES (NULL,'$name','$image_path')";

		if(mysqli_query($conn,$insert_query,)){
			if(move_uploaded_file($image_temp_name, $image_path)){
				header("Location:viewimage.php");
			}
			else{
				echo "Image not moved in folder";
			}
		}
		else
		{
			echo "Not inserted";
		}
	}
	else{
		header("Location:index.php");
	}
?>