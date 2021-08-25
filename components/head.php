 <head>

  <!-- this is a comment -->
    <script src="jquery.js"></script>



    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    
    <title></title>

  



<style>
header {
  padding: 1em;
 
  background-color: rgba(160, 81, 45, 0.116);
}

     .profile .card{
 width: 100%;
 margin-bottom: 30px;


}

 
.navDesktop{
  visibility: visible;
}

.navDesktop a{
  text-decoration: none;
  color: black;
  margin-right: 10px;
  margin-bottom: 30px;
}

.navDesktop a:hover{
  color: crimson;
  padding: 10px;

}

#searchUser{
  padding-right: 1100px;
  padding-bottom: 10px;

}
  #menu{
      width: 35px;
      height: 30px;
      cursor: pointer;


    }


    .bar{
      height: 5px;
      width: 100%;
      background-color: #b81568;
      transition: 0.7s ease;
    }

    #bar1{
      transform: translateY(-4px);

    }

    #bar3{
      transform: translateY(4px);
      
    }

    .change .bar{
      background-color: #b81568;
    }


    .change #bar1{
      transform: translateY(4px) rotateZ(-45deg);
    }

    .change #bar3{
      transform: translateY(-6px) rotateZ(45deg);
    }

    .change #bar2{

      opacity: 0;
    }



    .nav li a{
      color: black;
      text-decoration: none;

    }

    .nav li a:hover{
      font-weight: bold;
    }

    .nav li{
      list-style: none;
      padding: 16px 0px;
    }

    .nav{
      padding: 0;
      margin: 0 20px;
      transition: 0.7s ease;
      display: none;

    }

    .change{
      display: block;
    }

  .buttonHome{
     background-color: red; 
     padding: 15px 32px;
     /*margin-left: 50px;*/
     color: white;


  
  }
 .pagination{
  margin-left: 800px;
}


.profile{
  display: flex;
  justify-content: space-around;

  flex-wrap: wrap;
}

.profile .card{
  background-color: white;
  margin-bottom: 20px;

}

 .textContainer input{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 200px;
    padding-right: 200px;
    margin-right: : 500px;
    margin-left: 10px;


  }

  .textContainer{
    margin-left: 600px;
  }
#menu{
  display: none;
}
@media (max-width: 650px){
  
.navDesktop{
  visibility: hidden;

}

#menu{
  display: block;
}
 
.textContainer{
  margin-left: 0px;
}


   

  .profile .card{

align-self: stretch;

flex-basis: 100%;
  }

 

#searchUser{
  padding-right: 350px;
}

.pagination{
  margin-left: 200px;
}

}

@media (min-width: 651px) and (max-width: 899px){
.pagination{
  margin-left: 400px;
}
.profile .card{
 width: 45%;
 
}

.textContainer{
  margin-left: 160px;
}

#menu{
  display: none;
}

}





</style>



    <!-- Custom styles for this template -->
 
   <!--  <link rel="stylesheet" href=css/style.css> -->

  <!--   <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
      <a class="navbar-brand" href="homePage.php">Home</a>
  <a class="navbar-brand" href="formCreateArticle.php">Create Article</a>
  

<input type="text" id="searchUser" class="form-control" placeholder="Search Article..." >
   
  <a class="navbar-brand" href="mainPage.php" style="margin-left: 1000px">Signout</a>
 

  
</nav> -->

<header>
    
<div id="menu-barb">
<div id="menu" onclick="onClickMenu()">
    
    <div id="bar1" class="bar"></div>
     <div id="bar2" class="bar"></div>
 <div id="bar3" class="bar"></div>
  </div>

 <ul class="nav" id="nav">
  <div id="td">
   
</div>
  </ul>
</div>

<input type="text" id="searchUser" class="form-control" placeholder="Search Article..." >

        <nav class="navDesktop">    
          <div id="tdRight">

             </div>
        </nav>

     

</header><script>

    



var a = String(<?php session_start(); echo $_SESSION['mbk']; ?>);

if(a.includes('true')){
  //alert("true");
$('#td').append(`


 <li><a href="homePage.php">Home</a></li>
    <li><a href="formCreateArticle.php">Create Articles</a></li>
   
   
<li><a onclick="signOut()">Sign out</a><li>
  `);

$('#tdRight').append(`

<a href="homePage.php" style="margin-left: 1300px;">Home</a>
            <a href="formCreateArticle.php">Create Article</a>
             
            <a onclick="signOut()">Sign out</a>
  `);


}

else{
  $('#td').append(` <li><a href="login.php">Login</a></li>
    <li><a href="registration.php">Register</a></li>`);


$('#tdRight').append(`

<a href="login.php" style="margin-left: 1300px;">Login</a>
            <a href="registration.php">Register</a>
             
            
      
  `);
}



</script>
<script type="text/javascript">


  

  function onClickMenu(){
    document.getElementById("nav").classList.toggle("change");
    document.getElementById("menu").classList.toggle("change");

    // document.getElementById("nav").style.display = "block";
  }


  function signOut(){



   // $('#td').empty();
$("#td").empty();
$('#td').append(` <li><a href="login.php">Login</a></li>
    <li><a href="registration.php">Register</a></li>`);



$.ajax( "test.php" )
  .done(function() {
    //alert( "success" );
  })

document.location.href = 'HomePage.php';

}


</script>


<!-- <div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div> -->

  </head>