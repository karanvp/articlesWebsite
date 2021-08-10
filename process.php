<?php


$user = $_POST["user"];

$pass = $_POST['pass'];

session_start();
    $_SESSION['user'] = $user;


include('config.php');


$result = mysqli_query($conn,"select * from users where username = '$user' && password = '$pass' ");


$row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){

	echo "login Success!";
	echo $user;
	header("Location: http://localhost:8888/articlesWebsite/homePage.php");
}
else{
	echo "login failed";
}

?>