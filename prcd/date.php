<?php
$date = $_POST['dateS'];
$sql = "SELECT * FROM date WHERE date = $date";
$resultSql = $conn->query($sql);

echo '

';
?>