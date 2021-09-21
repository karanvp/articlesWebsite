<?php

include "./classes/Query.php";

    session_start();
    $q = new q\Query();
    //$user = $_SESSION['user'] ;

    $name = $_GET['q'];
    $result = $q->findArticleByName($name);
    $rows = array();

    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    $a =  json_encode($rows);
    echo $a;


    if(mysqli_num_rows($result)>0){


    }
    else{
        echo " failed";
    }

?>