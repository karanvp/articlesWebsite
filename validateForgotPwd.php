<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    include "config.php";
     
     $email = $_POST['email'];
 
    // $result = mysqli_query($conn,"SELECT * FROM users WHERE email='kesha@gmail.com'");
 
    // $row= mysqli_fetch_array($result);
 

    
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
   // $update = mysqli_query($conn,"UPDATE users set  password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");
 
    $link = "<a href='http://localhost/articlesWebsite/reset-password.php?email=".$email."&token=".$token."'>Click To Reset password</a>";
 
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
            $mail->AddAddress('karanvpagare@gmail.com', 'Temp User');
            $mail->Subject  =  'Reset Password';
            $mail->IsHTML(true);
            $mail->Body    = 'Click On This Link to Reset Password ' . $link . '';
    if($mail->Send())
    {
      echo "Check Your Email and Click on the link sent to your email";
    }
    else
    {
      echo "Mail Error - >".$mail->ErrorInfo;
    }
  
}
?>