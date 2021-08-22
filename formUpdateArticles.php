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

<main >
<div class="textContainer">
  <!-- <div class="searchContainer"> -->
    <h1>Update Article</h1>
   <br>
    <br>
    <br>
    <br>
 
<!--  <form action="updarticles.php"> -->
 <span id="info"></span><br><br>
 <div class="sub">
<input type="text" name="updArticleName" id = "updArticleName" placeholder="Enter Article Name"></div><br><br>
<div class="sub"><input type="textarea" name="upArticleDesc" id = "upArticleDesc" placeholder="Enter Details" ></div>
 	
<br><br>
<button  class="button" id="s">Submit</button>

</div>

<!--  </form> -->
<!--   </div> -->
  <br>


<Script>

 $( "#s" ).click(function() {
  submit();
});
  function rep(){
     window.location.replace('homePage.php');
  }
  function submit(){

var name= document.getElementById("updArticleName").value;
var sdesc = document.getElementById("upArticleDesc").value;

  // alert(name);
  // alert(sdesc);

  $.ajax({
      type: 'post',
      url: 'updarticles.php',
      data: { 
        'updArticleName': name, 
        'upArticleDesc': sdesc
        
        
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

