
<!DOCTYPE html>
<html>
<head>

	<script src="jquery.js"></script>
	<title>Login Page</title>
	<!-- <link rel="stylesheet" href="mystyle.css"> -->
<style type="text/css">

	body{
	background: white;
}

	.btn{
	/*color:#fff;
	background: #337ab7;
	padding: 10px;

	border-radius: 20px;
	text-align: center;*/




}


	.frm{
	border: solid red 1px;
	width: 50%;
	
	border-radius: 5px;
	margin-top: 150px;
	
background-color: #eee;
	padding: 30px;
	text-align: center;

}




@media(min-width: 577px){

	
.frm{
	margin-left: 400px;
	padding-bottom: 180px;
}

.frm button{
	background-color: red;
padding-left: 90px;
padding-right: 90px;
padding-top: 10px;
padding-bottom: 10px;
border-radius: 20px;
}

.frm input{
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 90px;
		padding-right: 90px;
		margin-left: 280px;


	}

}

@media(max-width: 576px){
	

	.frm{
		display: flex;
		flex-direction: column;
		margin-top: 0px;
		margin-bottom: 0px;
		padding-left: 75px;
		padding-top: 160px;
		padding-right: 400px;
		padding-bottom:110px; 
		margin-left: 0px !important;

		width: 30%;


	}

	.frm label{
		margin-left: 200px;
	}

	.frm input{
		padding-top: 20px;
		padding-bottom: 20px;
		padding-left: 140px;
		padding-right: 140px;
		margin-right: : 500px;


	}
	.frm table{
	margin-left: 0px;
}
	.frm button{
		
	
/*padding-top: 10px;
padding-bottom: 10px;
padding-left: 50px;
padding-right: 50px;*/
background-color: red;
padding-left: 190px;
padding-right: 190px;
padding-top: 20px;
padding-bottom: 20px;
border-radius: 20px;
		
	}

	.frm button a{
		text-align: center;
	}

	

}



</style>

<script>


</script>



</head>
 <body style="background-color: rgba(160, 81, 45, 0.116);">
<div class="profile"></div>
<div class="frm">


	
	<label>LOGIN</label><br><br>

 
<br><br>

<td><span id="u"></span></td>
<br><br>
<table>
	<tr>
		<td><input type="text" name ="user" id="user" placeholder="Enter username"  required/></td>
		
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

<a href="registration.php" ><button style="background-color: green" class="btn">Register</button></a><br><br>
<a href="forgotPwdForm.php">Forgot Password ?</a>


</div>




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
