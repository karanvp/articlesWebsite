<?php

include "./classes/Query.php";
class HomePage extends q\Query
{

  
    function __construct()
    {
        $this->connection = mysqli_connect(
            "localhost", "root", "root", "login"
        );
    }

    function findAllArticles()
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article")
            : false);
        return $this->results;
    }

    function findAllArticlesByOffset($offset,$totalPage,$lang)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article where lang = '{$lang}' order by id desc  limit  {$offset},{$totalPage}")
            : false);
        return $this->results;
    }

};

        session_start();
        //$user = $_SESSION['user'] ;
        $lang = $_GET['lang'];
        $pass = $_GET['pass'];
        $query = new HomePage();
        $offset = $_GET['offset'];
        $totalPage=$_GET['total'];
        $result = $query->findAllArticlesByOffset($offset,$totalPage,$lang);
        $tr = $query->findAllArticles();
        $totalRecords = mysqli_num_rows($tr);
        $_SESSION['trecords'] = $totalRecords;
        if(mysqli_num_rows($result)>0){

            $rows = array();
            while($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            $a =  json_encode($rows);
            echo $a;
            $_SESSION['jsonQ'] = $a;
        }else{
            echo "failed";
        }
        


?>