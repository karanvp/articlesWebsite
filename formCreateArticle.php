
<!doctype html>
<html lang="en">
  <?php require_once("components/head.php") ?>

   <body style="background-color: rgba(160, 81, 45, 0.116);">
   <style type="text/css">
     @media(max-width: 576px){
      .button{

          color: white;
          margin-left: 60px;
          padding-left: 180px;
          padding-right: 180px;
          padding-top: 10px;
          padding-bottom: 10px; 
          background-color: red;
          border-radius: 40px;
        }
     }
   </style>



<div class="textContainer">
  
    <h1>Create Article</h1>

   
   <span id="info"></span><br><br>

   <div class="sub">
 	<input type="text" name="ArticleName" id="name" placeholder="Enter Article Name" ></div><br><br>
<div class="sub">
 	<input type="textarea" name="ArticleShort" id="sdesc" placeholder="Enter Short Description " ></div><br><br>
<div class="sub">
<input type="textarea" name="ArticleDesc" id="desc" placeholder="Enter Details" ></div>
<br><br>


<button  class="button" onclick="submit()">Submit</button>

</div>

<Script>
	function rep(){
		 window.location.replace('homePage.php');
	}
	function submit(){

var name= document.getElementById('name').value;
var sdesc = document.getElementById('sdesc').value;
var desc = document.getElementById('desc').value;
	
	 $.ajax({
        url:"carticle.php?ArticleName="+name+"&ArticleShort="+sdesc+"&ArticleDesc="+desc,
        success: function(data) {

// Alert.render(data);



        if(data.includes("Success")){
          //Alert.render(response);
        //  window.location.replace('homePage.php');

        $("#info").empty();
  $("#info").append(`
       <b style="color:green;">**Success!</b>
     
        `)
      setTimeout(rep, 2000);
        }else{
        	$("#info").empty();
  $("#info").append(`
       <b style="color:red;">**Failed!</b>
     
        `)
        }

        }
    })
	
		// Alert.render(name+desc);
		
	}
</Script>


  <br>
  





</body>
</html>

