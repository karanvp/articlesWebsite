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

    function findAllArticlesByOffset($offset,$totalPage)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article  order by id desc  limit  {$offset},{$totalPage}")
            : false);
        return $this->results;
    }

};

        session_start();
        //$user = $_SESSION['user'] ;
        $pass = $_GET['pass'];
        $query = new HomePage();
        $offset = $_GET['offset'];
        $totalPage=$_GET['total'];
        $result = $query->findAllArticlesByOffset($offset,$totalPage);
        $tr = $query->findAllArticles();
        $totalRecords = mysqli_num_rows($tr);
        $_SESSION['trecords'] = $totalRecords;

        $rows = array();
        while($r = mysqli_fetch_assoc($result)) {
            $rows[] = $r;
        }
        $a =  json_encode($rows);
        echo $a;
        $_SESSION['jsonQ'] = $a;


?>