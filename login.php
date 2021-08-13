
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

.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}


#dialogoverlay{
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
#dialogbox > div > #dialogboxfoot{ background: #666; padding:10px; text-align:right; }

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
<body style="background: red; background-image: url('artimg.jpeg')">
<div class="profile"></div>
<main class="frm">


	
	<label>LOGIN PAGE</label><br><br>

  <select id="catSelect">
        <option value="" disabled selected>Choose option</option>
        <option value="Admin">Admin</option>
        <option value="User">User</option>
      
    </select>
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

<button style="background: red ; " class="btn"><a href="registration.php" >Register</a></button>

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
 var cs = document.getElementById('catSelect').value;

 //alert(catSelect);
	

		   $.ajax({
      type: 'post',
      url: 'process.php?',
      data: { 
        'user': name, 
        'pass': sdesc,
        'q':cs
        
      },
      success: function (response) {
        // 

Alert.render(response);

        if(response.includes("Success")){
        	Alert.render(response);
        //  window.location.replace('homePage.php');
			setTimeout(rep, 3000);
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
