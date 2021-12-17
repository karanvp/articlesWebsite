<?php

include "./classes/Article.php";

        session_start();


        $name = $_POST["updArticleName"];
        $url = $name;
        $aID = $_SESSION['currentArticle'];
        $aDesc = $_POST["upArticleDesc"];
        $shortdesc = $_POST['upArticleShortDesc'];
        $author =$_SESSION['user'];
        $lang = $_POST['lang'];

        $query = new Article();

        if($_SESSION['category']=="Admin"){

        $query->updateArticlesByAdmin($name,$aDesc,$aID);

        $result = $query->findArticleByName($name);

            if(mysqli_num_rows($result)>0){
                echo "Success";
            }
            else{
            echo "Failed";
            }

        }
        else{
            $r = $query->checkIfArticleExists($aID);
            if(mysqli_num_rows($r)>0){
                $query->updateArticlesByUser($name,$aDesc,$author,$aID,$lang,$shortdesc);
               
            }

            $rbase = $query->checkIfArticleExistsWithBasePost($aID);
            if(mysqli_num_rows($rbase)>0){
            $query->updateArticlesWithBasePost($name,$aDesc,$author,$aID,$lang,$shortdesc);
            }
            // if($lang=='en'){
            //     $query->updateArticlesByUser($name,$aDesc,$author,$aID);
            // }else{
            //     $query->updateArticlesWithBasePost($name,$aDesc,$author,$aID,$lang);
            // }
           

       
        $result = $query->findArticleByNameAndAuthor($name,$author);

            if(mysqli_num_rows($result)>0){
            echo "Success";
            }	
            else{
            echo "Failed";
            }
        }

        

?>