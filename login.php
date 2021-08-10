<!DOCTYPE html>
<html>
<head>
	<title>LOGIN PAGE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="frm">
<form method = "post" action="process.php" >
	
	<h3>LOGIN</h3>

<p><input type="text" name ="user" id="user" placeholder="Enter username" required/></p>
<p><input type="password" name="pass" id="pass" placeholder="Enter password" required/></p>
<p><input type="submit" id="btn" value="login"/></p>

<button style="background: red ; padding-left: 50px;padding-right: 50px;padding-top: 10px;padding-bottom: 10px"><a href="registration.php" class="button">Register</a></button>
</form>
</div>


</body>
</html>