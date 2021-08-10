<?php

session_start();


$name = $_GET["ArticleName"];
$desc = $_GET['ArticleDesc'];
$shortdesc= $_GET['ArticleShort'];
$author =$_SESSION['user'];



 include('config.php');



 mysqli_query($conn, "INSERT INTO `article` (`name`, `description`,`shortdescription`,`author`) VALUES ('$name', '$desc','$shortdesc','$author');");

$result = mysqli_query($conn,"select * from article where name = '$name'");

$row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){
	
	echo "<SCRIPT> //not showing me this
        alert('Success !')
        window.location.replace('homePage.php');
    </SCRIPT>";
	//echo "Article Entry Success!";
	


}
else{
	echo "Article Entry failed";
	
}

?>