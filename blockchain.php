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
</head>

<body>

    <!--  <section style="margin:50px;">
        <div class="container">
            <h2>Blockchain</h2>
            <hr>
            <div class="" style="margin:30px;">

                <table class="table-striped border-success">
                    <thead>
                        <tr>
                            <th data-field="id">
                                <span class="text-dark">
                                    Index ID
                                </span>
                            </th>
                            <th data-field="name">
                                <span class="text-dark">
                                    Timestamp
                                </span>
                            </th>
                            <th data-field="date">
                                <span class="text-dark">
                                    PrevBlockHash
                                </span>
                            </th>
                            <th data-field="date">
                                <span class="text-dark">
                                    Transaction
                                </span>
                            </th>
                            <th data-field="date">
                                <span class="text-dark">
                                    Hash
                                </span>
                            </th>
                            <th data-field="date">
                                <span class="text-dark">
                                    Status
                                </span>
                            </th>
                        </tr>
                    </thead>
                </table>

            </div>
        </div> 
    </section> -->



    <script>
    fetch('http://127.0.0.1:3000/blockchain').then(function(response) {
        var nm = response.json();
            console.log(nm);
    }).then(function(json) {
        let products = json;
        consol.log(initialize(products));
    
    
    }).catch(function(err) {
        console.log('Fetch problem: ' + err.message);
    });
              
        
    </script>




<?php
                    // date_default_timezone_set('Asia/Kolkata'); 
                    // $Lat = print '<script> Lat </script>';
                    // $Long = print '<script> Long </script>';
                    // $date = date('y/m/d');
                    // $time = date('h:i:s');

                    // $q = mysqli_query($conn, "INSERT INTO locations (card_no, src_lat, src_lon, mobile_lat, mobile_lon,T_Date,T_Time) VALUES ('".$cardno."', '".$Lat."', '".$Long."', '".$m_lat."', '".$m_lon."', '".$date."', '".$time ."',)");

                    ?>












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