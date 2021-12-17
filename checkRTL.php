<?php
include "./classes/Query.php";

session_start();
$q = new q\Query();
//$user = $_SESSION['user'] ;
$lang=$_SESSION['lang'];
$result = $q->checkIfRTL($lang);
$row1 = mysqli_fetch_array($result);
echo $row1['RTL_enabled'];

$_SESSION['checkRTL'] = $row1['RTL_enabled'];
?>
