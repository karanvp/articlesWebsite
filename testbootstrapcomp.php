<?php
session_start();
include "./classes/Article.php";
$query = new Article();

$language = $_SESSION['lang'];


$result=$query->fetchTranslation($language,'create article');
$result2=$query->fetchTranslation($language,'my profile');
$result3=$query->fetchTranslation($language,'create carousel');
$result4=$query->fetchTranslation($language,'login');
$result5=$query->fetchTranslation($language,'signout');
$result6=$query->fetchTranslation($language,'register');

 $row1 = mysqli_fetch_array($result);
 $_SESSION['create-article']= $row1['keyword_translation'];

// echo "<br>";
 $row2 = mysqli_fetch_array($result2);
 $_SESSION['my-profile']= $row2['keyword_translation'];
//  echo "<br>";
 $row3 = mysqli_fetch_array($result3);
 $_SESSION['create-carousel']= $row3['keyword_translation'];
//  echo "<br>";
 $row4 = mysqli_fetch_array($result4);
 $_SESSION['login']= $row4['keyword_translation'];
//  echo "<br>";
 $row5 = mysqli_fetch_array($result5);
 $_SESSION['signout']= $row5['keyword_translation'];
//  echo "<br>";
 $row6 = mysqli_fetch_array($result6);
 $_SESSION['register']= $row6['keyword_translation'];







// if(mysqli_num_rows($result)>0){
//     while ($row = $result -> fetch_row()) {
//         printf ("%s \n",  $row[2]);
//       }
//     } else{
//         echo "Failed";
//     }

?>