<?php require_once("components/head.php") ?>
<html>
  

   <body>
   

<style type="text/css">

.textContainer input {

  margin-left: 500px;

}
</style>
<div id="notify"></div>
<div class="container">
  <table class="table" style="margin-left:200px;">
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
     <td >
<button style="width:200px;margin-left:100px;" class="btn btn-danger btn-sm" onclick="del('<?php echo $row[1]?>')">Delete</button></td>
<td>
<a style="width:200px;margin-right:200px;" class="btn btn-primary btn-sm" href="<?php echo $row[1]?>/form-edit-language">Edit</a></td>

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
<!-- <a class="btn btn-success" href="FormDeleteLanguages.php">Delete languages</a> -->
<!-- <a class="btn btn-success" href="FormEditLanguage.php">Edit languages</a> -->
<a class="btn btn-success" href="en/add-keyword">Add Keywords</a>







 



   <span id="info"></span><br><br>

   <div class="sub">
 	<input type="text" id="languageName" placeholder="Enter Language " ></div><br><br>
<div class="sub">
 	<input type="textarea" id="langCode" placeholder="Enter Language Code " ></div><br><br>
<div class="sub">
<input type="textarea" id="rtlenabled" placeholder="Enter RTL Status" ></div>
<br><br>


<button style="margin-left: 60px;" class="btn btn-danger btn-lg" onclick="submit()">Submit</button>


</div>

<Script>
// function edit(a){
//   alert(a);
// }
 function del(a){
   //alert(a);
   var language= a;



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
	function rep(){
		 window.location.replace('en/home-page');
	}
	function submit(){

var language= document.getElementById('languageName').value;
var lang_code = document.getElementById('langCode').value;
var rtl = document.getElementById('rtlenabled').value;


	 $.ajax({
        url:"languageProcess.php?language="+language+"&lang_code="+lang_code+"&rtl="+rtl,
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
 Language is successfully created !!
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

