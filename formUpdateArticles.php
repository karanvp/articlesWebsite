<!doctype html>
<html lang="en">
  
   <?php require_once("components/head.php") ?>

   <body>
   
<style type="text/css">

</style>
<main >
<div class="language-selector" style=" position: absolute; margin-left:1400px;">
<span>Choose a language:</span><br><br>
<?php

include "./classes/Article.php";
$query = new Article();
$result=$query->fetchLanguages();
// $row = mysqli_fetch_array($result);
// echo $row['name'];
if(mysqli_num_rows($result)>0){
    while ($row = $result -> fetch_row()) {
        
        ?>  <a class="btn btn-success btn-md" href="<?php echo $row[2]?>/update-article"><?php echo $row[1]?></a><br><br><?php
      }
    } 

?>
 
  
  
</div>
<div id="notify"></div>
<div class="textContainer">
  

   <span id="info"></span><br><br>

   <div class="sub">
 <input class="inputtext" type="text" name="updArticleName" id = "updArticleName" placeholder="Enter Article Name" ></div><br><br>
 <input class="inputtext" type="textarea" name="upArticleShortDesc" id = "upArticleShortDesc" placeholder="Enter Short Desc Details" style="padding-bottom: 200px"><br><br>

<div class="sub">
  <input class="inputtext" type="textarea" name="upArticleDesc" id = "upArticleDesc" placeholder="Enter Details" style="padding-bottom: 400px"></div><br><br>
  
<br><br>


<button class="btn btn-danger btn-lg"  id="s">Submit</button>

</div>

  




<!--  </form> -->

  <br>


<Script>

 $( "#s" ).click(function() {
  submit();
});
  function rep(){
     window.location.replace('en/home-page');
  }
  function submit(){

var name= document.getElementById("updArticleName").value;
var sdesc = document.getElementById("upArticleDesc").value;
var shortdesc = document.getElementById("upArticleShortDesc").value;

  // alert(name);
  // alert(sdesc);

  $.ajax({
      type: 'post',
      url: 'updarticles.php',
      data: { 
        'updArticleName': name, 
        'upArticleDesc': sdesc,
        'upArticleShortDesc':shortdesc,
        'lang':'<?php echo $_GET['lang']?>'
        
        
      },
      success: function (response) {
        // 
// alert(response);
//Alert.render(response);

        if(response.includes("Success")){
          //Alert.render(response);
        //  window.location.replace('homePage.php');
        $("#info").empty();
  $("#info").append(`
       <b style="color:green;">**Success!</b>
     
        `)
        $("#notify").append(`<div class="alert alert-primary" role="alert">
 Article is successfully updated !!
</div>`);
      setTimeout(rep, 2000);
        }else{
      //Alert.render(response);
//alert(response);
      


if(response.includes("Failed")){
  //alert("pwdInc");
  $("#info").empty();
  $("#info").append(`
       <b style="color:red;">**Failed to Update!</b>
     
        `)

        $("#notify").append(`<div class="alert alert-danger" role="alert">
 Article is failed to be updated !!
</div>`);


}



        }

      },
      error: function () {
        alert("error");
      }
   });
    
  }
</Script>
</main><!-- /.container -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

