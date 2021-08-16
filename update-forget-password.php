<?php
if(isset($_POST['password']))
{
include "config.php";
$email = $_POST['email'];
$token = $_POST['reset_link_token'];
$password = md5($_POST['password']);
$cpassword = md5($_POST['password']);

// echo "string";
// echo $email;
// echo $token;

if($password==$cpassword){


 mysqli_query($conn,"UPDATE users set  password='" . $password . "' WHERE email='" . $email . "'");
 echo '<p>Congratulations! Your password has been updated successfully.</p>';
header("Location: http://localhost:8888/articlesWebsite/homePage.php");
}
else{
	echo "Password dosen't match!";
}

}
?>