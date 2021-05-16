
    <?php
        include("conexion.php");
        $con=conectar();

    if (isset($_POST['submit'])) {
        $ci=$_POST['ci'];
        $nombres=$_POST['nombres'];
        $correos=$_POST['correos'];
        $telefonos=$_POST['telefonos'];
        $clientes=$_POST['clientes'];
        $preguntas=$_POST['preguntas'];

        echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css'> <br><br><br>
        
        <h1 style='text-align: center;font-size: 2rem;'>Datos Ingresados de manera Incorrecta</h1><br>";

        if (empty($_POST['ci'])) {
            echo "<div class='container'><div class='notification is-danger'>
            Ingrese su Identificación
                </div></div><br>";
        }else{
            if (!is_numeric($_POST['ci'])) {
                echo "<div class='container'><div class='notification is-warning'>
                Ingrese Numeros Por Favor
                </div></div><br>";
            }
        }

    if (empty($_POST['nombres'])) {
        echo "<div class='container'><div class='notification is-danger'>
        Ingrese su Nombre
            </div></div><br>";
    }


    if (empty($_POST['correos'])) {
        echo "<div class='container'><div class='notification is-danger'>
        Ingrese su Email
            </div></div><br>";

    }else{
        if (!filter_var($_POST['correos'], FILTER_VALIDATE_EMAIL)) {
            echo "<div class='container'><div class='notification is-warning'>
            El Email es Incorrecto Vuelva a Ingresar
            </div></div><br>";
        }
    }
    if (empty($_POST['telefonos'])) {
        echo "<div class='container'><div class='notification is-danger'>
        Ingrese Número de Télefono
            </div></div><br>";

    }else{
        if (!is_numeric($_POST['telefonos'])) {
            echo "<div class='container'><div class='notification is-warning'>
            Ingrese Numeros Por Favor
            </div></div><br>";
        }
    }
    if (empty($_POST['clientes'])) {
        echo "<div class='container'><div class='notification is-danger'>
        Tiene que seleccionar Si Usted es Usuario o No
            </div></div><br>";

    }
    if (empty($_POST['preguntas'])) {
        echo "<div class='container'><div class='notification is-danger'>
        No especifico la El problema o la pregunta que tiene.
            </div></div><br>";
            echo"<div class='container'><a href='./tvsolicitud.php' class='button is-primary is-rounded'>Volver a Intentarlo</a></div>";
            echo "<script>alert('Hubo algunos errores al enviar El problema');</script>";
            exit;
    }

    
    $sql = "INSERT INTO atencion VALUES('$ci','$nombres','$correos','$telefonos','$clientes','$preguntas')";
    $stmt = $con->prepare($sql);
    $stmt ->execute();
    Header("Location: index.php");
    
}
?>




    

