<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image Slider</title>
    <script src="jquery.js"></script>
    <style>
        body{
  margin: 0;
  padding: 0;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #23E3C9;
}

.slider{

    
  width: 1400px;
  height: 800px;
  border-radius: 10px;
  overflow: hidden;
}

.slides{
  width: 500%;
  height: 500px;
  display: flex;
}

.slides input{
  display: none;
}

.slide{
  width: 20%;
  transition: 2s;
}

.slide img{
  width: 1400px;
  height: 800px;
}

/*css for manual slide navigation*/

.navigation-manual{
  position: absolute;
  width: 800px;
  margin-top: 200px;
  margin-left: 300px;
  display: flex;
  justify-content: center;
}

.manual-btn{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  cursor: pointer;
  transition: 1s;
}

.manual-btn:not(:last-child){
  margin-right: 40px;
}

.manual-btn:hover{
  background: #40D3DC;
}

#radio1:checked ~ .first{
  margin-left: 0;
}

#radio2:checked ~ .first{
  margin-left: -20%;
}

#radio3:checked ~ .first{
  margin-left: -40%;
}

#radio4:checked ~ .first{
  margin-left: -60%;
}

/*css for automatic navigation*/

.navigation-auto{
  position: absolute;
  display: flex;
  width: 800px;
  justify-content: center;
  margin-top: 700px;
  margin-left: 300px;
}

.navigation-auto div{
  border: 2px solid #40D3DC;
  padding: 5px;
  border-radius: 10px;
  transition: 1s;
}

.navigation-auto div:not(:last-child){
  margin-right: 40px;
}

#radio1:checked ~ .navigation-auto .auto-btn1{
  background: #40D3DC;
}

#radio2:checked ~ .navigation-auto .auto-btn2{
  background: #40D3DC;
}

#radio3:checked ~ .navigation-auto .auto-btn3{
  background: #40D3DC;
}

#radio4:checked ~ .navigation-auto .auto-btn4{
  background: #40D3DC;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 130px;
}

.bottom-left {
  position: absolute;
  bottom: 408px;
  font-weight: bold;
  left: 810px;
}
    </style>
  </head>
  <body>

    <!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->

        <div class="centered">Centered</div>
      <div class="bottom-left">By: Karan Pagare</div>
        <div class="slide first">

        
          <img src="1.jpg" alt="">
        </div>
        <?php 
	include "db_conn.php";
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <script>
                 
               
                    $('.slides').append(`<div class="slide"><img  src="uploads/<?=$images['image_url']?>"> </div>`);
                 
             	
               
                
                 </script>
    <?php } }?>
      
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>

  </body>
</html>