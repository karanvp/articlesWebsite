
	<?php
			
    include "./classes/Query.php";
   
    $q = new q\Query();
   
               $result=$q->fetchLanguages();
               $cars = array();
               if(mysqli_num_rows($result)>0){
                while ($row = $result -> fetch_row()) {
                   // printf ("%s \n",  $row[2]);
                    array_push($cars,$row[2]);
                  }
                } 

                $arrlength = count($cars);

                for ($x = 0; $x < $arrlength; $x++) {
                    echo $cars[$x];
                }
            
?>