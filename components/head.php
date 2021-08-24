 <head>

  
    <script src="jquery.js"></script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    
    <title></title>

  



<style>
header {
  padding: 1em;
 
  background-color: rgba(160, 81, 45, 0.116);
}

     .profile .card{
 width: 100%;
 margin-bottom: 30px;


}

 


  #menu{
      width: 35px;
      height: 30px;
      cursor: pointer;


    }


    .bar{
      height: 5px;
      width: 100%;
      background-color: #b81568;
      transition: 0.7s ease;
    }

    #bar1{
      transform: translateY(-4px);

    }

    #bar3{
      transform: translateY(4px);
      
    }

    .change .bar{
      background-color: #b81568;
    }


    .change #bar1{
      transform: translateY(4px) rotateZ(-45deg);
    }

    .change #bar3{
      transform: translateY(-6px) rotateZ(45deg);
    }

    .change #bar2{

      opacity: 0;
    }



    .nav li a{
      color: black;
      text-decoration: none;

    }

    .nav li a:hover{
      font-weight: bold;
    }

    .nav li{
      list-style: none;
      padding: 16px 0px;
    }

    .nav{
      padding: 0;
      margin: 0 20px;
      transition: 0.7s ease;
      display: none;

    }

    .change{
      display: block;
    }

  .buttonHome{
     background-color: red; 
     padding: 15px 32px;
     /*margin-left: 50px;*/
     color: white;


  
  }
 .pagination{
  margin-left: 800px;
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
  


 
.textContainer{
  margin-left: 0px;
}


   

  .profile .card{

align-self: stretch;

flex-basis: 100%;
  }

 

#searchUser{
  padding-right: 350px;
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
    
<div id="menu-barb">
<div id="menu" onclick="onClickMenu()">
    
    <div id="bar1" class="bar"></div>
     <div id="bar2" class="bar"></div>
 <div id="bar3" class="bar"></div>
  </div>

 <ul class="nav" id="nav">
    <li><a href="homePage.php">Home</a></li>
    <li><a href="formCreateArticle.php">Create Articles</a></li>
    <li><a href="mainPage.php">Sign out</a></li>
   

    



  </ul>
</div>

<input type="text" id="searchUser" class="form-control" placeholder="Search Article..." >
</header>
<script type="text/javascript">


  function onClickMenu(){
    document.getElementById("nav").classList.toggle("change");
    document.getElementById("menu").classList.toggle("change");

    // document.getElementById("nav").style.display = "block";
  }
</script>
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