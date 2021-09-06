<?php
session_start();

//$user = $_SESSION['user'] ;



$pass = $_GET['pass'];


$conn= mysqli_connect("localhost", "root", "root", "login");
  
$offset = $_GET['offset'];
$totalPage=$_GET['total'];


mysqli_select_db("login");


$result = mysqli_query($conn,"select * from article where author ='{$_SESSION['user']}' order by id desc   limit  {$offset},{$totalPage} ");


$tr = mysqli_query($conn,"select * from article");
$totalRecords = mysqli_num_rows($tr);
$_SESSION['trecords'] = $totalRecords;

$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$a =  json_encode($rows);
echo $a;
$_SESSION['jsonQ'] = $a;

// mysql_num_rows($result)
if(mysqli_num_rows($result)>0){

	

// 	echo "<table border='1'>";
// while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
//     echo "<tr>";
//     foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
//         echo "<td>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
//     }
//     echo "</tr>";
// }
// echo "</table>";



}
else{
	echo " failed";
}

?>