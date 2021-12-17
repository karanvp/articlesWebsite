<?php
include "./classes/Article.php";
$query = new Article();

$language = $_GET['language'];
$lang_code = $_GET['lang_code'];
$keyword = $_GET['keyword'];
$keytrans = $_GET['keytrans'];



 $query->createkeyword($keyword,$keytrans,$language,$lang_code);

 $result = $query->fetchTranslation($lang_code,$keyword);

 if(mysqli_num_rows($result)>0){
    echo "Success";
    }
    else{
        echo "Failed";
    }

//$query->deleteLanguage('german');






?>
