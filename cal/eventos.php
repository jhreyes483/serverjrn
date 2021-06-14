<?php
header('Content-Type: application/json');
$pdo=new PDO("mysql:dbname=empresa;host=localhost","root","");

$sql = "SELECT * FROM reuniones";

$sentenciaSQL= $pdo->prepare($sql);
$sentenciaSQL->execute();
$r = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($r);

?>