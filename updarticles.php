<?php

include "./classes/Article.php";

        session_start();


        $name = $_POST["updArticleName"];
        $aID = $_SESSION['currentArticle'];
        $aDesc = $_POST["upArticleDesc"];
        $author =$_SESSION['user'];
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
        $query->updateArticlesByUser($name,$aDesc,$author,$aID);
        $result = $query->findArticleByNameAndAuthor($name,$author);

            if(mysqli_num_rows($result)>0){
            echo "Success";
            }	
            else{
            echo "Failed";
            }
        }

        

?>