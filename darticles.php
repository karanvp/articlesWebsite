<?php

session_start();


$id = $_GET["dArticleId"];

$author =$_SESSION['user'];




include('config.php');

if($category=="admin"){

}
else{



 mysqli_query($conn, "DELETE FROM `article` WHERE `author` = '$author' && ID = '$id'");

$result = mysqli_query($conn,"select * from article where ID = '$id'");

$row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){
	$alert = '<script> alert("failed !");</script>';  //not showing an alert box.
echo $alert;

header("Location: http://localhost:8888/articlesWebsite/homePage.php");
	//echo "Article Entry Success!";


}
else{
	$alert = '<script> alert("Success !");</script>';  //not showing an alert box.
echo $alert;

}
	
}

?>