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
			height: auto;
		}
		a {
			text-decoration: none;
			color: black;
		}
 
.centeredThumbnail{
	position: absolute;
	
	font-weight:bold;
	margin-left:60px;
	margin-top:30px;
}



	</style>
</head>
<body>
<br><br><br>
<div class="form">
<form action="upload.php"
           method="post"
           enctype="multipart/form-data">

		   <input type="text" name="title" id="title" placeholder="Enter Title"><br><br>

           <input  class="btn btn-danger btn-sm" type="file" 
                  name="my_image">

           <input class="btn btn-danger btn-sm" type="submit" 
                  name="submit"
                  value="Upload">
       
     </form>
       </div>       
	<br>
       <br>
       <br>
       <br>
	<div class="imageContainer">
		
	
     <a href="carousels.php">&#8592;</a>

     <?php 


session_start();

include "./classes/Query.php";

$q = new q\Query();

		$currentUser = $_SESSION['user'];
          
          $res = $q->findImagesByAuthor($currentUser);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb"> 
				 <button class="btn btn-danger btn-sm" id=<?=$images['image_url']?> onclick="myfunction(id)">DELETE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 <button class="btn btn-info btn-sm" id= <?=$images['image_url']?> onclick="myfun(id)">UPDATE</button>
				
				 <div class="md">
				 <div class="centeredThumbnail" ><?=$images['image_title']?></div>
             	<img id = <?=$images['image_url']?>  src="uploads/<?=$images['image_url']?>">
			  </div>
				
             </div>
          		
    <?php } }?>

    </div>

	<Script>

		function myfun(id){
			//alert(id);
			window.location.replace('updateCarousel.php?q='+id);
		}
function myfunction(id){

	let confirmAction = confirm("Are you sure to execute this action?");
        if (confirmAction) {
			$.ajax({url: "deleteImage.php?q="+id, success: function(result){
   
  

   
}});
          alert("Action successfully executed");
        } else {
          alert("Action canceled");
        }
	//alert(id);

}

	</script>
</body>
</html>