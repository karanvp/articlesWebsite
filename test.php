<?php


include('config.php');
    

$selected = $_POST['q'];


// $cat = $_POST['category'];


// echo $user;
//   echo $pass;
//   echo $selected;




// $categoryFetch = mysqli_query($conn,"select * from users where username = '$user' && password = '$pass' && category='$selected' ");



$r = mysqli_query($conn,"select category from users where username = 'miranda'");

$row1 = mysqli_fetch_row($r);

echo $row1[0];





?>