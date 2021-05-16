
    <?php
        include("conexion.php");
        $con=conectar();

    if (isset($_POST['submit'])) {
        $identidades=$_POST['identidades'];
        $planes=$_POST['planes'];
        $nombres=$_POST['nombres'];
        $apellidos=$_POST['apellidos'];
        $razones=$_POST['razones'];
        $correos=$_POST['correos'];
        $telefonofijo=$_POST['telefonofijo'];
        $telefonocelular=$_POST['telefonocelular'];
        $telefonooficina=$_POST['telefonooficina'];
        $celularoficina=$_POST['celularoficina'];
        $fechacontratacion=$_POST['fechacontratacion'];
        $latitud=$_POST['latitud'];
        $longitud=$_POST['longitud'];

        echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css'> <br><br><br>
        
        <h1 style='text-align: center;font-size: 2rem;'>Datos Ingresados de manera Incorrecta</h1><br>";

        if (empty($_POST['identidades'])) {
        echo "<div class='container'><div class='notification is-danger'>
        Ingrese su Documento de Identidad
            </div></div><br>";
    }else{
        if (!is_numeric($_POST['identidades'])) {
            echo "<div class='container'><div class='notification is-warning'>
            Ingrese Numeros Por Favor
            </div></div><br>";
        }
    }
    if (empty($_POST['planes'])) {
        echo "<div class='container'><div class='notification is-danger'>
        elija el Plan de su Preferenacia
            </div></div><br>";
    }

    if (empty($_POST['nombres'])) {
        echo "<div class='container'><div class='notification is-danger'>
        Ingrese su Nombre
            </div></div><br>";
    }

    if (empty($_POST['apellidos'])) {
        echo "<div class='container'><div class='notification is-danger'>
        Ingrese su Apellido
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
    if (empty($_POST['telefonofijo'])) {
        echo "<div class='container'><div class='notification is-danger'>
        Ingrese Número de Télefono
            </div></div><br>";

    }else{
        if (!is_numeric($_POST['telefonofijo'])) {
            echo "<div class='container'><div class='notification is-warning'>
            Ingrese Numeros Por Favor
            </div></div><br>";
        }
    }
    if (empty($_POST['fechacontratacion'])) {
        echo "<div class='container'><div class='notification is-danger'>
        Ingrese la Fecha de Instalación
            </div></div><br>";

    }
    if (empty($_POST['latitud'])) {
        echo "<div class='container'><div class='notification is-danger'>
        No especifico la Direccion
            </div></div><br>";
            echo"<div class='container'><a href='./paquetesolicitud.php' class='button is-primary is-rounded'>Volver a Intentarlo</a></div>";
            echo "<script>alert('Hubo algunos errores al enviar la solicitud');</script>";
            exit;
    }

    
    $sql = "INSERT INTO solicitudpaquete VALUES('$identidades','$planes','$nombres','$apellidos','$razones','$correos','$telefonofijo','$telefonocelular','$telefonooficina','$celularoficina','$fechacontratacion','$latitud','$longitud')";
    $stmt = $con->prepare($sql);
    $stmt ->execute();
    Header("Location: index.php");
    
}
?>




    

