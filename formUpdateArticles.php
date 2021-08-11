<!doctype html>
<html lang="en">
  
   <?php require_once("components/head.php") ?>

  <body style="background: red; background-image: url('artimg.jpeg')">
   

<main >

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

