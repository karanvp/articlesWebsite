<?php
include "./classes/Article.php";
$query = new Article();

$language = $_GET['language'];
$lang_code = $_GET['lang_code'];
$rtlenabled = $_GET['rtl'];



 $query->updateLanguages($language,$lang_code,$rtlenabled);

 $result = $query->findLanguage($language);

 if(mysqli_num_rows($result)>0){
    echo "Success";
    }
    else{
        echo "Failed";
    }

//$query->deleteLanguage('german');






?>
