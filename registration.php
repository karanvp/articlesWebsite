
<!DOCTYPE html>
<html>
<head>

	<script src="jquery.js"></script>
  <?php require_once("components/head.php") ?>
	<title>Registeration Page</title>
	<link rel="stylesheet" href="mystyle.css">
<style type="text/css">


/* #dialogoverlay{
  display: none;
  opacity: .8;
  position: fixed;
  top: 0px;
  left: 0px;
  background: #FFF;
  width: 100%;
  z-index: 10;
}
#dialogbox{
  display: none;
  position: fixed;
  background: #000;
  border-radius:7px; 
  width:550px;
  z-index: 10;
}
#dialogbox > div{ background:#FFF; margin:8px; }
#dialogbox > div > #dialogboxhead{ background: #666; font-size:19px; padding:10px; color:#CCC; }
#dialogbox > div > #dialogboxbody{ background:#333; padding:20px; color:#FFF; }
#dialogbox > div > #dialogboxfoot{ background: #666; padding:10px; text-align:right; } */

</style>

<script>
function CustomAlert(){
    this.render = function(dialog){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogbox.style.left = (winW/2) - (550 * .5)+"px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";
        document.getElementById('dialogboxhead').innerHTML = "Alert";
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
    }
  this.ok = function(){
    document.getElementById('dialogbox').style.display = "none";
    document.getElementById('dialogoverlay').style.display = "none";
  }
}
var Alert = new CustomAlert();
</script>

<div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>

</head>
 <body>



<div class="profile"></div>


<main class="frm">

  <label>REGISTRATION</label>

  <br><br>

  <span id="u"></span><br>
<span id="p"></span><br>
<span id="c"></span><br>

<br><br>

	
	
<br><br>
<table>
	<tr>
		<td><input type="text" name ="userr" id="userr" placeholder="Enter username"  required/></td>
		<td></td>
	</tr>
	<tr>
		<td><input  type="password" name="passr" id="passr" placeholder="Enter password" required/></td>
		<td></td>
	</tr>
	<tr>
		<td><input type="password" name="cpassr" id="cpassr" placeholder="Confirm password" required/></td>
		<td></td>
	</tr>
	<tr>
		<td><input type="text" name ="email" id="email" placeholder="Enter Email ID" required/></td>
		<td></td>
	</tr>
	
</table>
<br>
<p></p>
<p></p>

<p></p>
<p>
<button class="registerBtn" onclick="submit()">Register</button><br><br>

<button  class="loginBtn"><a href="login-page" >Login</a></button>

</main>




<Script>
	function rep(){
		 window.location.replace('home-page');
	}
	function submit(){

var name= document.getElementById('userr').value;
var sdesc = document.getElementById('passr').value;
var desc = document.getElementById('cpassr').value;
var e = document.getElementById('email').value;
	

		   $.ajax({
      type: 'post',
      url: 'register.php?',
      data: { 
        'userr': name, 
        'passr': sdesc,
        'cpassr':desc,
        'email':e
      },
      success: function (response) {
        

        if(response.includes("success")){
        //	Alert.render(response);
			setTimeout(rep, 2000);
        }else{
			//Alert.render(response);
//alert(response);
			


if(response.includes("passwordincorrect")){
	//alert("pwdInc");
	$("#c").empty();
	$("#c").append(`
       <b style="color:red;">**password dosen't match!</b>
     
        `)

	
document.getElementById('passr').style.borderColor = "red";
document.getElementById('cpassr').style.borderColor = "red";
}

if(response.includes("userexists")){
	$("#u").empty();
	$("#u").append(`<b style="color:red;">**username exists</b>`);
	document.getElementById('userr').style.borderColor = "red";
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
