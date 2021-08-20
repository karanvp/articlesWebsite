<?php


include('config.php');
    

// $selected = $_POST['q'];


// $cat = $_POST['category'];


// echo $user;
//   echo $pass;
//   echo $selected;




// $categoryFetch = mysqli_query($conn,"select * from users where username = '$user' && password = '$pass' && category='$selected' ");



$r = mysqli_query($conn,"select * from users limit  10,10");



while($row = mysqli_fetch_array($r))
  {
  echo $row['username'];
  echo "\n";


  }

$tr = mysqli_query($conn,"select * from article");
$totalRecords = mysqli_num_rows($tr);
echo $totalRecords;



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<button onclick="ay()"></button>
</body>

<script type="text/javascript">
	
	const arr[];
	function ay(){
		alert("hello");
	}
</script>
</html>