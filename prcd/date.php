<?php
include('qc.php');

$date = $_POST['dateS'];
$time = $_POST['dateT'];
$sql = "SELECT * FROM agenda WHERE fecha_reserva = '$date' AND hora = '$time'";
$resultSql = $conn->query($sql);
$no_resultados = mysqli_num_rows($resultSql);


    if($no_resultados==1){
        echo '
        <div class="alert alert-danger" role="alert">
            Date no available!
        </div>
        <script>
        document.getElementById("btnCheckout").disabled = true;
        </script>
      
        ';
    }
    else if($no_resultados==0){
        
        echo '
        <div class="alert alert-primary" role="alert">
            Date available! <strong>('.$date.' / '.$time.' hs)</strong>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
                <label class="form-check-label" for="flexCheckChecked">
                Reserve
                </label>
            </div>
        </div>
        <script>
        document.getElementById("btnCheckout").disabled = false;
        </script>
        ';
    }

?>