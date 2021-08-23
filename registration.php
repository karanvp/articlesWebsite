
<!DOCTYPE html>
<html>
<head>

	<script src="jquery.js"></script>
	<title>Login Page</title>
	<link rel="stylesheet" href="mystyle.css">
<style type="text/css">

	body{
	background: white;
}

	.btn{




}


	.frm{
	border: solid red 1px;
	width: 50%;
	height: 300px; 
	border-radius: 5px;
	margin: 100px auto;
	background: #eee;
	padding: 50px;
	text-align: center;
  padding-bottom: 450px;
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

 table{
    margin-left: 200px;
  }

input{
    padding-left: 100px;
    padding-right: 100px;
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .btn{
    color:#fff;
  background: #337ab7;
  padding: 10px;
  padding-left: 60px;
  padding-right: 60px;
  border-radius: 20px;
  }

@media(min-width: 900px){
 
/*  .frm input{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 70px;
    padding-right: 70px;
    margin-left: 0px;
   margin-right: 150px;


  }*/
}

@media(min-width: 577px) and (max-width: 899px){

 table{
    margin-left: 50px;
  }

  input{
    padding-left: 100px;
    padding-right: 100px;
    padding-top: 20px;
    padding-bottom: 20px;
  }



}

@media(max-width: 576px){
  table{
    margin-left: 50px;
  }

  .btn{
      color:#fff;
  background: #337ab7;
  padding: 10px;
  padding-left: 160px;
  padding-right: 160px;
  border-radius: 20px;
  margin-left: 40px;
  }


  .frm{
    display: flex;
    flex-direction: column;
    margin-top: 0px;
    margin-bottom: 0px;
    padding-left: 45px;
    padding-top: 160px;
    padding-right: 300px;
    padding-bottom:450px; 
   

    width: 30%;


  }
  .frm label{
    margin-left: 150px;
  }

  .frm input{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 100px;
    padding-right: 100px;
    margin-left: 0px;
   margin-right: 50px;


  }
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
 <body style="background-color: rgba(160, 81, 45, 0.116);">



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
<button class="btn" onclick="submit()">Register</button><br><br>

<button style="background: red " class="btn"><a href="login.php" >Login</a></button>

</main>




<Script>
	function rep(){
		 window.location.replace('homePage.php');
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
