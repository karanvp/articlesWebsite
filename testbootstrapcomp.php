<?php

include "./classes/Query.php";
$q = new q\Query();

session_start();
//$user = $_SESSION['user'] ;

$pass = $_GET['pass'];
$id = $_GET['q'];
$url = $_GET['url'];
$result = $q->searchArticleByURL($url);
// $rtest = $q->searchArticleByURL($url);
// $rowtest = mysql_fetch_row($rtest);
// $id = $rowtest[4];

// $rtest = $q->searchArticleByURL($url);
// if (!$rtest) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
// $row = mysql_fetch_row($rtest);

// echo $row[0]; // 42
// echo $row[1]; // the email value
 // $id = $rowtest[4];

// echo "addsa";


$rows = array();

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
   
    // $id = $row[0];
}
$a =  json_encode($rows);
echo $a;


if(mysqli_num_rows($result)>0){
// echo "success";

}
else{
	echo " failed";
}

?>
