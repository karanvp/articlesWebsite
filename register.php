<?php


$user = $_POST["userr"];

$pass = $_POST['passr'];



session_start();
    $_SESSION['user'] = $user;

include('config.php');

if($user!=null && $pass!=null){
	$rs = mysqli_query($conn,"select * from users where username = '$user'");
	if(mysqli_num_rows($rs)>0){
$alert = '<script> alert("User already exists !");</script>';  
echo $alert;

	}else{
		mysqli_query($conn, "INSERT INTO `users` (`id`, `username`, `password`, `category`) VALUES (NULL, '$user', '$pass', 'user');");

		$result = mysqli_query($conn,"select * from users where username = '$user'");

// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){

	
	header("Location: http://localhost:8888/articlesWebsite/homePage.php");
}
else{
	$alert = '<script> alert("Registration failed");</script>';  
echo $alert;
}
	}

 
}



?>