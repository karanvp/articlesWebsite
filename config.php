<?php


$conn= mysqli_connect("localhost", "root", "root", "login");
  
    if(mysqli_connect_error())
        echo "Connection Error.";
    


mysqli_select_db("login");
?>