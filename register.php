<?php

include "./classes/Register.php";


    $register = new Register();
    $user = $_POST["userr"];
    $pass = md5($_POST['passr']);
    $cpass = md5($_POST['cpassr']);
    $email = $_POST["email"];

    session_start();
    $_SESSION['user'] = $user;

	$rs = $register->findUserDetails($user);

	if(mysqli_num_rows($rs)>0){
		echo "userexists ";

	}else{

        if($pass!=$cpass){
            echo "failed";
        }else{

        

	$register->insertNewUserDetails($user,$pass,$email);
	$result = $register->findUserDetails($user);


    if(mysqli_num_rows($result)>0){
    echo "success";
    $_SESSION['mbk'] = 'true';
        header("Location: http://localhost:8888/articlesWebsite/homePage.php");
    }
    else{

    echo "failed";

    }
        }

        }


    if($pass!==$cpass){
        echo "passwordincorrect";
    }

?>