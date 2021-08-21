 <head>

  <link rel="stylesheet" href="mystyle.css">
    <script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title></title>

  



<style>

header {
  padding: 1em;
  display: flex;

  align-items: center;
  background-color: rgba(160, 81, 45, 0.116);
}

header nav{
flex: 1;
}
header nav a {
  margin: 5px;
  font-size: 14px;
}

a {
  text-decoration: none;
  color: #2e2e2e;
}
a:hover {
  color: crimson;
}

.pagination{
  margin-left: 800px;
}

  

@media(max-width: 576px){
   .pagination{
margin-left: 200px;
 }

 .buttonHome{
     background-color: red; 
     padding: 15px 32px;
     margin-left: 50px;
     color: white;


  
  }

 



   .textContainer input{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 200px;
    padding-right: 200px;
    margin-right: : 500px;
    margin-left: 10px;


  }

  .profile .card{
background-color: white;
margin-bottom: 50px;
  }

  .button{
    margin-left: 350px;
  }



}
@media(min-width: 577px){
  .profile .card{
    margin-top: 30px;
  margin-bottom: 120px;
  margin-left: 100px;
  margin-right: 100px;
  background-color: white;
  
  padding-bottom: 20px;
}


  .profile .button{
   


margin-left: 1200px;
margin-right: 50px;
    
   
  }

  .profile input{
    margin-left: 50px;
  }



  .buttonHome{
     background-color: red; /* Green */
  
    color: white;
    padding: 15px 32px;
    text-align: center;
   
  
    font-size: 16px;
  }



  /*.profile .card .bspan{
    flex-direction: row;
  }*/
}






</style>



    <!-- Custom styles for this template -->
 
   <!--  <link rel="stylesheet" href=css/style.css> -->

  <!--   <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
      <a class="navbar-brand" href="homePage.php">Home</a>
  <a class="navbar-brand" href="formCreateArticle.php">Create Article</a>
  

<input type="text" id="searchUser" class="form-control" placeholder="Search Article..." >
   
  <a class="navbar-brand" href="mainPage.php" style="margin-left: 1000px">Signout</a>
 

  
</nav> -->

  <header>
        <!-- flex container -->
       
        <nav>
            
            <a href="homePage.php">Home</a>
            <a href="formCreateArticle.php">Create Article</a>
             
            <input type="text" id="searchUser"  placeholder="Search Article...">
            <a href="mainPage.php">Signout</a>
        </nav>
        
    </header>
    




<script>
// function CustomAlert(){
//     this.render = function(dialog){
//         var winW = window.innerWidth;
//         var winH = window.innerHeight;
//         var dialogoverlay = document.getElementById('dialogoverlay');
//         var dialogbox = document.getElementById('dialogbox');
//         dialogoverlay.style.display = "block";
//         dialogoverlay.style.height = winH+"px";
//         dialogbox.style.left = (winW/2) - (550 * .5)+"px";
//         dialogbox.style.top = "100px";
//         dialogbox.style.display = "block";
//         document.getElementById('dialogboxhead').innerHTML = "Alert";
//         document.getElementById('dialogboxbody').innerHTML = dialog;
//         document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">OK</button>';
//     }
//   this.ok = function(){
//     document.getElementById('dialogbox').style.display = "none";
//     document.getElementById('dialogoverlay').style.display = "none";
//   }
// }
// var Alert = new CustomAlert();
</script>

<!-- <div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div> -->

  </head>