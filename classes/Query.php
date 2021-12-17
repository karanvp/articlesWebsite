<?php
namespace q;
//includes all common queries and functions
class Query
{
    private $results;
    private $connection;
  

    function pr(){
        echo  "hello";
    }
    function __construct()
    {
        $this->connection = mysqli_connect(
            "localhost", "root", "root", "login"
        );
    }

    function Execute($query)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, $query)
            : false);
        return $this->results;
    }

    function checkSubscriptionStatus($email)
    {
        $this->results = ($this->connection ?
        mysqli_query($this->connection, "select * from subscribers where email ='{$email}' ")
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
    function fetchLanguages()
    {
        $this->results = ($this->connection ?
        mysqli_query($this->connection, "select * from languages ")
        : false);
    return $this->results;
    }
    function findArticleByLanguage($lang)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where `lang` = '$lang'")
            : false);
        return $this->results;
    }

    function checkIfRTL($lang)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from languages where lang_code = '$lang'")
            : false);
        return $this->results;
    }

    function checkIfUserExists($username)
    {
        $this->results = ($this->connection ?
        mysqli_query($this->connection, "select * from users where username ='{$username}'")
        : false);
    return $this->results;
    }
  

    function insertEmailIntoSubs($new_img_name)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "INSERT INTO subscribers(email) 
			VALUES('$new_img_name')")
            : false);
        return $this->results;
    }

    function fetchSubscriberEmails()
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from subscribers")
            : false);
        return $this->results;
    }

    function DeleteSubscriber($email)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "DELETE FROM `subscribers` WHERE email = '$email'")
            : false);
        return $this->results;
    }

    function findRecentArticles()
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article ORDER BY id desc limit 10   ")
            : false);
        return $this->results;
    }

    function findArticles()
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article")
            : false);
        return $this->results;
    }
    function findProfileArticles($us,$offset,$totalPage)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where author ='{$us}' order by id desc   limit  {$offset},{$totalPage} ")
            : false);
        return $this->results;
    }

    function searchArticleById($id)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where `id` = '$id' ")
            : false);
        return $this->results;
    }

    function searchArticleByURL($url)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where `url` = '$url' ")
            : false);
        return $this->results;
    }

    function searchArticleByURLandLang($url,$lang)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where `url` = '$url' AND `lang`='$lang' ")
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

    function findArticleByName($name)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where `name` LIKE  '%$name%' ")
            : false);
        return $this->results;
    }

    
    function updatePassword($password,$email)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "UPDATE users set  password='" . $password . "' WHERE email='" . $email . "'")
            : false);
        return $this->results;
    }

    function updateLangPreference($lang,$user)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "UPDATE users set `lang_preference`='$lang' where `username`='$user'")
            : false);
        return $this->results;
    }

    function findImagesByAuthor($currentUser)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection,"SELECT * FROM images where author = '{$currentUser}' ORDER BY id DESC")
            : false);
        return $this->results;
    }
    function findAllArticles($offset,$totalPage)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article  order by id desc  limit  {$offset},{$totalPage}")
            : false);
        return $this->results;
    }

    function Display()
   {
     while(($row = mysqli_fetch_row($this->results)))
       print_r($row);
   }
};

// $host = '127.0.0.1';
// $user = 'mysql user';
// $password = 'mysql user password';
// $database = 'products';
 

// $query = new Query( "localhost", "root", "root", "login");
// if($query->Execute(
//   'select * from users '
// ))
// {
//    $query->Display();
// }

?>