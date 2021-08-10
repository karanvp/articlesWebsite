<!doctype html>
<html lang="en">
  <head>
     <style>  
            
             main{
             
              
               
                height:330px; 
               margin-left: 100px;
                margin-right: 100px;
                margin-bottom: 20px;
                border-radius: 20px;

            }

                 main a{
              margin-left: 20px;
              color: red;
              height: 20px;
              font-size: 23px;
              text-decoration: none;
            }
            
            .button {
  background-color: red; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
 
           
        </style>
    <script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Home</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">
    <!-- Custom styles for this template -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=css/style.css>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
<a class="navbar-brand" href="homePage.php">View Article</a>
  <a class="navbar-brand" href="createArticle.php">Create Article</a>
  <a class="navbar-brand" href="updateArticles.php">Update Article</a>
    <a class="navbar-brand" href="deleteArticles.php">Delete Article</a>
      <a class="navbar-brand" href="login.php" style="margin-left: 1200px">Signout</a>
  
  
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
    <h4 style="margin-left:20px" >ARTICLE ID :- ${repo.ID}</h4>
    <h4 style="margin-left:20px" >AUTHOR :- ${repo.author}</h4>
       <h4 style="margin-left:20px">ARTICLE TITLE :- ${repo.name}</h4>
       <h4 style="margin-left:20px;">ARTICLE SHORT DESCRIPTION :- ${repo.shortdescription}</h4>
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
    <h4 style="margin-left:20px" >ARTICLE ID :- ${repo.ID}</h4>
       <h4 style="margin-left:20px">ARTICLE NAME :- ${repo.name}</h4>
       <h4 style="margin-left:20px" >AUTHOR :- ${repo.author}</h4>
        <h4 style="margin-left:20px">ARTICLE DESCRIPTION :- ${repo.description}</h4>
<a  href="homePage.php">Back</a>
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