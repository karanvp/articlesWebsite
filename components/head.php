<head>

<!-- this is a comment -->
  <script src="jquery.js"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <base href="http://localhost:8888/article-website/">
  <title></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style>

.navbar a:hover{
border-bottom:4px solid white;
}

.active {
text-decoration-line: underline !important;
text-decoration-thickness: 2px !important;
color: rgb(20, 19, 19);
}

  </style>
  
<?php session_start();?>
<script>
  
   var selectedLanguage = '<?php echo $_SESSION['lang']?>';
   
   
 </script>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">


<div class="container">

  <a class="navbar-brand" href="/article-website/<?php echo $_SESSION['lang']?>/home-page">ArticlesForU</a>
  <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarid">
<span class="navbar-toggler-icon"></span>
</button>

  <div class="collapse navbar-collapse" id="navbarid">
    
  <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="menunav">
      
      
     
      
    </ul>
  
    <input type="text" id="searchUserz" class="" placeholder="Search Article..." >
     
  
  </div>
</div>
</nav>



<script>

var categ = '<?php echo $_SESSION['category'] ?>';
// alert(categ);



$.ajax({
     url:"checkRTL.php",
     data:{
      'lan':'<?php echo $_SESSION['lang']?>',
     },
     success: function(data) {   
       
      
     }})


</script>


<div class=".sty">
<?php
$checkerRTL = $_SESSION['checkRTL'];

if($checkerRTL=='true'){
  echo '<link rel="stylesheet" href="rtlsty.css">';
}else{
  echo '<link rel="stylesheet" href="style.css">';
}

?>
</div>


  



<header>
  

</div>



      <nav class="navDesktop">    
        <div id="tdRight">

           </div>
      </nav>

   

</header><script>

  



var a = String(<?php  echo $_SESSION['mbk']; ?>);
// var defaultlang = 'en';



$.ajax({
     url:"testbootstrapcomp.php",
     data:{
      'lan':'<?php echo $_SESSION['lang']?>',
     },
     success: function(data) {
     
    //  header("Location: articlesWebsite/home-page");
     }})




<?php



?>






if(a.includes('true')){


     //window.location.reload(true);
$('#menunav').append(`
      <li class="nav-item">
      <a class="nav-link" href="/article-website/${selectedLanguage}/form-create-article"><?php echo $_SESSION['create-article']?></a>
      </li>
      `);


$('#menunav').append(`

      
      <li class="nav-item">
      <a class="nav-link" href="/article-website/${selectedLanguage}/my-profile"><?php echo $_SESSION['my-profile']?></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="/article-website/${selectedLanguage}/carousels"><?php echo $_SESSION['create-carousel']?></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" onclick="signOut()"><?php echo  $_SESSION['signout']?></a>
      </li>
      `);

      if(categ=='admin'){
$('#menunav').append(`
<li class="nav-item">
      <a class="nav-link" href="/article-website/${selectedLanguage}/form-language">admin settings</a>
      </li>

`);
}
}

else{
 
    
//   `);
$('#menunav').append(`

<li class="nav-item">
        <a class="nav-link" href="/article-website/login-page"><?php echo  $_SESSION['login']?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/article-website/registration-page"><?php echo  $_SESSION['register']?></a>
      </li>`);

}



</script>

<script type="text/javascript">

function signOut(){

$("#td").empty();
$('#td').append(` <li><a href="/article-website/login-page">Login</a></li>
  <li><a href="/article-website/registration">Register</a></li>`);

$.ajax( "logout.php" )
.done(function() {
 
})

document.location.href = '/article-website/en/home-page';

}

$(document).ready(function () {
      // Underline to remain in navbar after click using URL
      jQuery(function ($) {
        var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $('.nav-link').each(function () {
          if (this.href === path) {
            $(this).addClass('active');
          }
        });
      });
    });

</script>


</head>