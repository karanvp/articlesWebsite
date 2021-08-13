<?php



    

$selected = $_POST['q'];

$user = $_POST["user"];

$pass = md5($_POST['pass']);
// $cat = $_POST['category'];

session_start();
  
  $_SESSION['user'] = $user;
  $_SESSION['category'] = $selected;

// echo $user;
//   echo $pass;
//   echo $selected;


include('config.php');

// $categoryFetch = mysqli_query($conn,"select * from users where username = '$user' && password = '$pass' && category='$selected' ");



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