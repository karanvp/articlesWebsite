<?php

session_start();


$name = $_GET["dArticleName"];




$conn= mysqli_connect("localhost", "root", "root", "login");
  
    if(mysqli_connect_error())
        echo "Connection Error.";
    else
        echo "Database Connection Successfully.";


mysqli_select_db("login");


 mysqli_query($conn, "DELETE FROM `article` WHERE name = '$name'");

$result = mysqli_query($conn,"select * from article where name = '$name'");

$row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){
	$alert = '<script> alert("failed !");</script>';  //not showing an alert box.
echo $alert;
	//echo "Article Entry Success!";


}
else{
	$alert = '<script> alert("Success !");</script>';  //not showing an alert box.
echo $alert;

header("Location: http://localhost:8888/articlesWebsite/createArticle.php?");

	
}

?>