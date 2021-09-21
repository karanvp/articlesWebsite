<?php

include "./classes/Query.php";
//  namespace q;
// use q\Query;
//includes all Login related functions
class Login extends q\Query{

  
    function __construct()
    {
        $this->connection = mysqli_connect(
            "localhost", "root", "root", "login"
        );
    }

	function findCategory($user)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select category from users where username = '$user'")
            : false);
        return $this->results;
    }

	function findTotalRecords()
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from article")
            : false);
        return $this->results;
    }

	function validateUser($user,$pass,$selected)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection,  "select * from users where username = '$user' && password = '$pass' && category='$selected' ")
            : false);
        return $this->results;
    }

   
}


?>