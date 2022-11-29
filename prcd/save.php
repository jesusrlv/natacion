<html>
<meta charset="utf-8">
    <header>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </header>
<body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap');
    body{
        font-family: 'Montserrat', sans-serif;
    }
</style>
    
<?php
include('qc.php');

$date = $_POST['date'];
$hour = $_POST['hour'];
$last = $_POST['last'];
$first = $_POST['first'];
$email = $_POST['email'];
$address = $_POST['address'];

$sql = "INSERT INTO agenda(fecha_reserva,hora,apellido,nombre,email,domicilio) VALUES('$date','$hour','$last','$first','$email','$address')";
$resultado= $conn->query($sql);


if($resultado){
    
    echo "<script type=\"text/javascript\">
    Swal.fire({
        icon: 'success',
        imageUrl: '../assets/brand/img/logo_store_shoes_sin_fondo.png',
        imageHeight: 200,
        imageAlt: 'Natatorial',
        title: 'Done!',
        text: 'Your reservation it's done!',
        confirmButtonColor: '#3085d6',
        footer: 'Natatorial'
    }).then(function(){window.location='../schedule.php';});</script>";
    }
    else{
    echo 'No se registró la actividad';
    }

?>

</html>