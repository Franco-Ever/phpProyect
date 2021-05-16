<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM planes_internet WHERE casilla='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body style="background-image:linear-gradient(to right,hsla(0, 0%, 2%, 0.795),hsla(0, 0%, 0%, 0.329))">
                <div class="container mt-5" >
                <h1 style="color: #fff;">Datos de casilla [<?php echo $row['casilla']  ?>] Plan [<?php echo $row['plan']  ?>]</h1>
                    <br><br>
                    <form action="05update.php" method="POST">
                                <input type="hidden" class="form-control mb-3" name="casilla" placeholder="value" value="<?php echo $row['casilla']  ?>">
                                <label style="color: #fff;font-size:1.5rem;">Plan:</label>
                                <input type="text" class="form-control mb-3" name="plan" placeholder="Plan" value="<?php echo $row['plan']  ?>">
                                <label style="color: #fff;font-size:1.5rem;">Velocidad Anterior:</label>
                                <input type="text" class="form-control mb-3" name="velocidadanterior" placeholder="Velocidad Anterior" value="<?php echo $row['velocidad_anterior']  ?>">
                                <label style="color: #fff;font-size:1.5rem;">Velocidad Nueva:</label>
                                <input type="text" class="form-control mb-3" name="velocidadnueva" placeholder="Velocidad Nueva" value="<?php echo $row['velocidad_nueva']  ?>">
                                <label style="color: #fff;font-size:1.5rem;">Tarifa:</label>
                                <input type="text" class="form-control mb-3" name="tarifaz" placeholder="Tarifa" value="<?php echo $row['tarifaz']  ?>">
                                
                            <input type="submit" class="btn btn-success btn-block" value="Actualizar">
                    </form>
                </div>
    </body>
</html>
<?php


