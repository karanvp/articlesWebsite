<?php require_once("components/head.php") ?>
<?php

include "./classes/Query.php";
$q = new q\Query();

session_start();
//$user = $_SESSION['user'] ;

$pass = $_GET['pass'];
$id = $_GET['q'];
$result = $q->searchArticleById($id);
$rows = array();

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
$a =  json_encode($rows);


if(mysqli_num_rows($result)>0){


}
else{
	echo " failed";
}

?>


<html>


<head></head>

<body>
<div id="notify"></div>
<div id="info"></div>
<div class="desc"></div>

<script>
    var checker = String(<?php session_start(); echo $_SESSION['mbk'] ;?>);
   
var obj = <?php echo $a;?>;

$.each(obj, function(index, repo){
 //alert(JSON.stringify(repo));
 var a = parseInt(repo.ID);
var b = a + 100000000000;

if(checker.includes('true')){
$(".desc").append(`
       <div class="cardz">
       <br>
       <br>
   
   <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
      <h4 style="margin-left:20px"><b>ARTICLE TITLE</b> :- ${repo.name}</h4>
      <h4 style="margin-left:20px;"><b>ARTICLE SHORT DESCRIPTION</b> :- ${repo.shortdescription}</h4>
      <h4 style="margin-left:20px;"><b>ARTICLE  DESCRIPTION</b> :- ${repo.description}</h4>
      <br><br>
      <table style="margin-left:50px">
      <td><button class="btn btn-danger btn-lg" type="button" id=${repo.ID} >DELETE</button></td>
      <td><a  href="http://localhost:8888/articlesWebsite/update-article" style="color:white"><button class="btn btn-danger btn-lg" id=${b} value="UPDATE">Update Article</button></a></td>
      <td><a  class="btn btn-danger btn-lg" href="http://localhost:8888/articlesWebsite/home-page" >Back</a></td>
      </table>
</div>

       `)}
       else{
        $(".desc").append(`
       <div class="cardz">
       <br>
       <br>
   <span id="info"></span><br><br>
      <h4 style="margin-left:20px"><b>ARTICLE NAME</b> :- ${repo.name}</h4>
      <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
       <h4 style="margin-left:20px"><b>ARTICLE DESCRIPTION</b> :- ${repo.description}</h4>
       <br><br>

       <table style="margin-left:50px">
       
       <td><a  class="btn btn-danger btn-lg" href="http://localhost:8888/articlesWebsite/home-page" >Back</a></td></tr>
       
        </table>

    </div> 


       `)}


       $("#"+repo.ID).click(function(){

// alert(repo.ID);
// alert(document.getElementById(repo.ID).value);
//alert("."+repo.ID);
 $.ajax({
       url:"http://localhost:8888/articlesWebsite/darticles.php?q="+repo.ID,
       
       success: function(data) {
    if(data.includes("Success")){
         //Alert.render(response);
       //  window.location.replace('homePage.php');

       // $("#info").empty();
//  $("#info").append(`
//       <b style="color:green;">**Success!</b>
    
//        `)

       $("#notify").append(`<div class="alert alert-primary" role="alert">
  Article Successfully deleted !!
</div>`);
     setTimeout(function(){window.location.replace('http://localhost:8888/articlesWebsite/home-page');}, 2000);
       }      
if(data.includes("Failed")){
//  $("#info").empty();
//  $("#info").append(`<b style="color:red;">**failed</b>`);
//  document.getElementById('userr').style.borderColor = "red";
 $("#notify").append(`<div class="alert alert-danger" role="alert">
  Article failed to delete !!
</div>`);

}
   //alert(data); // apple
       }
     })
})

$("#"+b).click(function(){


//alert("inside update");
var c = b-100000000000;
$.ajax({
       url:"http://localhost:8888/articlesWebsite/sessionSetter.php?q="+c,
       
     
     })
 //alert(c);

})

})











</script>


</body>
</html>
