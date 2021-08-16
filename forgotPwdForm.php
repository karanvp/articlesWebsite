
<!doctype html>
<html lang="en">
  <?php require_once("components/header.php") ?>

  <body style="background: red; background-image: url('artimg.jpeg')">
   

<main>

  
    <h1>Forgot Password</h1>

    <br> <br><br><br>
   
 
 <form action="validateForgotPwd.php" method="post">
 	
 	<input type="text" name="userName" placeholder="Enter User Name" style="padding: 20px; padding-right: 80px"><br><br>

 	<input type="text" name="userPwd" placeholder="Enter Password " style="padding: 50px"><br><br>

<input type="text" name="email" placeholder="Enter Email ID" style="padding: 50px">
<br><br>
<input class="button" name="password-reset-token" type="submit" value="submit">


 </form>
 
  <br>
  

</main><!-- /.container -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

