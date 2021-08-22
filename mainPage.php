<!doctype html>
<html lang="en">


  <head>
    <link rel="stylesheet" href="mystyle.css">
    <script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Main Page</title>
 <!--    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/"> -->
    
    <!-- <link href="bootstrap.min.css" rel="stylesheet"> --> 
    <!-- link above -->


   <style type="text/css">
   	
   	header {
  padding: 1em;
  display: flex;

  align-items: center;
  background-color: rgba(160, 81, 45, 0.116);
}

header nav{
flex: 1;
}
header nav a {
  margin: 5px;
  font-size: 14px;
}

a {
  text-decoration: none;
  color: #2e2e2e;
}
a:hover {
  color: crimson;
}

.profile .card{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 17px;
}

@media(min-width: 577px){
  .profile .card{
    margin-top: 30px;
  margin-bottom: 120px;
  margin-left: 100px;
  margin-right: 100px;
  background-color: white;

  padding-bottom: 20px;
}
  .profile .button{
   
margin-right: 50px;

margin-left: 1200px;
    
   
  }

  .profile input{
    margin-left: 50px;
  }
}

.pagination{
  margin-left: 800px;
}

@media (max-width: 576px) {
 
 /*#searchUser{
padding-left:250px; 


 }*/

 #searchUser{
 
  padding-right: 250px;
   text-align: center;

 }

 .pagination{
margin-left: 200px;
 }

 

  .profile {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    
    
    justify-content: space-between;


  }

 .profile .card{
/*justify-content: space-around;*/
  	/*padding-left: : 100px !important;*/
    flex: 1;
    width: 100%;
    margin-bottom: 30px;
    
    background-color: white;
    padding: 10px
  
  }

  .profile .button{
    
   /* padding-left: 30px;
    padding-right: 30px;*/
  }

  .profile .card .button{
    margin-left: 350px;
   padding: 10px;
  }
}
   </style>
  <header>
        <!-- flex container -->
       
        <nav>
            <a href="login.php">Login</a>
            <a href="registration.php">Register</a>
            <input type="text" id="searchUser"  placeholder="Search Article...">
        </nav>
        
    </header>
  

    
  </head>

	



  <body style="background-color: rgba(160, 81, 45, 0.116);">
<!--     <nav class="navbar navbar-expand-md navbar-dark bg-dark ">


      <a class="navbar-brand" href="login.php">Login</a>
     <a class="navbar-brand" href="registration.php">Register</a>
     <input type="text" id="searchUser" class="form-control" placeholder="Search Article..." style="margin-right: 1200px;margin-left: 100px;">
     
  
  
</nav> -->



 
  <br>
  <div class="pagination">
	<button id="prev"> PREV</button><span class="t"></span>

<button id="next">NEXT</button>
</div>
<div class="profile"></div><!-- /.container -->
<script>

var offset = 0;
var total =3;
var pageNo=1;

	

var a = <?php session_start(); echo $_SESSION['trecords'] ?>;

 var tpages = Math.ceil(parseInt(a)/total);

for(var i=0;i<tpages;i++){
 $(".t").append(`<button onclick="ay(${i+1})" id=${i}>${i+1}</button>`);
}

function ay(i){
		//alert(i);

offset=(i-1)*total;
// alert(offset);
$(".profile").empty();
refresh();	

	}


// $("#0").click(function(){
// 	alert("you clicked");
// })

// $.each(function( index ) {
//   console.log( index + ": " + $( this ).text() );
// });


$("#prev").click(function(){
  //alert("The prev was clicked.");
if(offset>0){
offset-=3;

$(".profile").empty();
refresh();	
}



});
$("#next").click(function(){
 // alert("The next was clicked.");
// offset+=5;
// total=5;


if(offset>=0 && offset<tpages){
offset+=3;

$(".profile").empty();
refresh();	
}

});
<?php require_once("sQueryMain.js") ?>

</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>