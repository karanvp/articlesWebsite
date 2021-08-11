<?php

session_start();


$name = $_GET["updArticleName"];
// $aID = $_GET["updArticleId"];

$aID = $_SESSION['currentArticle'];

$aDesc = $_GET["upArticleDesc"];

$author =$_SESSION['user'];

//echo $author;

include('config.php');

if($_SESSION['category']=="Admin"){

mysqli_query($conn, "UPDATE `article` SET `name`='$name', `description`='$aDesc' WHERE  `ID` = '$aID'");

$result = mysqli_query($conn,"select * from article where name = '$name'  ");




// mysql_num_rows($result)
	if(mysqli_num_rows($result)>0){
		echo "<SCRIPT> //not showing me this
        alert('Success !')
        window.location.replace('homePage.php');
   		 </SCRIPT>";;
	//echo "Article Entry Success!";


	}
	else{
	echo "<SCRIPT> //not showing me this
        alert('Failed !')
        window.location.replace('homePage.php');
    </SCRIPT>";
	
	}

}
else{
	mysqli_query($conn, "UPDATE `article` SET `name`='$name', `description`='$aDesc' WHERE `author` = '$author' && `ID` = '$aID'");

$result = mysqli_query($conn,"select * from article where name = '$name' && `author` = '$author'  ");




// mysql_num_rows($result)
	if(mysqli_num_rows($result)>0){
	echo "<SCRIPT> //not showing me this
        alert('Success !')
        window.location.replace('homePage.php');
    </SCRIPT>";;
	//echo "Article Entry Success!";


}	
	else{
	echo "<SCRIPT> //not showing me this
        alert('Failed !')
        window.location.replace('homePage.php');
    </SCRIPT>";
	
	}
}

 

?>