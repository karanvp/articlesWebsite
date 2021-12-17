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

    function fetchTranslation($lang,$keyword)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from translation where lang_code='$lang' and keyword='$keyword'")
            : false);
        return $this->results;
    }


    function createArticles($name,$desc,$shortdesc,$author,$url,$lang)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "INSERT INTO `article` (`name`, `description`,`shortdescription`,`author`,`url`,`lang`) VALUES ('$name', '$desc','$shortdesc','$author','$url','$lang');")
            : false);
        return $this->results;
    }

    function createLanguage($name,$lang,$RTL_enabled)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "INSERT INTO `languages` (`name`, `lang_code`,`RTL_enabled`) VALUES ('$name', '$lang','$RTL_enabled');")
            : false);
        return $this->results;
    }

    function createkeyword($keyword,$keyword_translation,$lang,$lang_code)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "INSERT INTO `translation` (`keyword`, `keyword_translation`,`language`,`lang_code`) VALUES ('$keyword', '$keyword_translation','$lang','$lang_code');")
            : false);
        return $this->results;
    }

    function deleteLanguage($name)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "DELETE FROM `languages` WHERE `name` = '$name'")
            : false);
        return $this->results;
    }

    function deleteKeyword($id)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "DELETE FROM `translation` WHERE `ID` = '$id' ")
            : false);
        return $this->results;
    }

    function createArticleswithBase($base,$lang,$url)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "INSERT INTO `article` (`base_post_ID`,`lang`,`url`) VALUES ('$base','$lang','$url');")
            : false);
        return $this->results;
    }

    function createHindiArticles($name,$desc,$shortdesc,$url,$lang,$id)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "INSERT INTO `article_translation`( `title`, `shortdescription`, `description`, `url`, `language`, `ID`) VALUES ('$name','$shortdesc','$desc','$url','$lang','$id');")
            : false);
        return $this->results;
    }

    function fetchLanguages()
    {
        $this->results = ($this->connection ?
        mysqli_query($this->connection, "select * from languages ")
        : false);
    return $this->results;
    }

    function fetchTranslations()
    {
        $this->results = ($this->connection ?
        mysqli_query($this->connection, "select * from translation ")
        : false);
    return $this->results;
    }

    function fetchTranslationsWithID($id)
    {
        $this->results = ($this->connection ?
        mysqli_query($this->connection, "select * from translation where `ID` = '$id' ")
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

  

    function findLanguage($language)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from languages where name  = '$language'")
            : false);
        return $this->results;
    }

    function updateLanguages($name,$lang,$rtl)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "UPDATE `languages` SET `name`='$name', `lang_code`='$lang',`RTL_enabled`='$rtl' WHERE  `name` = '$name'")
            : false);
        return $this->results;
    }

    function findArticleByBaseId($id)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where base_post_ID = '$id'")
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

    
	function updateArticlesByUser($name,$aDesc,$author,$aID,$lang,$shortdesc)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "UPDATE `article` SET `name`='$name', `description`='$aDesc', `shortdescription`='$shortdesc' WHERE `author` = '$author' && `ID` = '$aID' && `lang`= '$lang' ")
            : false);
        return $this->results;
    }

    function updateArticlesWithBasePost($name,$aDesc,$author,$base,$lang,$shortdesc)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "UPDATE `article` SET `name`='$name', `description`='$aDesc',`author` = '$author' ,`shortdescription`='$shortdesc'  WHERE `lang`='$lang' && `base_post_ID` = '$base'")
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
    function checkIfArticleExists($base)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where ID = '$base'  ")
            : false);
        return $this->results;
    }
    function checkIfArticleExistsWithBasePost($base)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where base_post_ID = '$base'  ")
            : false);
        return $this->results;
    }
  
};





?>