
<!DOCTYPE html>
<html>
<head>

	<script src="jquery.js"></script>
	<title>Login Page</title>
	<link rel="stylesheet" href="mystyle.css">
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
	width: 50%;
	height: 300px; 
	border-radius: 5px;
	margin: 100px auto;
	background: white;
	padding: 50px;
	text-align: center;
}



</style>

<script>


</script>



</head>
 <body style="background-color: rgba(160, 81, 45, 0.116);">
<div class="profile"></div>
<main class="frm">


	
	<label>LOGIN PAGE</label><br><br>

 
<br><br>
<table style="margin-left: 350px">
	<tr>
		<td><input type="text" name ="user" id="user" placeholder="Enter username"  required/></td>
		<td><span id="u"></span></td>
	</tr>
	<tr>
		<td><input type="password" name="pass" id="pass" placeholder="Enter password" required/></td>
		<td><span id="p"></span></td>
	</tr>

	
</table>
<br>
<p></p>
<p></p>

<p></p>
<p>
<button class="btn" onclick="submit()">Login</button><br><br>

<button style="background: red ; " class="btn"><a href="registration.php" >Register</a></button><br><br>
<a href="forgotPwdForm.php">Forgot Password ?</a>
</main>




<Script>
  
	function rep(){
		 window.location.replace('homePage.php');
	}
	function submit(){

 var name= document.getElementById('user').value;
 //alert(name);

 var sdesc = document.getElementById('pass').value;
  //alert(sdesc);


 //alert(catSelect);
	

		   $.ajax({
      type: 'post',
      url: 'process.php?',
      data: { 
        'user': name, 
        'pass': sdesc
        
        
      },
      success: function (response) {
        // 

//Alert.render(response);

        if(response.includes("Success")){
        	//Alert.render(response);
        //  window.location.replace('homePage.php');
			setTimeout(rep, 2000);
        }else{
			//Alert.render(response);
//alert(response);
			


if(response.includes("Failed")){
	//alert("pwdInc");
  $("#u").empty();
	$("#u").append(`
       <b style="color:red;">**Incorrect Username or password!</b>
     
        `)

document.getElementById('user').style.borderColor = "red";
document.getElementById('pass').style.borderColor = "red";
}



        }

      },
      error: function () {
        alert("error");
      }
   });
		
	}
</Script>


</body>
</html>
