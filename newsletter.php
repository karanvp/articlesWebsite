<html>

<head></head>

<body>
<center><br>
<h1>Newsletter</h1>
</center>

<?php

include "./classes/Query.php"; 
$query = new q\Query(); 
$result = $query->findRecentArticles();

while($row = mysqli_fetch_array($result)) {
    echo "<br>";
    echo "<br>";
    echo "<center>";
   echo "<hr>";
     echo "<h3>".$row['ID']." <a href='retreiveDesc.php?q={$row['ID']}'>".$row['name']."</a></h3>";
     echo "<h3>".$row['shortdescription']."</h3>";
     //echo "<a href='retreiveDesc.php?q={$row['ID']}'>link</a>";
     echo "</center>";
     echo "<br>"; // Print a single column data
          // Print the entire row data

        //  print_r($row);
}


?>



</body>



</html>