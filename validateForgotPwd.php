<?php
if(isset($_POST['password-reset-token']) && $_POST['email'])
{
    include "config.php";
     
    // $emailId = $_POST['email'];
 
    // $result = mysqli_query($conn,"SELECT * FROM users WHERE email='kesha@gmail.com'");
 
    // $row= mysqli_fetch_array($result);
 

     echo "string";
     $token = md5($emailId).rand(10,9999);
 
     $expFormat = mktime(
     date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
     );
 
    $expDate = date("Y-m-d H:i:s",$expFormat);
 
   // $update = mysqli_query($conn,"UPDATE users set  password='" . $password . "', reset_link_token='" . $token . "' ,exp_date='" . $expDate . "' WHERE email='" . $emailId . "'");
 
    $link = "<a href='www.yourwebsite.com/reset-password.php?key=".$emailId."&token=".$token."'>Click To Reset password</a>";
 
    require_once('vendor/autoload.php');
 
    $mail = new PHPMailer();
 
 echo $mail;
 
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    // enable SMTP authentication
    $mail->SMTPAuth = true;                  
    // GMAIL username
    $mail->Username = "kvp911@gmail.com";
    // GMAIL password
    $mail->Password = "Winner2019";
    $mail->SMTPSecure = "ssl";  
    // sets GMAIL as the SMTP server
    $mail->Host = "smtp.gmail.com";
    // set the SMTP port for the GMAIL server
    $mail->Port = "465";
    $mail->From='kvp911@gmail.com';
    $mail->FromName='karan';
    $mail->AddAddress('karanvpagare@gmail.com', 'kar');
    $mail->Subject  =  'Reset Password';
    $mail->IsHTML(true);
    $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
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