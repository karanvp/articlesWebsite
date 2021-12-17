<?php
include "./classes/Article.php";
$query = new Article();

$language =  $query->validateURL($_GET['language']);
$lang_code = $query->validateURL($_GET['lang_code']);
$rtlenabled = $query->validateURL($_GET['rtl']);


if($query->checkIfContainsSpecialChars($_GET['language'])){
    echo "Failed";
}else{


 $query->createLanguage($language,$lang_code,$rtlenabled);

 $result = $query->findLanguage($language);

 if(mysqli_num_rows($result)>0){
    echo "Success";
    }
    else{
        echo "Failed";
    }

//$query->deleteLanguage('german');


}



?>
