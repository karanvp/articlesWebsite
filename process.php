<?php


$user = $_GET["user"];

$pass = $_GET['pass'];

session_start();
    $_SESSION['user'] = $user;


$conn= mysqli_connect("localhost", "root", "root", "login");
  
    if(mysqli_connect_error())
        echo "Connection Error.";
    else
        echo "Database Connection Successfully.";


mysqli_select_db("login");


$result = mysqli_query($conn,"select * from users where username = '$user' && password = '$pass' ");


$row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){

	echo "login Success!";
	echo $user;
	header("Location: http://localhost:8888/login/homePage.php");
}
else{
	echo "login failed";
}

?>