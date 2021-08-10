<!doctype html>
<html lang="en">
  <head>
   <link rel="stylesheet" href="mystyle.css">
    <script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Home</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">
    <!-- Custom styles for this template -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=css/style.css>
  </head>
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
    <h4 style="margin-left:20px" ><b>ARTICLE ID</b>:- ${repo.ID}</h4>
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


$(".profile").append(`
        <main>
        <br>
        <br>
    <h4 style="margin-left:20px" ><b>ARTICLE ID</b> :- ${repo.ID}</h4>
       <h4 style="margin-left:20px"><b>ARTICLE NAME</b> :- ${repo.name}</h4>
       <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
        <h4 style="margin-left:20px"><b>ARTICLE DESCRIPTION</b> :- ${repo.description}</h4>
        <br><br>
<a  class="button" href="homePage.php">Back</a>
     </main> 


        `)


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