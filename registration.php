
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
<style type="text/css">

	body{
	background: #eee;
}

	.btn{
	color:#fff;
	background: #337ab7;
	padding: 10px;
	padding-left: 60px;
	padding-right: 60px;
	border-radius: 20px;


}


	.frm{
	border: solid red 1px;
	width: 30%;
	height: 300px; 
	border-radius: 5px;
	margin: 100px auto;
	background: white;
	padding: 50px;
	text-align: center;
}

</style>
</head>
<body style="background: red; background-image: url('artimg.jpeg')">

<main class="frm">
<form method = "post" action="register.php" >
	
	<label>REGISTRATION PAGE</label>

<p><input type="text" name ="userr" id="userr" placeholder="Enter username" required/></p>
<p><input type="password" name="passr" id="passr" placeholder="Enter password" required/></p>

<p><input type="text" name ="email" id="email" placeholder="Enter Email ID" required/></p>
<p>
<input type="submit" class="btn" value="Sign Up"/></p>

<button style="background: red ; " class="btn"><a href="login.php" >Login</a></button>
</form>
</main>


</body>
</html>
