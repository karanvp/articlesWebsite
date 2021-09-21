<?php

include "./classes/Article.php";

        session_start();


        $name = $_GET["ArticleName"];
        $desc = $_GET['ArticleDesc'];
        $shortdesc= $_GET['ArticleShort'];
        $author =$_SESSION['user'];

        $query = new Article();
        $query->createArticles($name,$desc,$shortdesc,$author);

        $result = $query->findArticleByName($name);

        $row = mysqli_fetch_array($result);

        if(mysqli_num_rows($result)>0){
        echo "Success";
        }
        else{
            echo "Failed";
        }

?>