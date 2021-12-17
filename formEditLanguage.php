<?php require_once("components/head.php") ?>
<html>
  

   <body>
   

<style type="text/css">

</style>
<div id="notify"></div>


<br><br><br>
<div style="margin-left:600px">
<span>Choose a option:</span><br><br>
<a class="btn btn-success" href="formlanguages.php">Create Languages</a>


<a class="btn btn-success" href="createKeyword.php">Add Keywords</a><br><br>
<b>Selected Language is :- <?php echo $_GET['la']?></b><br>








   <span id="info"></span><br><br>
 


<div class="sub">
 	<input type="textarea" id="langCode" placeholder="Enter Language Code " ></div><br><br>
<div class="sub">
<input type="textarea" id="rtlenabled" placeholder="Enter RTL Status" ></div>
<br><br>


<button style="margin-left: 60px;" class="btn btn-danger btn-lg" onclick="submit()">Submit</button>


</div>
<Script>


	function rep(){
		 window.location.replace('en/home-page');
	}
	function submit(){

var language= '<?php echo $_GET['la'];?>';
var lang_code = document.getElementById('langCode').value;
var rtl = document.getElementById('rtlenabled').value;


	 $.ajax({
        url:"languageEdit.php?language="+language+"&lang_code="+lang_code+"&rtl="+rtl,
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
 Language is successfully updated !!
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

