<?php
                                    //     include "./classes/Query.php"; 

                                     
                                    //     $query = new q\Query(); 
                                    //    // $email = 
                                    //     $query->checkSubscriptionStatus('karanvpagare@gmail.com'); 

                                    // $con=mysqli_connect("localhost","root","root","login");
                                    // $sql="select * from subscribers where email ='karanvpagare@gmail.com' ";
                                    // $query=mysqli_query($con,$sql);


                                    $con=mysqli_connect("localhost","root","root","login");
                                       $sql1="select * from users where username ='Kesha911' ";

                                       $query1=mysqli_query($con,$sql1);
                                       
                                       while ($row = $query1 -> fetch_row()) {
                                        printf ( $row[4]);
                                      }
                                       
                                    //    echo $row['email'];
                                    //    if(mysqli_num_rows($query)>0){
                                    //        echo "SUCCESS";
                                    //    }else {
                                    //        echo "failure";
                                    //    }
                                        ?>