<?php

include "./classes/Query.php";
//includes all Registration related functions
class Register extends q\Query{
	
  

    // function pr(){
    //     echo  "hello";
    // }
    function __construct()
    {
        $this->connection = mysqli_connect(
            "localhost", "root", "root", "login"
        );
    }

	function findUserDetails($user)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "select * from users where username = '$user'")
            : false);
        return $this->results;
    }

	function insertNewUserDetails($user,$pass,$email)
    {
        $this->results = ($this->connection ?
            mysqli_query($this->connection, "INSERT INTO `users` (`id`, `username`, `password`, `category`,`email`) VALUES (NULL, '$user', '$pass', 'user','$email');")
            : false);
        return $this->results;
    }
   
}


?>