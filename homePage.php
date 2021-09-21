<!doctype html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style type="text/css">
 


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
	<button id="prev"> PREV</button><span class="t"></span>

<button id="next">NEXT</button>
</div>
<br>
<div class="profile" id="prof"></div><!-- /.container -->
<script>


    

var offset = 0;
var total =6;
var pageNo=1;

	 



// var a = <?php include('config.php'); echo mysqli_num_rows(mysqli_query($conn,"select * from article")); ?>;
var a = <?php include "./classes/Query.php"; $query = new q\Query(); echo mysqli_num_rows($query->findArticles()); ?>;

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


$('#searchUser').on('keypress', function(e){
   
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
      <button class="buttonHome" type="button" id=${repo.ID} value="VIEW DETAILS"/>VIEW DETAILS</button>

</div>

       `)


})



$.each(obj, function(index, repo){
 let str1 = "#";
let str2 = repo.ID.toString();

let res = str1.concat(str2)

//alert(res);

$(res).click(function(){
// alert("The no was clicked."+str2);


$(".profile").empty();

$.ajax({
       url:"retreiveDesc.php?q="+repo.ID,
       
       success: function(data) {
         // alert(data);

       var obj =JSON.parse(data)
         const myJSON = JSON.stringify(obj);

   //alert(myJSON); // apple
$.each(obj, function(index, repo){
 //alert(JSON.stringify(repo));
var a = parseInt(repo.ID);
var b = a + 100000000000;

$(".profile").append(`
       <div class="card">
       <br>
       <br>
   
      <h4 style="margin-left:20px"><b>ARTICLE NAME</b> :- ${repo.name}</h4>
      <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
       <h4 style="margin-left:20px"><b>ARTICLE DESCRIPTION</b> :- ${repo.description}</h4>
       <br><br>

       <table style="margin-left:20px">
       <tr><td><button class="buttonHome" type="button" id=${repo.ID} >DELETE</button></td>
       <td><a  href="formUpdateArticles.php" style="color:white"><button class="buttonHome" id=${b} value="UPDATE">Update Article</button></a></td>
       <td><a  class="buttonHome" href="homePage.php" >Back</a></td></tr>
       
        </table>




    </div> 


       `)

$(res).click(function(){


// alert(document.getElementById(repo.ID).value);
//alert("."+repo.ID);
 $.ajax({
       url:"darticles.php?q="+repo.ID,
       
       success: function(data) {
         

   alert(data); // apple
       }
     })
})

$("#"+b).click(function(){


//alert("inside update");
var c = b-100000000000;
$.ajax({
       url:"sessionSetter.php?q="+c,
       
     
     })
 //alert(c);

})


})


       }

   })


});



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
      <button class="buttonHome"  type="button" id=${repo.ID} value="VIEW DETAILS">VIEW DETAILS</button>

</div>

       `)


})



$.each(obj, function(index, repo){
 let str1 = "#";
let str2 = repo.ID.toString();

let res = str1.concat(str2)

//alert(res);

$(res).click(function(){
// alert("The no was clicked."+str2);


$(".profile").empty();

$.ajax({
       url:"retreiveDesc.php?q="+repo.ID,
       
       success: function(data) {
         // alert(data);

       var obj =JSON.parse(data)
         const myJSON = JSON.stringify(obj);

   //alert(myJSON); // apple
$.each(obj, function(index, repo){
 //alert(JSON.stringify(repo));
var a = parseInt(repo.ID);
var b = a + 100000000000;

var checker = String(<?php session_start(); echo $_SESSION['mbk'] ;?>);
if(checker.includes('true')){
  

$(".profile").append(`
       <div class="card">
       <br>
       <br>
   <span id="info"></span><br><br>
      <h4 style="margin-left:20px"><b>ARTICLE NAME</b> :- ${repo.name}</h4>
      <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
       <h4 style="margin-left:20px"><b>ARTICLE DESCRIPTION</b> :- ${repo.description}</h4>
       <br><br>

       <table style="margin-left:20px">
       <tr><td><button class="buttonHome" type="button" id=${repo.ID} >DELETE</button></td>
       <td><a  href="formUpdateArticles.php" style="color:white"><button class="buttonHome" id=${b} value="UPDATE">Update Article</button></a></td>
       <td><a  class="buttonHome" href="homePage.php" >Back</a></td></tr>
       
        </table>

    </div> 


       `)}
       else{
        $(".profile").append(`
       <div class="card">
       <br>
       <br>
   <span id="info"></span><br><br>
      <h4 style="margin-left:20px"><b>ARTICLE NAME</b> :- ${repo.name}</h4>
      <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
       <h4 style="margin-left:20px"><b>ARTICLE DESCRIPTION</b> :- ${repo.description}</h4>
       <br><br>

       <table style="margin-left:20px">
       
       <td><a  class="buttonHome" href="homePage.php" >Back</a></td></tr>
       
        </table>

    </div> 


       `)
       }

$(res).click(function(){


// alert(document.getElementById(repo.ID).value);
//alert("."+repo.ID);
 $.ajax({
       url:"darticles.php?q="+repo.ID,
       
       success: function(data) {
    if(data.includes("Success")){
         //Alert.render(response);
       //  window.location.replace('homePage.php');

       $("#info").empty();
 $("#info").append(`
      <b style="color:green;">**Success!</b>
    
       `)
     setTimeout(function(){window.location.replace('homePage.php');}, 2000);
       }      
if(data.includes("Failed")){
 $("#info").empty();
 $("#info").append(`<b style="color:red;">**failed</b>`);
 document.getElementById('userr').style.borderColor = "red";
}
   //alert(data); // apple
       }
     })
})

$("#"+b).click(function(){


//alert("inside update");
var c = b-100000000000;
$.ajax({
       url:"sessionSetter.php?q="+c,
       
     
     })
 //alert(c);

})


})


       }

   })


});



})
 

} // success ends here


   })

}
refresh();










</script>
<?php require_once("components/footer.php") ?>
</body>
</html>