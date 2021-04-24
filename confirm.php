




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Loading....</title>
</head>

<body>
<?php

$cardno = base64_decode($_GET['cno']);
$amo = base64_decode($_GET['amo']);
include('db.php');
$qcom = mysqli_query($conn, "select * from bank where card_no='$cardno'");
        while($user = mysqli_fetch_assoc($qcom))
        {
            if($user)
            {
            
                $name = $user['name'];
                $mobil_b = $user['mobile'];
                $cardno = $user['card_no'];
                $acount = $user['acoun_no'];
                $mob = $user['mobile'];
                $d = date('yyyy-mm-dd');
                $r = rand();
                $hash = hash('gost',$d.$r);
                $dataQ1 = mysqli_query($conn, "insert into data(name,acount_no,card_no,mobile,amount,status,hash,Date) values('".$name."','".$acount."','".$cardno."','".$mob."','". $amo."','uncompleted','".$hash."','".date('y/m/d h:i:s')."')");
            
            }

        }







echo '
    <div class="container mt-5">
        <div class="d-flex justify-content-center pt-5">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">
                    <h1>Loading...</h1>
                </span>
            </div>

        </div> ';
       
       echo' <h3 class="d-flex justify-content-center pt-3">Please Wait for allowe to Trasanction......</h3>';
         $last_mob =  str_pad(substr($mob, -4), strlen($mob), "X", STR_PAD_LEFT); 
        echo '<h6 class="text-primary d-flex justify-content-center pt-2">On This Number <?php echo $last_mob; ?></h6>
    </div>';




                        //  echo "<meta http-equiv='refresh' content='0'>";

do{
        $qm = mysqli_query($conn, "select * from data where hash='".$hash."' AND status='completed' OR status='faile' ");
        $u = mysqli_fetch_assoc($qm);
        if($u)
        {
            $user_say = 1;
            echo "Transaction Completede";
        }
        else{
            $user_say = 0;
            echo '
                <from>
                <input type="hidden" id="custId" name="custId" value="3487">
                </form>
                ';
        }
        

    }while($user_say == 0);

    

?>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>