<?php require_once("components/head.php") ?>
<?php

session_start();

 include "./classes/Query.php"; 

 $email = $_SESSION['EMAIL'];
 $query = new q\Query(); 
 $query->DeleteSubscriber($email); 
if($query!=false){
    echo "<h1>You have Successfully unsubscribed !!</h1>";
}

?>