<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	<style type="text/css">
		body{
	background: #eee;
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

.btn{
	color:#fff;
	background: #337ab7;
	padding: 10px;
	padding-left: 60px;
	padding-right: 60px;
	border-radius: 20px;


}


	</style>
</head>
<body style="background: red; background-image: url('artimg.jpeg')">

<main class="frm" >
<form method = "post" action="process.php" >
	
	<h3>LOGIN</h3>

<select name="catSelect">
        <option value="" disabled selected>Choose option</option>
        <option value="Admin">Admin</option>
        <option value="User">User</option>
      
    </select>

<p><input type="text" name ="user" id="user" placeholder="Enter username" required/></p>
<p><input type="password" name="pass" id="pass" placeholder="Enter password" required/></p>
<p><input name="submit" type="submit" class="btn" value="login"/></p>

<button style="background: red ; padding-left: 50px;padding-right: 50px;padding-top: 10px;padding-bottom: 10px" class="btn"><a href="registration.php" >Register</a></button>
<br>
<br>
<a href="forgotPwdForm.php">Forgot Password ?</a>
</form>
</main>


</body>
</html>