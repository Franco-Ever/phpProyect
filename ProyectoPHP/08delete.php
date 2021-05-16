<?php

include("conexion.php");
$con=conectar();

$ci=$_GET['id'];

$sql="DELETE FROM  atencion WHERE ci='$ci'";
$query=mysqli_query($con,$sql);

$stmt = $con->prepare($sql);
$stmt ->execute();
Header("Location: 08admin.php");
?>
