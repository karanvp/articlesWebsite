<?php

session_start();


$id = $_GET["dArticleId"];

$author =$_SESSION['user'];

//echo $_SESSION['category'];


include('config.php');

if($_SESSION['category']=="Admin"){

// echo "<SCRIPT> //not showing me this
//         alert('alert')
//         window.location.replace('homePage.php');
//     </SCRIPT>";

mysqli_query($conn, "DELETE FROM `article` WHERE ID = '$id'");

$result = mysqli_query($conn,"select * from article where ID = '$id'");

$row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){
	echo "<SCRIPT> //not showing me this
        alert('Failed !')
        window.location.replace('homePage.php');
    </SCRIPT>";


}
else{
	echo "<SCRIPT> //not showing me this
        alert('Success !')
        window.location.replace('homePage.php');
    </SCRIPT>";

}



}

else{



 mysqli_query($conn, "DELETE FROM `article` WHERE `author` = '$author' && ID = '$id'");

$result = mysqli_query($conn,"select * from article where ID = '$id'");

$row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){
	echo "<SCRIPT> //not showing me this
        alert('Failed !')
        window.location.replace('homePage.php');
    </SCRIPT>";
	//echo "Article Entry Success!";


}
else{
	echo "<SCRIPT> //not showing me this
        alert('Success !')
        window.location.replace('homePage.php');
    </SCRIPT>";

}
	
}

?>