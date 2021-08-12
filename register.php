<?php


$user = $_POST["userr"];

$pass = md5($_POST['passr']);
$cpass = md5($_POST['cpassr']);

$email = $_POST["email"];

session_start();
    $_SESSION['user'] = $user;

include('config.php');

if($user!=null && $pass!=null){

	if($pass==$cpass){


	$rs = mysqli_query($conn,"select * from users where username = '$user'");
	if(mysqli_num_rows($rs)>0){
		echo "user already exists";

	}else{
		mysqli_query($conn, "INSERT INTO `users` (`id`, `username`, `password`, `category`,`email`) VALUES (NULL, '$user', '$pass', 'user','$email');");

		$result = mysqli_query($conn,"select * from users where username = '$user'");

// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){
echo "success";
	
	//header("Location: http://localhost:8888/articlesWebsite/homePage.php");
}
else{

echo "failed";

}
	}
}
 
}



?>