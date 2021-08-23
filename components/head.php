 <head>

  <link rel="stylesheet" href="mystyle.css">
    <script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    
    <title></title>

  



<style>

header {
  padding: 1em;
 

  
  background-color: rgba(160, 81, 45, 0.116);
}

header nav{

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

  .profile .card{
 width: 30%;
 margin-bottom: 30px;


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
    align-self: flex-end;

  }

.profile{
  display: flex;
  justify-content: space-around;

  flex-wrap: wrap;
}

.profile .card{
  background-color: white;
  margin-bottom: 20px;

}

 .textContainer input{
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 200px;
    padding-right: 200px;
    margin-right: : 500px;
    margin-left: 10px;


  }

  .textContainer{
    margin-left: 600px;
  }

@media (max-width: 650px){
  
 .buttonHome{
     background-color: red; 
     padding: 15px 32px;
     /*margin-left: 50px;*/
     color: white;


  
  }

 
.textContainer{
  margin-left: 0px;
}


   

  .profile .card{

align-self: stretch;

flex-basis: 100%;
  }

 





}

@media (min-width: 651px) and (max-width: 899px){
.pagination{
  margin-left: 400px;
}
.profile .card{
 width: 45%;
 
}

.textContainer{
  margin-left: 160px;
}



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