<?php
include "./classes/Article.php";
$query = new Article();

$id = $_GET['id'];
// $lang_code = $_GET['lang_code'];
// $keyword = $_GET['keyword'];




 $query->deleteKeyword($id);

 $result = $query->fetchTranslationsWithID($id);

 if(mysqli_num_rows($result)>0){
    echo "Failed";
   
    }
    else{
        echo "Success";
    }

//$query->deleteLanguage('german');






?>
