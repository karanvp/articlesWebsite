<?php


$user = $_GET["userr"];

$pass = $_GET['passr'];



session_start();
    $_SESSION['user'] = $user;

$conn= mysqli_connect("localhost", "root", "root", "login");
  
    if(mysqli_connect_error())
        echo "Connection Error.";
    else
        echo "Database Connection Successfully.";


mysqli_select_db("login");

echo "hello +$user+";
echo "password is +$pass+";

 mysqli_query($conn, "INSERT INTO `users` (`id`, `username`, `password`, `category`) VALUES (NULL, '$user', '$pass', 'user');");

$result = mysqli_query($conn,"select * from users where username = '$user'");

$row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){

	echo "Registration Success!";
	echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
  echo $_SESSION['user'];
	header("Location: http://localhost:8888/articlesWebsite/homePage.php");
}
else{
	echo "Registration failed";
}

?>