
<!doctype html>
<html lang="en">
  <?php require_once("components/head.php") ?>

  <body>
   

<main>

  
    <h1>Forgot Password</h1>

    <br> <br><br><br>
   
 
 <form action="validateForgotPwd.php" method="post">
 	
 	
<div class='textContainer'>
<input type="text" name="email" placeholder="Enter Email ID">
<br><br>
<input class="btn btn-danger btn-md" name="password-reset-token" type="submit" value="submit" style="margin-left: 50px">

 </div>
 </form>
 

  <br>
  

</main><!-- /.container -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

