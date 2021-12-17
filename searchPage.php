<?php

include "./classes/Query.php";

    session_start();
    $q = new q\Query();
    //$user = $_SESSION['user'] ;

    $name = $_GET['q'];
    $lang = $_SESSION['lang'];

    

    $result = $q->findArticleByName($name);

   
   
    $rows = array();

    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }

    if($lang!='en'){
       
        $row1 = mysqli_fetch_array($result);
       $current_ID =  $rows[0]['ID'];
    $result1 = $q->findArticleByBaseId($current_ID);
    $rows = array();
    while($r = mysqli_fetch_assoc($result1)) {
       $rows[] = $r;
   }
    }

        



    $a =  json_encode($rows);
    echo $a;

    


    if(mysqli_num_rows($result)>0){


    }
    else{
        echo " failed";
    }

?>