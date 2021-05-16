
    <?php
        include("conexion.php");
        $con=conectar();

        $casilla=$_POST['casilla'];
        $plan=$_POST['plan'];
        $velocidad_anterior=$_POST['velocidadanterior'];
        $velocidad_nueva=$_POST['velocidadnueva'];
        $tarifaz=$_POST['tarifaz'];
   
    $sql = "INSERT INTO planes_internet VALUES('$casilla','$plan','$velocidad_anterior','$velocidad_nueva','$tarifaz')";
    $stmt = $con->prepare($sql);
    $stmt ->execute();
    Header("Location: 05admin.php");
    

?>




    

