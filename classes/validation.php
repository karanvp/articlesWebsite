<?php

namespace validate;
// this is a test class.
class validation {
    
    
    public $request;
  

   
    function set_request($request) {
        $this->request = $request;
      }
      function get_request() {
        return $this->request;
      }

     public function validate(){
        // if(str_contains("login","login")){
        //     echo "login";
        // }
        $word = "login";
       
         
        // Test if string contains the word 
        if(strpos($this->request, $word) !== false){
            echo "Word Found!";
        } else{
            echo "Word Not Found!";
        }
       
     }


  }
  
  $obj1 = new validation();
//   $obj2 = new validation();


  $obj1->set_request("login");
   $obj1->validate();
//   $obj1->$request;
//   $obj2->set_request('register');

   //echo $obj1->get_request();

//   echo $obj1->get_request();
//   echo "<br>";
//   echo $obj2->get_request();

?>