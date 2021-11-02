<?php

include "./classes/Article.php";

        session_start();


        $name = $_GET["ArticleName"];
        $desc = $_GET['ArticleDesc'];
        $shortdesc= $_GET['ArticleShort'];
        $url = $_GET['url'];
        $author =$_SESSION['user'];
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
       
        $query->createArticles($name,$desc,$shortdesc,$author,$url);

        $result = $query->findArticleByName($name);

        $row = mysqli_fetch_array($result);

        if(mysqli_num_rows($result)>0){
        echo "Success";
        }
        else{
            echo "Failed";
        }
    }

?>