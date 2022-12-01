<?php
include('../prcd/qc.php');
date_default_timezone_set('America/Mexico_City');
                  setlocale(LC_TIME, 'es_MX.UTF-8');
$fecha_qr = strftime("%Y-%m-%d,%H:%M:%S");

// today
$sqlToday = "SELECT * FROM agenda WHERE YEAR(fecha_reserva) = YEAR(CURRENT_DATE()) AND MONTH(fecha_reserva) = MONTH(CURRENT_DATE()) AND aprobar = 1";
$sqlResultToday = $conn->query($sqlToday);

// date
if(isset($_POST['fecha'])){
    $fechaBusqueda = $_POST['fecha'];
    $annio = substr($fechaBusqueda, 0, 4);
    $mes = substr($fechaBusqueda, 5, 2); 
    $sqlBusqueda = "SELECT * FROM agenda WHERE YEAR(venta_individual.fecha_venta) = $annio AND MONTH(venta_individual.fecha_venta) = $mes AND venta_individual.entrega = 1 GROUP BY inventario.talla";
    $resultadoBusqueda = $conn->query($sqlBusqueda);
}

