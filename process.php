<?php

// include "./classes/query.php";
//namespace q;

 include "./classes/Login.php";



session_start();

include('config.php');
    
$q = new Login();

$_SESSION['mbk'] = 'true';

$user = $_POST["user"];

$pass = md5($_POST['pass']);
// $cat = $_POST['category'];


  
  $_SESSION['user'] = $user;
  $_SESSION['tracker'] = "true";

$tr = $q->findTotalRecords();
$totalRecords = mysqli_num_rows($tr);
$_SESSION['trecords'] = $totalRecords;


  $r = $q->findCategory($user);

$row1 = mysqli_fetch_row($r);

$selected =  $row1[0];

  $_SESSION['category'] = $selected;

  //$result = mysqli_query($conn,"select * from users where username = '$user' && password = '$pass' && category='$selected' ");
  
  
  

//   $p = md5("Winner2022");
 $result1 = $q->validateUser($user,$pass,$selected);
// $row = mysqli_fetch_array($result);


// mysql_num_rows($result)
if(mysqli_num_rows($result1)>0){

	echo "Success ";
	// echo $user;
	// echo $cat;
	//echo $categoryFetch;
	//echo strval($categoryFetch)
	//header("Location: http://localhost:8888/articlesWebsite/homePage.php");
}
else{
	//echo $cat;
	echo "Failed";


}

?>