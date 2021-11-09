<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
session_start();
// include "/Applications/MAMP/htdocs/articlesWebsite/classes/Query.php"; 
//$email = $_POST['EMAIL'];
// echo $email;

// $email =$_POST["EMAIL"];
// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//   $emailErr = "Invalid email format";
//   echo $emailErr;
// }
   // echo "VALID EMAIL !";


// $query = new q\Query(); 
// $query->insertEmailIntoSubs("testcron@gmail.com");



    echo "<br><br><br>";
   // echo "successful !";

    // $result = mysqli_query($conn,"SELECT * FROM users WHERE email='kesha@gmail.com'");
    // $row= mysqli_fetch_array($result);
 
    //  $token = md5($emailId).rand(10,9999);
 
    //  $expFormat = mktime(
    //  date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
    //  );
 
    // $expDate = date("Y-m-d H:i:s",$expFormat);
 
   // $update = mysqli_query($conn,"UPDATE users set  password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");
 
    $link = "<a href='/articlesWebsite/newsLetter.php'>Click To Visit Newsletter</a>";
 
    require_once('vendor/autoload.php');
 
    $mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
$mail->Username = "kukironny911@gmail.com";
            // GMAIL password
            $mail->Password = "Winner2019";
            $mail->SMTPSecure = "ssl";
            // sets GMAIL as the SMTP server
            $mail->Host = "smtp.gmail.com";
            // set the SMTP port for the GMAIL server
            $mail->Port = "465";
            $mail->From = 'kukironny911@gmail.com';
            $mail->FromName = 'Articles Website';
            // $mail->AddAddress('karanvpagare@gmail.com');
            // $mail->AddAddress('kvp9111@gmail.com');

            $connection = mysqli_connect(
                "localhost:8889", "root", "root", "login"
            );
            $result =  mysqli_query($connection, "select * from subscribers");

            while($row = mysqli_fetch_array($result)) {
                echo "<br>";
                echo "<br>";
                echo "<center>";
               
                // echo "<h3>".$row['email']."</h3>";
                 //array_push($a,$row['email']);
                 $mail->AddAddress($row['email']);
            }
           
//             $arrlength = count($_SESSION['subscriberEmailArray']);

// for($x = 0; $x < $arrlength; $x++) {
//  // echo $_SESSION['subscriberEmailArray'][$x];
//  $mail->AddAddress($_SESSION['subscriberEmailArray'][$x]);
// }



            $mail->Subject  =  'Newsletter!';
            $mail->IsHTML(true);
            $mail->Body    = 'Visit Link of Newsletter ' . $link . '';
    if($mail->Send())
    {
      echo "<h1>Check Your Email and Click on the link sent to your email</h1>";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  





?>