<!doctype html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style type="text/css">
     .button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 10px;
  width: 230px;
  
  
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

 #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 130px;
}

.bottom-left {
  position: absolute;
  bottom: 408px;
  font-weight: bold;
  left: 810px;
}



@media (min-width:950px){
.item img{
  height:700px;
}
}
</style>
 <?php require_once("components/head.php") ?>


   <body>

   <div class="jumbotron text-center">
    
    <div class="container">
      
      <h1>Welcome to my Website</h1>
      <p>It has survived not only five centuries, but also the leap into electronic typesetting,</p>

     
      <a href="info.php"><button class="button"><span>Read more</span></button></a>
    </div>      


    </div>




 <div id="logs"></div>
  <br>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="owl-carousel owl-theme" id="owl">

    <div class="item"><img src="1.jpg" alt="" id="img1"></div>
    <div class="item"><img src="2.jpg" alt="" id="img2"></div>
    <div class="item"><img src="3.jpg" alt="" id="img3"></div>
    <div class="item"><img src="4.jpg" alt="" id="img4"></div>
    <!-- <div class="item"><img src="beach.jpeg" alt=""></div>
    <div class="item"><img src="juventus.jpeg" alt=""></div> -->
    
  
</div>

<script>
// $('#owl').append(`<div class="item"><img src="3.jpg" alt=""></div>`);


$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:4000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:1
        }
    }
})

</script>

<br><br>
<div class="pagination" id="pag">
	<button id="prev" class="btn btn-danger btn-sm"> PREV</button>&nbsp;&nbsp;<span class="t"></span>&nbsp;&nbsp;

<button id="next" class="btn btn-danger btn-sm">NEXT</button>
</div>
<br>
<div class="profile" id="prof"></div><!-- /.container -->
<script>


    

var offset = 0;
var total =6;
var pageNo=1;
var a = <?php include "./classes/Query.php"; $query = new q\Query(); echo mysqli_num_rows($query->findArticles()); ?>;

 var tpages = Math.ceil(parseInt(a)/total);

for(var i=0;i<tpages;i++){
 $(".t").append(`<button class="btn btn-danger btn-sm" onclick="ay(${i+1})" id=${i}>${i+1}</button>&nbsp;`);
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
offset-=total;

$(".profile").empty();
refresh();	
}



});
$("#next").click(function(){
 // alert("The next was clicked.");
// offset+=5;
// total=5;


if(offset>=0 && offset<tpages){
offset+=total;

$(".profile").empty();
refresh();	
}

});


$('#searchUserz').on('keypress', function(e){
   
   if(e.which == 13) {

     $(".profile").empty();
       let name = e.target.value;
       $.ajax({
       url:"searchPage.php?q="+name,
       success: function(data) {

         //alert(data);

         var obj =JSON.parse(data)
         const myJSON = JSON.stringify(obj);



   //alert(myJSON); // apple
$.each(obj, function(index, repo){
 //alert(JSON.stringify(repo));


$(".profile").append(`

 
       <div class="card">
       <br>
       <br>
   
   <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
      <h4 style="margin-left:20px"><b>ARTICLE TITLE</b> :- ${repo.name}</h4>
      <h4 style="margin-left:20px;"><b>ARTICLE SHORT DESCRIPTION</b> :- ${repo.shortdescription}</h4>
      <br><br>
      <a  href="retreiveDesc.php?q=${repo.ID}" style="color:white"><button class="btn btn-danger btn-lg"  type="button" id=${repo.ID} value="VIEW DETAILS">VIEW DETAILS</button></a>

</div>

       `)


})



  
   
       }

     })
   }



 })
function refresh(){



  $.ajax({
       url:"hPage.php",
       data:{
        'offset':offset,
        'total':total
       },
       success: function(data) {
         var obj =JSON.parse(data)
         const myJSON = JSON.stringify(obj);



   //alert(myJSON); // apple
$.each(obj, function(index, repo){
 //alert(JSON.stringify(repo));


$(".profile").append(`


       <div class="card">
       <br>
       <br>
   
   <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
      <h4 style="margin-left:20px"><b>ARTICLE TITLE</b> :- ${repo.name}</h4>
      <h4 style="margin-left:20px;"><b>ARTICLE SHORT DESCRIPTION</b> :- ${repo.shortdescription}</h4>
      <br><br>
      <a  href="retreiveDesc/${repo.ID}" style="color:white"><button class="btn btn-danger btn-lg"  type="button" id=${repo.ID} value="VIEW DETAILS">VIEW DETAILS</button></a>

</div>

       `)


})



 

} // success ends here


   })

}
refresh();










</script>

<button onclick="topFunction()" id="myBtn" title="Go to top">Scroll to Top</button>



<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<?php require_once("components/footer.php") ?>
</body>
</html>