<?php

include("conexion.php");
$con=conectar();

$casilla=$_POST['casilla'];
$plan=$_POST['plan'];
$velocidad_anterior=$_POST['velocidadanterior'];
$velocidad_nueva=$_POST['velocidadnueva'];
$tarifaz=$_POST['tarifaz'];

$sql="UPDATE `planes_internet` SET `casilla`='$casilla',`plan`='$plan',`velocidad_anterior`='$velocidad_anterior',`velocidad_nueva`='$velocidad_nueva',`tarifaz`='$tarifaz' WHERE casilla='$casilla'";
//$sql="UPDATE planes_internet SET casilla='$casilla', plan='$plan',velocidadanterior='$velocidad_anterior',velocidadnueva='$velocidad_nueva',tarifaz='$tarifaz' WHERE casilla='$casilla'";
    $stmt = $con->prepare($sql);
    $stmt ->execute();
    Header("Location: 05admin.php");
    
?>