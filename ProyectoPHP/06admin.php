<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM solicitud";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  </head>
  <body style="background-image:linear-gradient(to right,hsla(0, 0%, 2%, 0.795),hsla(0, 0%, 0%, 0.329))">
  <section class="section">
    <div class="container">
    <section class="hero is-dark is-medium">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <img src="./img/LogoMakr-3NerdS.png" alt="Logo">
          </a>
          <span class="navbar-burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item is-active">
              Inicio
            </a>
            <a class="navbar-item">
              Internet
            </a>

          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <p class="title">
        Panel de Administración
      </p>
    </div>
  </div>

  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
    <nav class="tabs">
      <div class="container">
        <ul>
          <li><a href="05admin.php">Planes</a></li>
          <li class="is-active"><a href="06admin.php">Solicitudes de Internet</a></li>
          <li><a href="07admin.php">Solitud de Paquetes</a></li>
          <li><a href="08admin.php">Atencion al cliente</a></li>
        </ul>
      </div>
    </nav>
  </div>
</section>
<br><br>
<table class="table table table-dark">
  <thead>
    <tr>
      <th style="color: #fff;" scope="col">Documeto de Identificación</th>
      <th style="color: #fff;" scope="col">Plan de Internet</th>
      <th style="color: #fff;" scope="col">Nombre del titular</th>
      <th style="color: #fff;" scope="col">Apellido del titular</th>
      <th style="color: #fff;" scope="col">Empresa o Razón Social</th>
      <th style="color: #fff;" scope="col">Email</th>
      <th style="color: #fff;" scope="col">Telélefono Fijo</th>
      <th style="color: #fff;" scope="col">Teléfono Calular</th>
      <th style="color: #fff;" scope="col">Telélefono Oficina</th>
      <th style="color: #fff;" scope="col">Celular de Oficina</th>
      <th style="color: #fff;" scope="col">Agenda tu fecha de contratación</th>
      <th style="color: #fff;" scope="col">Lugar de Instalación <br> (Latitud-Longitud)</th>

      <th style="color: #fff;" scope="col"></th>
      <th style="color: #fff;" scope="col"></th>
    </tr>
  </thead>
  <tbody>
            <?php
                while($row=mysqli_fetch_array($query)){
            ?>
    <tr>
      <th style="color: #fff;" scope="row"><?php  echo $row['identidades']?></th>
      <td><?php  echo $row['planes']?></td>
      <td><?php  echo $row['nombres']?></td>
      <td><?php  echo $row['apellidos']?></td>
      <td><?php  echo $row['razones']?></td>
      <td><?php  echo $row['correos']?></td>
      <td><?php  echo $row['telefonofijo']?></td>
      <td><?php  echo $row['telefonocelular']?></td>
      <td><?php  echo $row['telefonooficina']?></td>
      <td><?php  echo $row['celularoficina']?></td>
      <td><?php  echo $row['fechacontratacion']?></td>
      <td><?php  echo $row['latitud']?> <br> <?php  echo $row['longitud']?></td>
      <th><a href="06delete.php?id=<?php echo $row['identidades'] ?>" class="btn btn-danger">Eliminar</a></th>
    </tr>
    <?php 
      }
    ?>
  </tbody>
</table>

  </section>
  </body>
</html>

