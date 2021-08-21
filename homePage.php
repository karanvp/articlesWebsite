<!doctype html>
<html lang="en">
 

 <?php require_once("components/head.php") ?>


   <body style="background-color: rgba(160, 81, 45, 0.116);">
  
 
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

<?php require_once("sQuery.js") ?>









</script>

</body>
</html>