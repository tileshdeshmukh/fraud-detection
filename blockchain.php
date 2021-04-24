<?php
    $response = file_get_contents('http://127.0.0.1:3000/blockchain');
                    
    $blocks = json_decode($response);
    
    //echo $blocks->chain[0]->index;
    $chains = count($blocks->chain);
    $pending = count($blocks->pendingTransactions);
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Blockchain</title>

    <style>

    </style>
</head>

<body class="pt-5">


    <div class="container">
        <h2>Blockchain</h2>
        <h5>Pending Transactions : <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                <?php echo $pending ?>
            </button></a></h5>
        <hr>
        <div class="row">
            <?php               
                    for($i=1; $i<$chains; $i++){
                        
             ?>
            <div class="col-lg-3 col-lg-3col-sm-10 p-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Block :<samp
                                class="text-primary text-lg"><?php echo $blocks->chain[$i]->index ?></samp></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Timestamp: <span
                                class="text-primary"><?php echo $blocks->chain[$i]->timestamp ?></span> </h6>
                        <hr>
                        <p class="card-text">PreviuosHash: <span
                                class="text-danger"><?php echo $blocks->chain[$i]->prevBlockHash ?></p>
                        <?php
                            if($i == 0)
                            { 
                            ?>
                        <td scope="row"><?php echo '--' ?></td>
                        <td scope="row"><?php echo '--' ?></td>
                        <?php
                            }
                            else
                            {
                            
                            $tran = count($blocks->chain[$i]->transactions);
                            for($t=0; $t<$tran;$t++)
                            {
                                if($tran == 1)
                                {
                                ?>
                        <p>Amount : <span class="text-primary"><?php echo $blocks->chain[$i]->transactions[0]->amount ?>
                            </span></p>
                        <p>Sender : <span class="text-primary"><?php echo $blocks->chain[$i]->transactions[0]->sender ?>
                            </span></p>
                                    
                                <?php 
                                
                                }
                                else{ ?>

                                    <p>Amount : <span class="text-primary"><?php echo $blocks->chain[$i]->transactions[$t]->amount ?>
                                    </span></p>
                                <p>Sender : <span class="text-primary"><?php echo $blocks->chain[$i]->transactions[$t]->sender ?>
                                    </span></p>
                                    
                                    <?php
                                }
                            }
                                
                                ?>

                        <?php } ?>
                        <hr>
                        <p class="">Hash : </p><spam class="text-success"><?php echo $blocks->chain[$i]->hash ?></spam>
                        


                    </div>
                </div>

            </div>
            <?php
                    }
                    ?>
        </div>


    </div>







    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Pending Transactions</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="row">
            <?php               
                   
                   for($j=0; $j<$pending; $j++){
                        
             ?>

                    <div class="col-auto ">
                        <div class="card mb-2" style="">
                            <div class="card-body">
                                <h5 class="card-title">Block :<samp
                                        class="text-primary text-lg"><?php echo $j ?></samp>
                                </h5>


                                <p>Amount : <span class="text-primary"><?php echo $blocks->pendingTransactions[$j]->amount ?>
                                    </span></p>
                                <p>Sender : <span class="text-primary"><?php echo $blocks->pendingTransactions[$j]->sender ?>
                                    </span></p>



                            </div>
                        </div>

                    </div>
<?php } ?>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    
                </div>
            </div>
        </div>
    </div>












    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>




</body>

</html>