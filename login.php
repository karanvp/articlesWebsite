
<!DOCTYPE html>
<html>
<head>

	<script src="jquery.js"></script>
	<?php require_once("components/head.php") ?>
	<title>Login Page</title>
	<!-- <link rel="stylesheet" href="mystyle.css"> -->
<style type="text/css">



</style>
<?php
session_start();
?>
<script>


</script>



</head>
 <body>
<div class="profile"></div>
<div class="frm">


	
	<label>LOGIN</label><br><br>

 
<br><br>

<td><span id="u"></span></td>
<br><br>
<table>
	<tr>
		<td><input class="form-control" type="text" name ="user" id="user" placeholder="Enter username"  required/></td>
		
	</tr>
	<tr><td><br></td></tr>
	<tr>
		<td><input class="form-control" type="password" name="pass" id="pass" placeholder="Enter password" required/></td>
		<td><span id="p"></span></td>
	</tr>

	
</table>
<br>
<p></p>
<p></p>

<p></p>
<p>
<button class="btn btn-danger btn-lg" onclick="submit()">Login</button>&nbsp;&nbsp;&nbsp;

<a href="registration-page" ><button  class="btn btn-danger btn-lg">Register</button></a><br><br>
<a href="forgot-password">Forgot Password ?</a>


</div>




<Script>
  
	function rep(){
		
	<?php
			
			include "./classes/Login.php";
		   
			$q = new Login();
		   
					   $res=$q->findLangPreferenceofUser('Kesha911');
					   $rowpref = mysqli_fetch_array($res);
					   
					   $_SESSION['language_preference']= $rowpref['lang_preference'];
					   if( $_SESSION['language_preference']==NULL){
						$_SESSION['language_preference'] = 'en';
					   }
					   
		?>
		 window.location.replace('<?php echo $_SESSION['language_preference']?>/home-page');
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
