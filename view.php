<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>

	<?php require_once("components/head.php") ?>
	<title>View</title>
	<style>
		.imageContainer{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
		}
		body {
			
			
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
	<br>
	<div class="imageContainer">
		
	
     <a href="carousels.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>
          		
    <?php } }?>

    </div>
</body>
</html>