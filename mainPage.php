<!doctype html>
<html lang="en">


<?php require_once("components/header.php") ?>


  <body style="background: red; background-image: url('artimg.jpeg');">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">


      <a class="navbar-brand" href="login.php">Login</a>
     <a class="navbar-brand" href="registration.php">Register</a>
     
  
  
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

//alert(b);


$(".profile").append(`
        <main>
        <br>
        <br>
    
       <h4 style="margin-left:20px"><b>ARTICLE NAME</b> :- ${repo.name}</h4>
       <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
        <h4 style="margin-left:20px"><b>ARTICLE DESCRIPTION</b> :- ${repo.description}</h4>
        
         
<a  class="button" href="mainPage.php">Back</a>
     </main> 


        `)



 })


        }

    })


});



//RESULT CLICK END



})
  

}
    })



})



</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php require_once("components/footer.php") ?>
</body>
</html>