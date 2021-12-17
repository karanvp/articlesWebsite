<?php require_once("components/head.php") ?>
<html>
  

   <body>
   

<style type="text/css">

</style>
<div id="notify"></div>
<div class="container">
  <table class="table">
  <tr>
    <th>Keyword</th>
    <th>Keyword Translation</th>
    <th>Langauge</th>
    <th>Lang Code</th>
  </tr>
<?php


include "./classes/Article.php";
$query = new Article();
$result=$query->fetchTranslations();
// $query->findArticleByName($name);
// $row = mysqli_fetch_array($result);
// echo $row['name'];
if(mysqli_num_rows($result)>0){
    while ($row = $result -> fetch_row()) {?>
   <tr>
     
     <td ><?php echo $row[1];?></td>
     <td ><?php echo $row[2];?></td>
     <td ><?php echo $row[3];?></td>
     <td ><?php echo $row[4];?></td>
     <td>
<button class="btn btn-danger btn-sm" onclick="delKeyword('<?php echo $row[0]?>')">Delete</button></td>


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

<div style="margin-left:600px">
<span>Choose a option:</span><br><br>
<a class="btn btn-success" href="en/form-language">Create Languages</a>
<a class="btn btn-success" href="en/add-keyword">Add Keywords</a>












   <span id="info"></span><br><br>

   <div class="sub">
 	<input type="text" id="keyword" placeholder="Enter Keyword " ></div><br><br>
<div class="sub">
 	<input type="textarea" id="keytrans" placeholder="Enter keyword translation " ></div><br><br>
<div class="sub">
<input type="textarea" id="language" placeholder="Enter language" ></div><br><br>
<div class="sub">
<input type="textarea" id="lang_code" placeholder="Enter language code" ></div>
<br><br>


<button style="margin-left: 60px;" class="btn btn-danger btn-lg" onclick="submit()">Submit</button>


</div>
<Script>

 function delKeyword(a){


var id = a;
// var language= document.getElementById('language').value;
// var lang_code = document.getElementById('lang_code').value;
// var keyword = document.getElementById('keyword').value;
// var keytrans = document.getElementById('keytrans').value;


	 $.ajax({
        url:"deleteTranslations.php?id="+id,
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
 Keyword is successfully Deleted !!
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


	function rep(){
		 window.location.replace('en/home-page');
	}
	function submit(){

var language= document.getElementById('language').value;
var lang_code = document.getElementById('lang_code').value;
var keyword = document.getElementById('keyword').value;
var keytrans = document.getElementById('keytrans').value;


	 $.ajax({
        url:"createTranslations.php?language="+language+"&lang_code="+lang_code+"&keyword="+keyword+"&keytrans="+keytrans,
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
 Keyword is successfully created !!
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

