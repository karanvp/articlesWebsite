<!doctype html>
<html lang="en">


<?php require_once("components/header.php") ?>


  <body style="background: red; background-image: url('artimg.jpeg');">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">


      <a class="navbar-brand" href="login.php">Login</a>
     <a class="navbar-brand" href="registration.php">Register</a>
     <input type="text" id="searchUser" class="form-control" placeholder="Search Article..." style="margin-right: 1200px;margin-left: 100px;">
     
  
  
</nav>

 
  <br>
<div class="profile"></div><!-- /.container -->
<script>

<?php require_once("sQueryMain.js") ?>

</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>