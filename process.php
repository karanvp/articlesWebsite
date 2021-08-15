<?php


include('config.php');
    
session_start();


$user = $_POST["user"];

$pass = md5($_POST['pass']);
// $cat = $_POST['category'];


  
  $_SESSION['user'] = $user;



  $r = mysqli_query($conn,"select category from users where username = '$user'");

$row1 = mysqli_fetch_row($r);

$selected =  $row1[0];

  $_SESSION['category'] = $selected;

$result = mysqli_query($conn,"select * from users where username = '$user' && password = '$pass' && category='$selected' ");


$row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){

	echo "Success ";
	// echo $user;
	// echo $cat;
	//echo $categoryFetch;
	//echo strval($categoryFetch)
	//header("Location: http://localhost:8888/articlesWebsite/homePage.php");
}
else{
	//echo $cat;
	echo "Failed";


}
?>