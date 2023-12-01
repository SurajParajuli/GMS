<?php
                                                                                        
                                            
                                                $con = mysqli_connect('localhost','root','','gms');
                                                        
                                                if(!$con){
                                                    die("Connection Error".mysqli_connect_error());
                                                }
                                        $sql = "Select * from equipment ORDER BY Tdate DESC LIMIT 1";
                                            $result = mysqli_query($con,$sql);
                                            $row = mysqli_fetch_assoc($result);
                                              // Set the value of the form field
                                            echo print_r($row);
                                            ?>