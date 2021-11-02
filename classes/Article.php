<?php

 include "./classes/Query.php";
//includes all articles related functions
class Article extends q\Query
{
 
    function __construct()
    {
        $this->connection = mysqli_connect(
            "localhost", "root", "root", "login"
        );
    }

    function findArticleByName($name)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where name = '$name'")
            : false);
        return $this->results;
    }

    function createArticles($name,$desc,$shortdesc,$author,$url)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "INSERT INTO `article` (`name`, `description`,`shortdescription`,`author`,`url`) VALUES ('$name', '$desc','$shortdesc','$author','$url');")
            : false);
        return $this->results;
    }

    function validateURL($url){
        $this->results = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $url)));
        return $this->results;
    }

    function checkIfContainsSpecialChars($url){
        $this->results = preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬]/', $url);
        return $this->results;
    }

    function findArticleById($id)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where ID = '$id'")
            : false);
        return $this->results;
    }
	function deleteAdmin($id)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "DELETE FROM `article` WHERE ID = '$id'")
            : false);
        return $this->results;
    }

	function deleteUser($author,$id)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "DELETE FROM `article` WHERE `author` = '$author' && ID = '$id'")
            : false);
        return $this->results;
    }

    function updateArticlesByAdmin($name,$aDesc,$aID)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "UPDATE `article` SET `name`='$name', `description`='$aDesc' WHERE  `ID` = '$aID'")
            : false);
        return $this->results;
    }
	function updateArticlesByUser($name,$aDesc,$author,$aID)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "UPDATE `article` SET `name`='$name', `description`='$aDesc' WHERE `author` = '$author' && `ID` = '$aID'")
            : false);
        return $this->results;
    }

	function findArticleByNameAndAuthor($name,$author)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where name = '$name' && `author` = '$author'  ")
            : false);
        return $this->results;
    }

  
};





?>