<?php

include "./classes/Article.php";

        session_start();


        $name = $_GET["ArticleName"];
        $desc = $_GET['ArticleDesc'];
        $shortdesc= $_GET['ArticleShort'];
        $url = $_GET['url'];
        $author =$_SESSION['user'];
        $lang = $_GET['lang'];
        $query = new Article();

        if(empty($url)){    
            $url=$name;
        }

        if ($query->checkIfContainsSpecialChars($url))
            {
                
                echo "Failed";
            }

        else{

        
        $url = $query->validateURL($url);
       
        // if($lang=='hindi'){
        //     $query->createHindiArticles("adsz","adsz","adzs","ads","ads","29");
        // }else{
           
                $query->createArticles($name,$desc,$shortdesc,$author,$url,$lang);
            
            
        // }
        
       $num = (mysqli_num_rows($query->fetchLanguages()) - 1);

        $result = $query->findArticleByName($name);
        $row = mysqli_fetch_array($result);
        $base= $row['ID'];
        $url = $row['url'];

     //   $langarray = array( "hi", "pr","ge","mr","ch","ar","lb");
        $resultarray=$query->fetchLanguages();
        $langarray = array();
        if(mysqli_num_rows($resultarray)>0){
         while ($row = $resultarray -> fetch_row()) {
            // printf ("%s \n",  $row[2]);
             array_push($langarray,$row[2]);
           }
         } 

         array_shift($langarray);
        $arrlength = count($langarray);

        for ($x = 0; $x < $arrlength; $x++) {
          //  $query->createArticleswithBase($base);
          $query->createArticleswithBase($base,$langarray[$x],$url);
          }
        // $query->createArticleswithBase($base);
        // $query->createArticleswithBase($base);

      
        
        // for($x = 0; $x < $arrlength; $x++) {
        
        // }
        
        $row = mysqli_fetch_array($result);

        if(mysqli_num_rows($result)>0){
        echo "Success";
        }
        else{
            echo "Failed";
        }
    }

?>