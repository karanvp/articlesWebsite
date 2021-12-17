<?php require_once("components/head.php") ?>
<html>
  

   <body>
   

<style type="text/css">

</style>
<div id="notify"></div>
<div class="container">
  <table class="table">
  <tr>
    <th>Language</th>
    <th>Lang Code</th>
    <th>RTL</th>
  </tr>
<?php


include "./classes/Article.php";
$query = new Article();
$result=$query->fetchLanguages();
$query->findArticleByName($name);
// $row = mysqli_fetch_array($result);
// echo $row['name'];
if(mysqli_num_rows($result)>0){
    while ($row = $result -> fetch_row()) {?>
   <tr>
     
     <td ><?php echo $row[1];?></td>
     <td ><?php echo $row[2];?></td>
     <td ><?php echo $row[3];?></td>
     <td>
<button class="btn btn-danger btn-sm" >Delete</button></td>

    </tr>
     <?php
      }
    } else{
        echo "Failed";
    }




?>

  </table>
  </div>

<br><br><br>

<div class="textContainer">
<span>Choose a option:</span><br><br>
<a class="btn btn-success" href="formlanguages.php">Create Languages</a>
<a class="btn btn-success" href="FormDeleteLanguages.php">Delete languages</a>
<a class="btn btn-success" href="FormEditLanguage.php">Edit languages</a>
<a class="btn btn-success" href="createKeyword.php">Add Keywords</a>
<a class="btn btn-success" href="deleteKeyword.php">Delete Keywords</a>
</div>

<div class="col-md-6">  

<div class="textContainer">

<div class="col-md-6">  



   <span id="info"></span><br><br>
<div class="container" >
   <div class="sub">
 	<input type="text" id="languageName" placeholder="Enter Language " ></div><br><br>

<br><br>


<button style="margin-left: 60px;" class="btn btn-danger btn-lg" onclick="submit()">Submit</button>

</div>
</div>
<Script>

 
	function rep(){
		 window.location.replace('en/home-page');
	}
	function submit(){

var language= document.getElementById('languageName').value;



	 $.ajax({
        url:"languageDeleteProcess.php?language="+language,
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
 Language is Successfully deleted !!
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

