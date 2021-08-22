
<!doctype html>
<html lang="en">
  <?php require_once("components/header.php") ?>

  <body >
   
<style type="text/css">
	    	
	    	
	@media(max-width: 576px){
		.frm{

	width: 100%;
	
	border-radius: 5px;
	margin-top: 150px;
	

	padding: 20px;
	text-align: center;
	background: #eee;

}
.textContainer input{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 230px;
    padding-right: 200px;
   
    margin-left: 0px;
    margin-right: 340px;



  }

  .button{

          color: white;
          margin-left: 30px;
          margin-right: 30px;
          padding-left: 180px;
          padding-right: 180px;
          padding-top: 10px;
          padding-bottom: 10px; 
          background-color: red;
          border-radius: 40px;
        }


	}

	@media(min-width: 577px){
		.frm{

	width: 50%;
	
	border-radius: 5px;
	margin-top: 150px;
	margin-left: 400px;
	padding-bottom: 180px;

	padding: 20px;
	text-align: center;
	background: #eee;

}
		
.textContainer input{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 200px;
    padding-right: 200px;
    margin-right: : 500px;
    margin-left: 10px;


  }

  .button{

          color: white;
          margin-left: 30px;
          padding-left: 180px;
          padding-right: 180px;
          padding-top: 10px;
          padding-bottom: 10px; 
          background-color: red;
          border-radius: 40px;
        }
	}


</style>
<main class="frm">

  
    <h1>Forgot Password</h1>

    <br> <br><br><br>
   
 
 <form action="validateForgotPwd.php" method="post">
 	
 	<div class="textContainer">

<div class="sub">
<input type="text" name="email" placeholder="Enter Email ID" ></div>
<br><br>

<div class="sub">
<button class="button" name="password-reset-token" type="submit" value="submit">Submit</button>
</div>

 </form>
 </div>
  <br>
  

</main><!-- /.container -->



</body>
</html>

