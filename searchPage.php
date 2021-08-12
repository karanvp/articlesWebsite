<?php
session_start();

//$user = $_SESSION['user'] ;




$name = $_GET['q'];

//echo $id;

$conn= mysqli_connect("localhost", "root", "root", "login");
  
    


mysqli_select_db("login");


$result = mysqli_query($conn,"select * from article where `name` LIKE  '$name' ");




$rows = array();
while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$a =  json_encode($rows);
echo $a;


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