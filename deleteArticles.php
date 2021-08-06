
<!doctype html>
<html lang="en">
  <head>

     <style>  

            #leftbox { 
                float:left;  
                background:white; 
                width:25%; 
                height:280px; 
                margin-right: 20px
            } 
            #middlebox{ 
                float:left;  
                background:white; 
                width:25%; 
                height:280px; 
                 margin-right: 20px
            } 
            #rightbox{ 
                float:left; 
                background:white; 
                width:25%; 
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
    
    <title></title>

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
    <h1>Delete Article !</h1>
   
 
 <form action="darticles.php">
 	
 	<input type="text" name="dArticleId" placeholder="Enter Article ID" style="padding: 20px; padding-right: 80px"><br><br>

 	
<br><br>
<input type="submit" value="submit">


 </form>
  </div>
  <br>
  <div id="profile"></div>

</main><!-- /.container -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

