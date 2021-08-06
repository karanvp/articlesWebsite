<?php

session_start();


$name = $_GET["updArticleName"];
$aID = $_GET["updArticleId"];
$aDesc = $_GET["upArticleDesc"];

$author =$_SESSION['user'];

echo $author;

$conn= mysqli_connect("localhost", "root", "root", "login");
  
    if(mysqli_connect_error())
        echo "Connection Error.";
    else
        echo "Database Connection Successfully.";


mysqli_select_db("login");


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