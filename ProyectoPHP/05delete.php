<?php

include("conexion.php");
$con=conectar();

$casilla=$_GET['id'];

$sql="DELETE FROM  planes_internet WHERE casilla='$casilla'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: 05admin.php");
    }
?>
