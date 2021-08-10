<!doctype html>
<html lang="en">
  <head>

     <style>  
.button {
  background-color: red; 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
           
            h1{ 
                color:black; 
                text-align:center; 
            } 
        </style>
    <script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">





    <!-- Custom styles for this template -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href=css/style.css>
  </head>

  <body style="background: red; background-image: url('artimg.jpeg')">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    	<a class="navbar-brand" href="homePage.php">View Article</a>
  <a class="navbar-brand" href="createArticle.php">Create Article</a>
  <a class="navbar-brand" href="updateArticles.php">Update Article</a>
    <a class="navbar-brand" href="deleteArticles.php">Delete Article</a>

    <a class="navbar-brand" href="mainPage.php" style="margin-left: 1000px">Signout</a>

</nav>

<main role="main" class="container">

  <div class="searchContainer">
    <h1>Update Article</h1>
   <br>
    <br>
    <br>
    <br>
 
 <form action="updarticles.php">

 	<input type="text" name="updArticleId" placeholder="Enter Article ID" style="padding: 20px; padding-right: 80px"><br><br>
 	<input type="text" name="updArticleName" placeholder="Enter Article Name" style="padding: 20px; padding-right: 80px"><br><br>
<input type="textarea" name="upArticleDesc" placeholder="Enter Details" style="padding:70px">
 	
<br><br>
<input class="button" type="submit" value="submit">


 </form>
  </div>
  <br>


</main><!-- /.container -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

