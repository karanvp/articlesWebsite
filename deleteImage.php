<?php
include "./classes/Image.php";

        session_start();


        $id = $_GET["q"];

        $query = new Image();
        $query->deleteImageFromCarousel($id);

        $result = $query->findArticleById($id);


        if(mysqli_num_rows($result)>0){
        echo "Failed";

        }
        else{
            echo "Success";

        }






?>