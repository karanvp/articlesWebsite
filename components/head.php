 <head>

  <!-- this is a comment -->
    <script src="jquery.js"></script>



    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    
    <title></title>

  



    <link rel="stylesheet" href="style.css">



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


 <li><a href="home-page">Home</a></li>
    <li><a href="form-create-article">Create Articles</a></li>
    <li><a href="my-profile">My Profile</a></li>
    <li><a href="carousels">Create Carousel</a></li>
   
<li><a onclick="signOut()">Sign out</a><li>
  `);

$('#tdRight').append(`

<a href="home-page" style="margin-left: 650px;">Home</a>
            <a href="form-create-article">Create Article</a>
            <a href="my-profile">My Profile</a>
            <a href="carousels">Create Carousel</a>
            <a onclick="signOut()">Sign out</a>
  `);


}

else{
  $('#td').append(` <li><a href="login">Login</a></li>
    <li><a href="registration">Register</a></li>`);


$('#tdRight').append(`

<a href="login-page" style="margin-left: 800px;">Login</a>
            <a href="registration-page">Register</a>
             
            
      
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
$('#td').append(` <li><a href="login-page">Login</a></li>
    <li><a href="registration">Register</a></li>`);



$.ajax( "logout.php" )
  .done(function() {
    //alert( "success" );
  })

document.location.href = 'home-page';

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