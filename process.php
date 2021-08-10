<?php


 if(isset($_POST['submit'])){
    if(!empty($_POST['catSelect'])) {
        $selected = $_POST['catSelect'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    }

$user = $_POST["user"];

$pass = $_POST['pass'];
// $cat = $_POST['category'];

session_start();
  
  $_SESSION['user'] = $user;
  $_SESSION['category'] = $selected;



include('config.php');

// $categoryFetch = mysqli_query($conn,"select * from users where username = '$user' && password = '$pass' && category='$selected' ");



$result = mysqli_query($conn,"select * from users where username = '$user' && password = '$pass' && category='$selected' ");


$row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){

	echo "login Success!";
	// echo $user;
	// echo $cat;
	//echo $categoryFetch;
	//echo strval($categoryFetch)
	header("Location: http://localhost:8888/articlesWebsite/homePage.php");
}
else{
	//echo $cat;
	echo "login failed";

}
?>