<?php
include "./classes/Article.php";
$query = new Article();

$language = $_GET['language'];




 $query->deleteLanguage($language);

 $result = $query->findLanguage($language);

 if(mysqli_num_rows($result)>0){
    echo "Failed";
    }
    else{
        echo "Success";
    }

//$query->deleteLanguage('german');






?>
