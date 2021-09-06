<!DOCTYPE html>
<html>
<head>
	<title></title>

<script src="jquery.js"></script>
<?php require_once("components/head.php") ?>
<script type="text/javascript">
		
		$(document).ready(function(){

			// alert('ready');

	// 			$('#a').on('click',function(){
	// 	alert('clicked');
	// });


			$('.next').on('click',function(){
				
				var currentImg = $('.active');

				var nextImg = currentImg.next();

				if(nextImg.length){
					currentImg.removeClass('active').css('z-index',-10);
					nextImg.addClass('active').css('z-index',10);
				}
			})



			$('.prev').on('click',function(){
				
				var currentImg = $('.active');

				var prevImg = currentImg.prev();

				if(prevImg.length){
					currentImg.removeClass('active').css('z-index',-10);
					prevImg.addClass('active').css('z-index',10);
				}
			})


		})
	






	</script>
	<style type="text/css">
		
		body{
			font-size: 14px;
			color: #fff;
			background-color: rgba(160, 81, 45, 0.116);
		}

		a{
			color: #fff;
			text-decoration: none;
		}

		h1{
			text-align: center;
            color:black;
		}

		.container{
			width: 540px;
			margin: 40px auto;
			overflow: auto;
		}

		.slider-inner{
			width: 500px;
			height: 300px;
			position: relative;
			overflow: hidden;
			float: left;
			padding: 3px;
			border:#666 solid 1px;

		}

		.slider-inner img{
			display: none;
			width: 500px;
			height: 300px;


		}

		.slider-inner .active{
			display: inline-block;
		}

		.prev,.next{
			float: left;
			margin-top: 130px;
			cursor: pointer;
		}

		.prev{
			position: relative;
			margin-right: -45px;
			z-index: 100;
		}

		.next{
			position: relative;
			margin-left: -45px;
			z-index: 100;
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
  bottom: 8px;
  left: 210px;
}


	</style>
	
	
</head>
<body>

<div class="container">
	
	<h1>Gallery</h1>
	
	<div class="slider-outer">
		
		<img src="l2.png" class="prev" alt="Prev">

		<div class="slider-inner">
		<div class="centered">Centered</div>
			<div class="bottom-left">By: Karan Pagare</div>

			<?php 
	include "db_conn.php";
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
            
             	<img class="active" src="uploads/<?=$images['image_url']?>">
         
          		
    <?php } }?>

			
			

		</div>

		<img src="l1.png" class="next" alt="Next">
		

	</div>
	
	



</div>


</body>
</html>