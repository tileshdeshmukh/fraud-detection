<?php
                       include('db.php');
                           date_default_timezone_set('Asia/Kolkata'); 
                           
                            $cardno = trim($_GET['cno']); 
                            $q = mysqli_query($conn, "select * from bank where card_no='$cardno'");
                            if($q == true)
                            {
                                while($data = mysqli_fetch_assoc($q))
                                {
                                    //<!-- Payment transfer -->
                                        $current_balance = $data['balance'];
                                        $transf_balance = $_GET['amo'];
                                        $mobil_b = $data['mobile'];
                                        $name = $data['name'];
                                        $acount = $data['acoun_no'];
 
                                         


                                        //Cut payment  
                                        $new_balance = $current_balance - $transf_balance;
                                    
                                        //create block for transaction
                                    ?>                                     
                                        <script>

                                        var request = new XMLHttpRequest()
                                        request.open("GET", "http://localhost:3000/transaction/<?php echo $transf_balance; ?>/<?php echo $name; ?>/admin", true)
                                        
                                            var re = request.send()
                                            console.log(block)

                                        request.onreadystatechange = (e) => {
                                            console.log(Http.responseText)
                                        }
                                        </script>
                                        <!-- end block -->
                                         
                                    <?php

                                                 
                                    $balance_q = mysqli_query($conn, "update bank set balance = '".$new_balance."' where mobile='".$mobil_b."' ");
                                      
                                      
                                      
                                      if($balance_q == true)
                                      {
                                        // Insert personal account Transaction Data 
                                        $dataQ = mysqli_query($conn, "insert into data(name,acount_no,card_no,amount,status,Date) values('".$name."','".$acount."','".$cardno."','". $transf_balance."','completed','".date('y/m/d h:i:s')."')");
                                        // end
                                        
                                        if($dataQ == true){
                                          echo '<script>
                                        var ask = window.confirm("Transaction Proceed Success");
                                        if (ask) {
                                            
                                    
                                            window.location.href = "http://localhost/project2020/index.php";
                                        }
                                    </script>';
                                        }

                                        else{ echo '<script>alert("Data Not Inserted");</script>'; }
                                        
                                        
                                         // header('Location:http://localhost/project2020/home.php?amo='.$_GET['amo']);
                                        
                                        }
                                        

                                   ?>
<!-- End Payment Transaction -->



<?php
                                  }
                            }
                            else
                            {
                                return false;
                                  
                            }
                      ?>