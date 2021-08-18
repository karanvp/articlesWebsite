
<!doctype html>
<html lang="en">
  <?php require_once("components/head.php") ?>

  <body style="background: red; background-image: url('artimg.jpeg')">
   

<main>

  
    <h1>Create Article</h1>

    <br> <br><br><br>
   <span id="info"></span><br><br>
 	<input type="text" name="ArticleName" id="name" placeholder="Enter Article Name" style="padding: 20px; padding-right: 80px"><br><br>

 	<input type="textarea" name="ArticleShort" id="sdesc" placeholder="Enter Short Description " style="padding: 50px"><br><br>

<input type="textarea" name="ArticleDesc" id="desc" placeholder="Enter Details" style="padding: 50px">
<br><br>


<button class="button" onclick="submit()">Submit</button>

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
  

</main><!-- /.container -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

