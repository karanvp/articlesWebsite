<!doctype html>
<html lang="en">


  <head>
    <link rel="stylesheet" href="mystyle.css">
    <script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Main Page</title>
 <!--    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/"> -->
    
    <link href="bootstrap.min.css" rel="stylesheet">
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

@media (max-width: 576px) {
 

  .profile {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    margin: 0px !important;
  }

  .profile .card{
  	padding-left: : 100px !important;
    flex: 1;
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
  <div style="margin-left: 800px;">
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


if(offset>=0 && offset<a-1){
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