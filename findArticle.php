<?php

include "./classes/Query.php";
$q = new q\Query();

session_start();
//$user = $_SESSION['user'] ;

$pass = $_GET['pass'];
$id = $_GET['q'];
$result = $q->searchArticleById($id);
$rows = array();

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$a =  json_encode($rows);
echo $a;


if(mysqli_num_rows($result)>0){


}
else{
	echo " failed";
}

?>