<?php

include("conexion.php");
$con=conectar();

$identidades=$_GET['id'];

$sql="DELETE FROM  solicitud WHERE identidades='$identidades'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: 06admin.php");
    }
?>
