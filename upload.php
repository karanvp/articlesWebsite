<?php 

include "./classes/Image.php";

session_start();
if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "db_conn.php";

	// echo "<pre>";
	// print_r($_FILES['my_image']);
	// echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	$title=$_POST['title'];
	$user = $_SESSION['user'];
	$imgID = $_POST['imgID'];

	
	$query = new Image();
		
	
	if ($error === 0) {
		
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				if($imgID){
		
					$query->updateImages($new_img_name,$title,$user,$imgID);
			
				}else{
					$query->insertNewImages($new_img_name,$title,$user);

				// $sql2 = "INSERT INTO Carousel(heading,user) values('$heading','{$_SESSION['user']}')";
				// mysqli_query($conn, $sql2);

				}
				
				header("Location: view.php");
			}else {
				$em = "You can't upload files of this type";
		        // header("Location: index.php?error=$em");
			}
		
	}else {
		$em = "unknown error occurred!";
		// header("Location: index.php?error=$em");
	}

}else {
	// header("Location: index.php");
}