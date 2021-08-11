
<!doctype html>
<html lang="en">
  <?php require_once("components/head.php") ?>

  <body style="background: red; background-image: url('artimg.jpeg')">
   

<main>

  
    <h1>Create Article</h1>

    <br> <br><br><br>
   
 
 <form action="carticle.php">
 	
 	<input type="text" name="ArticleName" placeholder="Enter Article Name" style="padding: 20px; padding-right: 80px"><br><br>

 	<input type="textarea" name="ArticleShort" placeholder="Enter Short Description " style="padding: 50px"><br><br>

<input type="textarea" name="ArticleDesc" placeholder="Enter Details" style="padding: 50px">
<br><br>
<input class="button" type="submit" value="submit">


 </form>
 
  <br>
  

</main><!-- /.container -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

