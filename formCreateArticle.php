
<?php require_once("components/head.php") ?>
<html>
  <?php session_start?>

   <body>
   

<style type="text/css">

</style>
<div id="notify"></div>
<div style="margin-left:500px;">  
<span>Choose a language:</span><br><br>
<!-- <a class="btn btn-success" href="en/form-create-article">English</a>
<a class="btn btn-success" href="hi/form-create-article">Hindi</a> -->

<?php


include "./classes/Article.php";
$query = new Article();
$result=$query->fetchLanguages();
$query->findArticleByName($name);
// $row = mysqli_fetch_array($result);
// echo $row['name'];
if(mysqli_num_rows($result)>0){
    while ($row = $result -> fetch_row()) {?>
   
     <a class="btn btn-success" href="<?php echo $row[2]?>/form-create-article"><?php echo $row[1];?></a>
     <?php
      }
    } else{
        echo "Failed";
    }




?>
</div>
<div class="textContainer">




   <span id="info"></span><br><br>
<div class="container" >
   <div class="sub">
 	<input type="text" name="ArticleName" id="name" placeholder="Enter Article Name" ></div><br><br>
<div class="sub">
 	<input type="textarea" name="ArticleShort" id="sdesc" placeholder="Enter Short Description " ></div><br><br>
<div class="sub">
<input type="textarea" name="ArticleDesc" id="desc" placeholder="Enter Details" style="padding-bottom: 400px;"></div>
<br><br>
<div class="sub">
 	<input type="text" name="urlslug" id="url" placeholder="Enter URL Alias" ></div><br><br>

<button style="margin-left: 60px;" class="btn btn-danger btn-lg" onclick="submit()">Submit</button>

</div>
</div>
<Script>

  function test(){
    var lang  = '<?php echo $_GET['lang']; ?>';
    alert(lang);
  }
	function rep(){
		 window.location.replace('en/home-page');
	}
	function submit(){

var name= document.getElementById('name').value;
var sdesc = document.getElementById('sdesc').value;
var desc = document.getElementById('desc').value;
var id = document.getElementById('url').value;
var lang ='<?php echo $_GET['lang']; ?>';
	 $.ajax({
        url:"carticle.php?ArticleName="+name+"&ArticleShort="+sdesc+"&ArticleDesc="+desc+"&url="+id+"&lang="+lang,
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

