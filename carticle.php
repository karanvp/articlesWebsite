<?php

session_start();


$name = $_GET["ArticleName"];

$desc = $_GET['ArticleDesc'];
$shortdesc= $_GET['ArticleShort'];
$author =$_SESSION['user'];


$conn= mysqli_connect("localhost", "root", "root", "login");
  
    if(mysqli_connect_error())
        echo "Connection Error.";
    else
        echo "Database Connection Successfully.";


mysqli_select_db("login");


 mysqli_query($conn, "INSERT INTO `article` (`name`, `description`,`shortdescription`,`author`) VALUES ('$name', '$desc','$shortdesc','$author');");

$result = mysqli_query($conn,"select * from article where name = '$name'");

$row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){
	$alert = '<script> alert("Successful !P");</script>';  //not showing an alert box.
echo $alert;
	//echo "Article Entry Success!";
	header("Location: http://localhost:8888/articlesWebsite/createArticle.php?");


}
else{
	echo "Article Entry failed";
	
}

?>