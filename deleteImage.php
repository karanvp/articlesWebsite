<?php

session_start();

include('config.php');

//$id = $_GET["dArticleId"];
// $author =$_SESSION['user'];
//echo $_SESSION['category'];

$id = $_GET["q"];

mysqli_query($conn, "DELETE FROM `images` WHERE image_url = '$id'");

$result = mysqli_query($conn,"select * from article where ID = '$id'");

// $row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){
echo "Failed";


}
else{
	echo "Success";

}






?>