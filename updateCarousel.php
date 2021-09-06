<html>
    <head>
    <?php require_once("components/head.php") ?>
    </head>
    <body>
        <br><br><br>
    <div class="form">

    <form action="upload.php"
           method="post"
           enctype="multipart/form-data">
    
     <input type="text" name="title" id="title" placeholder="Enter Title"><br><br>
     <input type="file" 
                  name="my_image">

                  <input type="hidden" id="imgID" name="imgID" value=<?php echo $_GET['q'] ?>>

     <input type="submit" 
                  name="submit"
                  value="Upload" onclick="aler()">
    </form>

</div>

<Script>
    // function aler(){
    //     <?php 
    //     $img = $_GET['q'];
    //     include "db_conn.php";
    //     $sql =  "DELETE FROM `images` WHERE `image_url` = '$img' ";
	// 			mysqli_query($conn, $sql);
    //     ?>
    }
</script>
    </body>
    </html>