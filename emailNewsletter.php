<?php require_once("components/head.php") ?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include "./classes/Query.php"; 
//$email = $_POST['EMAIL'];
// echo $email;

$email =$_POST["EMAIL"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
  echo $emailErr;
}else{
   // echo "VALID EMAIL !";


$query = new q\Query(); 

$query->insertEmailIntoSubs($email);


if($query!=false){
    echo "<br><br><br>";
    echo "<h1>You have registered Successfully !</h1>";
   // echo "successful !";

    // $result = mysqli_query($conn,"SELECT * FROM users WHERE email='kesha@gmail.com'");
    // $row= mysqli_fetch_array($result);
 
    //  $token = md5($emailId).rand(10,9999);
 
    //  $expFormat = mktime(
    //  date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
    //  );
 
    // $expDate = date("Y-m-d H:i:s",$expFormat);
 
   // $update = mysqli_query($conn,"UPDATE users set  password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");
 
}}


?>