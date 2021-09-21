<?php

include "./classes/Query.php";
//includes all Images related functions
class Image extends q\Query
{
  
    function __construct()
    {
        $this->connection = mysqli_connect(
            "localhost", "root", "root", "login"
        );
    }

    function updateImages($new_img_name,$title,$user,$imgID)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "UPDATE images
			SET  image_url='$new_img_name',image_title= '$title',author='$user'
			WHERE image_url = '$imgID';")
            : false);
        return $this->results;
    }

	function insertNewImages($new_img_name,$title,$user)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "INSERT INTO images(image_url,image_title,author) 
			VALUES('$new_img_name','$title','$user')")
            : false);
        return $this->results;
    }

   

    function deleteImageFromCarousel($id)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "DELETE FROM `images` WHERE image_url = '$id'")
            : false);
        return $this->results;
    }

    function findArticleById($id)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection,"select * from article where ID = '$id'")
            : false);
        return $this->results;
    }

};




?>