
<!doctype html>
<html lang="en">
  <?php require_once("components/head.php") ?>

   <body>
   

<style type="text/css">

</style>
<div id="notify"></div>
<div class="textContainer">

   

   
   <span id="info"></span><br><br>

   <div class="sub">
 	<input type="text" name="ArticleName" id="name" placeholder="Enter Article Name" ></div><br><br>
<div class="sub">
 	<input type="textarea" name="ArticleShort" id="sdesc" placeholder="Enter Short Description " ></div><br><br>
<div class="sub">
<input type="textarea" name="ArticleDesc" id="desc" placeholder="Enter Details" style="padding-bottom: 400px;"></div>
<br><br>


<button style="margin-left: 60px;" class="btn btn-danger btn-lg" onclick="submit()">Submit</button>

</div>

<Script>
	function rep(){
		 window.location.replace('home-page');
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
  // $("#info").append(`
  //      <b style="color:green;">**Success!</b>
     
  //       `)

        $("#notify").append(`<div class="alert alert-primary" role="alert">
 Article is successfully created !!
</div>`);


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

