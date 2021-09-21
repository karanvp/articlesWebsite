<?php
include "./classes/Article.php";

        session_start();

        $id = $_GET["q"];
        $author =$_SESSION['user'];

        $query = new Article();

        if($_SESSION['category']=="Admin"){

        $query->deleteAdmin($id);

        $result = $query->findArticleById($id);

        $row = mysqli_fetch_array($result);


        if(mysqli_num_rows($result)>0){
        echo "Failed";
        }
        else{
            echo "Success";
        }

        }

        else{



        $query->deleteUser($author,$id);

        $result = $query->findArticleById($id);

        $row = mysqli_fetch_array($result);


        if(mysqli_num_rows($result)>0){
            echo "Failed";
        }
        else{
            echo "Success";
        }
            
        }

?>