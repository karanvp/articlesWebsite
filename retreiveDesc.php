<?php require_once("components/head.php") ?>

<?php

include "./classes/Query.php";

$q = new q\Query();
// $id = '188';
// $id = $_GET['q'];
$url = $_GET['url'];

$result1 = $q->searchArticleByURL($url);
$row1 = mysqli_fetch_array($result1);
$id= $row1['ID'];

$result = $q->checkIfArticleExistsWithBasePost($id);
?> <div class="container"><?php
if(mysqli_num_rows($result)>0){
    while ($row = $result -> fetch_row()) {?>
      
     <a class="btn btn-success" href="<?php echo $row[4]?>/retreive-description-ID"><?php echo $row[6];?></a>
   
     <?php
      }
    } else{
        echo "Failed";
    }

?></div>

<?php
session_start();
//$user = $_SESSION['user'] ;

$pass = $_GET['pass'];
$langcode = $_GET['lang'];
$result = $q->searchArticleByURLandLang($url,$langcode);
// $rtest = $q->searchArticleByURL($url);
// $rowtest = mysql_fetch_row($rtest);
// $id = $rowtest[4];

// $rtest = $q->searchArticleByURL($url);
// if (!$rtest) {
//     echo 'Could not run query: ' . mysql_error();
//     exit;
// }
// $row = mysql_fetch_row($rtest);

// echo $row[0]; // 42
// echo $row[1]; // the email value
 // $id = $rowtest[4];

// echo "addsa";


$rows = array();

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
   
    // $id = $row[0];
}
$a =  json_encode($rows);



if(mysqli_num_rows($result)>0){
// echo "success";

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

  function translate(){
    alert("hello world");
  }
    var checker = String(<?php session_start(); echo $_SESSION['mbk'] ;?>);
 
var obj = <?php echo $a;?>;

$.each(obj, function(index, repo){
 //alert(JSON.stringify(repo));
 var a = parseInt(repo.ID);
var b = a + 100000000000;
var c = a+100;

if(checker.includes('true')){
$(".desc").append(`
       <div class="container">
       <br>
       <br>
   
   <h4 style="margin-left:20px"><b>AUTHOR</b> :- ${repo.author}</h4>
      <h4 style="margin-left:20px"><b>ARTICLE TITLE</b> :- ${repo.name}</h4>
      <h4 style="margin-left:20px;"><b>ARTICLE SHORT DESCRIPTION</b> :- ${repo.shortdescription}</h4>
      <h4 style="margin-left:20px;"><b>ARTICLE  DESCRIPTION</b> :- ${repo.description}</h4>
      <br><br>
      <table style="margin-left:50px">
     
      <td><button class="btn btn-danger btn-lg" type="button" id=${repo.ID} >DELETE</button></td>
      <td><a  href="<?php echo $_GET['lang']?>/update-article" style="color:white"><button class="btn btn-danger btn-lg" id=${b} value="UPDATE">Update Article</button></a></td>
      <td><a  class="btn btn-danger btn-lg" href="./<?php echo $_SESSION['lang']?>/home-page" >Back</a></td>
      </table>
</div>

       `)}
       else{
        $(".desc").append(`
       <div class="container">
       <br>
       <br>
   <span id="info"></span><br><br>
      <h4 style="margin-left:20px"><b>ARTICLE NAME</b> :- ${repo.name}</h4>
      <h4 style="margin-left:20px" ><b>AUTHOR</b> :- ${repo.author}</h4>
       <h4 style="margin-left:20px"><b>ARTICLE DESCRIPTION</b> :- ${repo.description}</h4>
       <br><br>

       <table style="margin-left:50px">
       
       <td><a  class="btn btn-danger btn-lg" href="./<?php echo $_SESSION['lang']?>/home-page" >Back</a></td></tr>
       
        </table>

    </div> 


       `)}


       $("#"+repo.ID).click(function(){

// alert(repo.ID);
// alert(document.getElementById(repo.ID).value);
//alert("."+repo.ID);
 $.ajax({
       url:"./darticles.php?q="+repo.ID,
       
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
     setTimeout(function(){window.location.replace('./<?php echo $_SESSION['lang']?>/home-page');}, 2000);
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
       url:"./sessionSetter.php?q="+c,
       
     
     })
 //alert(c);

})
// var current_article = c-100;
// $("#"+current_article).click(function(){
//   alert("hello world");
// })


})











</script>


</body>
</html>
