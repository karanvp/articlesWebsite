<!doctype html>
<html lang="en">
 
 <?php require_once("components/header.php") ?>

  <body style="background: red; background-image: url('artimg.jpeg');">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
<a class="navbar-brand" href="homePage.php">View Article</a>
  <a class="navbar-brand" href="formCreateArticle.php">Create Article</a>
  <a class="navbar-brand" href="formUpdateArticles.php">Update Article</a>
    
      <a class="navbar-brand" href="formDeleteArticles.php">Delete Article</a>

  
      <a class="navbar-brand" href="mainPage.php" style="margin-left: 1000px">Signout</a>
  
  
</nav>

 
  <br>
<div class="profile"></div><!-- /.container -->
<script>$(document).ready(function(){
 
   $.ajax({
        url:"hPage.php",
        data:{
         
        },
        success: function(data) {
          var obj =JSON.parse(data)
          const myJSON = JSON.stringify(obj);



    //alert(myJSON); // apple
 $.each(obj, function(index, repo){
  //alert(JSON.stringify(repo));


$(".profile").append(`
        <main>
        <br>
        <br>
    
    <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
       <h4 style="margin-left:20px"><b>ARTICLE TITLE</b> :- ${repo.name}</h4>
       <h4 style="margin-left:20px;"><b>ARTICLE SHORT DESCRIPTION</b> :- ${repo.shortdescription}</h4>
       <br><br>
       <input class="button" style="margin-left:20px;" type="button" id=${repo.ID} value="VIEW DETAILS"/>

</main>

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
var b = a + 100;

$(".profile").append(`
        <main>
        <br>
        <br>
    
       <h4 style="margin-left:20px"><b>ARTICLE NAME</b> :- ${repo.name}</h4>
       <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
        <h4 style="margin-left:20px"><b>ARTICLE DESCRIPTION</b> :- ${repo.description}</h4>
        <br><br>
        <input class="button" style="margin-left:20px;" type="button" id=${repo.ID} value="DELETE"/>
         <button class="button" id=${b} value="UPDATE"><a  href="formUpdateArticles.php" style="color:white">Update Article</a></button>
<a  class="button" href="homePage.php">Back</a>
     </main> 


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
var c = b-100;
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



})



</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>