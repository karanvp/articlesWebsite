<!doctype html>
<html lang="en">
  <head>

     <style>  

            #leftbox { 

                float:left;  
                background:white; 
                width:33%; 
                height:280px; 
                margin-right: 20px
                border:5px ;
                border-style: dotted;
  border-color: black;
  border-radius: 20px;


                            } 
            #middlebox{ 
                float:left;  
                background:white; 
                width:100%; 
                height:280px; 
                 margin-right: 20px;
                 padding: 50px

            } 
            #rightbox{ 
                float:left; 
                background:white; 
                width:45%; 
                height:280px; 
                 margin-right: 20px
            } 
            h1{ 
                color:black; 
                text-align:center; 
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
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
   
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

<main role="main" class="container">

  <div class="searchContainer">
    <h1>HOME PAGE !</h1>
   
 
  </div>
  <br>
  <div id="profile"></div>

</main><!-- /.container -->

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






$("#profile").append(`
        <div id="leftbox">
        <br>
        <br>
 		<h4 style="margin-left:20px" >ARTICLE ID :- ${repo.ID}</h4>
       <h4 style="margin-left:20px">ARTICLE NAME :- ${repo.name}</h4>
       <h4 style="margin-left:20px">ARTICLE SHORT DESCRIPTION :- ${repo.shortdescription}</h4>

       <input style="margin-left:20px" type="submit" id=${repo.ID} value="VIEW DETAILS"/>


        `)





 })

 
  $("#vButton").click(function(){
  alert("The paragraph was clicked.");
});


// $("#23").click(function(){
//   alert("The 23 was clicked.");
// });

$.each(obj, function(index, repo){
	let str1 = "#";
let str2 = repo.ID.toString();

let res = str1.concat(str2)

//alert(res);

$(res).click(function(){
 // alert("The no was clicked."+str2);


$("#profile").empty();

$.ajax({
        url:"retreiveDesc.php?q="+repo.ID,
        
        success: function(data) {
        	// alert(data);

        var obj =JSON.parse(data)
        	const myJSON = JSON.stringify(obj);



    //alert(myJSON); // apple
 $.each(obj, function(index, repo){
 	//alert(JSON.stringify(repo));






$("#profile").append(`
        <div id="middlebox">
        <br>
        <br>
 		<h4 style="margin-left:20px" >ARTICLE ID :- ${repo.ID}</h4>
       <h4 style="margin-left:20px">ARTICLE NAME :- ${repo.name}</h4>
       <h4 style="margin-left:20px">ARTICLE SHORT DESCRIPTION :- ${repo.shortdescription}</h4>
        <h4 style="margin-left:20px">ARTICLE DESCRIPTION :- ${repo.description}</h4>
<a class="navbar-brand" href="homePage.php">Back</a>
      


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
