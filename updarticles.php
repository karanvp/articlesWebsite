<?php

session_start();


$name = $_GET["updArticleName"];
$aID = $_GET["updArticleId"];
$aDesc = $_GET["upArticleDesc"];

$author =$_SESSION['user'];

echo $author;

include('config.php');


 mysqli_query($conn, "UPDATE `article` SET `name`='$name', `description`='$aDesc' WHERE `author` = '$author' && `ID` = '$aID'");

$result = mysqli_query($conn,"select * from article where name = '$name' && `author` = '$author'  ");




// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){
	$alert = '<script> alert("Success !");</script>';  //not showing an alert box.
echo $alert;
header("Location: http://localhost:8888/articlesWebsite/homePage.php");
	//echo "Article Entry Success!";


}
else{
	$alert = '<script> alert("Failed !");</script>';  //not showing an alert box.

//header("Location: http://localhost:8888/login/createArticle.php?");

	
}

?>