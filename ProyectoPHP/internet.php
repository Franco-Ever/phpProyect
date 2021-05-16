<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM planes_internet";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star - Phuyu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
    <script type="text/javascript" src="scroll.js"></script>
    
  </head>
  <body>

    <section class="section header">
    <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand logo">
      <a  href="index.php">
        <img src="./img/LogoMakr-3NerdS.png">
      </a>
      <a role="button" style="background:rgb(97, 97, 97);" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true" style="color:#fff;"></span>
        <span aria-hidden="true" style="color:#fff;"></span>
        <span aria-hidden="true" style="color:#fff;"></span>
      </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu ">
    <div class="navbar-end opciones">
      <br>
      <a href="index.php" class="navbar-item opciones" style="text-decoration: none;">
        Inicio
      </a>
      <div class="navbar-item has-dropdown" id="dropdown">
        <a class="navbar-link opciones" style="text-decoration: none;">
          Servicios
        </a>
        <div class="navbar-dropdown">
          <a href="internet.php" class="navbar-item " style="text-decoration: none;">
            Internet 
          </a>
          <a href="paquete.php" class="navbar-item" style="text-decoration: none;">
            Paquetes
          </a>
          <a href="tvsatelital.php" class="navbar-item" style="text-decoration: none;">
            Tv cable
          </a>
        </div>
      </div>
      <a href="atencion.php" class="navbar-item opciones" style="text-decoration: none;">
      Atencion Al Cliente
      </a>
      <a href="nosotros.php" class="navbar-item opciones" style="text-decoration: none;">
        Sobre Nosotros
      </a>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons texto">
          <p>Redes Sociales</p>
          <a href="https://es-la.facebook.com/" class="button logo">
          <ion-icon name="logo-facebook"></ion-icon>
          </a>
          <a href="https://twitter.com/?lang=es" class="button logo">
          <ion-icon name="logo-twitter"></ion-icon>
          </a>
          <a href="https://www.instagram.com/" class="button logo">
          <ion-icon name="logo-instagram"></ion-icon>
          </a>
          <a href="https://www.youtube.com/" class="button logo">
          <ion-icon name="logo-youtube"></ion-icon>
          </a>
        </div>
      </div>
    </div>
  </div>
  
</nav>
<br><br><br><br>
<div class="buton-texto1">
  <h1 class="texto1">Internet Hogar</h1>
  <a href="Solicitud.php" class="button is-info buton-texto1">Solicite la Instalacion Aqui!</a>
</div>


</section>
<div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
<br>

<section class="section body">
  <div class="container" style="width: 90%;max-width: 2050px;margin: 0 auto;">
  <h1 class="titulo-fibra" style="text-align: center; padding:10px;">Internet Satelital para tu hogar Hogar</h1>
<br><br>
<div class="box">
  <article class="media deta">
    <div class="media is-cente">
      <figure class="image is-328x328 img">
        <img src="./img/imagen7.jpg" alt="Image">
      </figure>
    </div>
    <div class="media-content">
      <div class="content">  
        <h1>Beneficios</h1>
        <p><ion-icon name="speedometer-outline"></ion-icon> Vive la velocidad real de Internet, con una conexión 100% de fibra óptica</p>
        <p><ion-icon name="cloud-download-outline"></ion-icon> Descarga o sube archivos ilimitadamente hasta 10 o 20 veces más rápido</p>
        <p><ion-icon name="wifi-outline"></ion-icon> Conecta varios dispositivos a la vez sin perder calidad en la conexión</p>
        <br>
      </div>
    </div>
  </article>
</div>

<table class="table">
    <h1 class="texto-table">Tarifas</h1>
    <br>
  <thead class="table-light">
    <tr>
    <th scope="col">Casillas</th>
    <th scope="col">Plan</th>
    <th scope="col">Velocidad Anterior</th>
    <th scope="col">Velocidad Nueva</th>
    <th scope="col">Tarifa (bs)</th>
    </tr>
  </thead>
  <tbody>
        <?php
              while($row=mysqli_fetch_array($query)){
        ?>
    <tr>
      <th scope="row"><?php  echo $row['casilla']?></th>
      <th><?php  echo $row['plan']?></th>
      <th><?php  echo $row['velocidad_anterior']?></th>
      <th><?php  echo $row['velocidad_nueva']?></th>
      <th><?php  echo $row['tarifaz']?></th>

    </tr>
    <?php 
        }
    ?>

  </tbody>
</table>
<br>
<div class="box">
  <article class="media deta">
    <div class="media is-cente">
      <figure class="image is-328x328 img">
        <img src="./img/imagen8.jpg" alt="Image">
      </figure>
    </div>
    <div class="media-content">
      <div class="content">
        <h1>Requisitos</h1>
        <p>♠ Factibilidad Técnica positiva por parte de Star - Phuyu</p>
        <p>♠ Computadora PC o Macintosh Power PC</p>
        <p>♠ Procesador Pentium a 300 MHz , equivalente o superior</p>
        <p>♠ Sistema Operativo: Windows XP, equivalente o superior</p>
        <p>♠ Tarjeta de Red, NIC Ethernet 10 o 10/100 BaseT debidamente instalada y configurada (para una sola PC)</p>
        <p>♠ Puerto libre en el Hub, Switch o Router (Para varias PC’S)</p>
        <p>♠ Memoria RAM de 128 MB o superior</p>
        <p>♠ Capacidad en Disco Duro 10 GB o superior</p>
        <p>♠ Cualquier software navegador de Internet debidamente instalado</p>
        <p>♠ Energía Eléctrica estable y protección ante sobretensiones, con conexión <p> normalizada de tierra con resistencia igual o menor a 8 ohm</p>
        <p>♠Espacio interno adecuado en el domicilio del USUARIO para la instalación del equipo CPE, <p> que no implique riesgo evidente para el CPE (ventilación adecuada, libre de polvo, humedad y suciedad)</p>
        <br>
      </div>
    </div>
  </article>
</div>
<br>
<div class="tile is-ancestor">
  <div class="tile is-parent">
    <article class="tile is-child box">
    <h1 class="title"><ion-icon name="star-outline"></ion-icon> Cobertura</h1>
      <div class="content">
      <p>
          Disponible a nivel nacional. La cobertura está sujeta a factibilidad técnica.
      </div>
    </article>
  </div>
  <div class="tile is-parent is-6">
    <article class="tile is-child box">
    <h1 class="title"><ion-icon name="star-outline"></ion-icon> Caracteristicas</h1>
      <div class="content">
      <p>
        Internet por Fibra Óptica Hogar Brinda un acceso orientado al uso personal, y familiar ofreciendo la posibilidad de conectarse a Internet en forma permanente e ilimitada.
        Servicio de acceso a Internet asimétrico donde la velocidad de recepción es superior a la velocidad de transmisión con una relación de 2 a 1.
        Acceso a Internet optimizado y adecuado a tus hábitos de navegación, principalmente: email, chat, foros, blogs, redes sociales, contenido educativo, multimedia, streaming, descargas de programas y utilidades
        Asignación dinámica de una sola dirección IP al equipo terminal.
        Permite la conexión de una o varias PC’s
        Soporte técnico telefónico gratuito las 24 horas y los 365 días del año, a través de Call Center 800 10 3638.
      </p>
      </div>
    </article>
  </div>
  <div class="tile is-parent">
    <article class="tile is-child box">
    <h1 class="title"><ion-icon name="star-outline"></ion-icon>Más Información</h1>
      <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut.</p>
      </div>
    </article>
  </div>
</div>
<div style="text-align: center;">
<table class="table table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <h1 class="texto-table">Otros Cargos</h1>
    <br>
  <thead>
    <tr>
      <th>Servicios suplementarios</th>
      <th>Tarifa del cargo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Cargo de Instalación del Servicio 1</th>
      <th>Bs. 200</th>


    </tr>
    <tr>
      <th>Casilla de Correo Extra</th>
      <th>Bs. 10</th>

    </tr>
    <tr>
      <th>Cargo por traslado Interno o Externo 2	</th>
      <th>Bs. 100</th>

    </tr>
    <tr>
      <th>Servicio de cambio de equipo ONT</th>
      <th>Bs. 100</th>

    </tr>

   
  </tbody>
</table>
</div>
<br>
<br>
<div class="content is-normal">
    <ol>
      <li>El cargo de instalación incluye equipo terminal (ONT), equipo brindado por Entel en calidad de préstamo bajo la aceptación de los términos del Contrato de Comodato Equipos Terminales para los Servicios con Acceso FTTx-GPON.</li>
      <li>Sujeto a factibilidad técnica, traslados válidos dentro la misma ciudad de la instalación original. Los usuarios que ya cuenten con los planes Internet Hogar sobre FTTH detallados, automáticamente incrementaran su velocidad.</li>
    </ol>
    <p>Para mayor información llamar al 800103638</p>
  </div>
  </div>

</section>
  <section  class="footer">
  <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col md-4">
                    <p class="contacto">
                        LEGAL
                    </p>
                    <ul class="titulo-contacto">
                            <li >
                            <ion-icon name="newspaper-outline" id="localizacion"></ion-icon>
                            <span class="titulo-colonia">
                            <a href="contrato.php">Contrato de Servicios</a>
                            </span>
                            </li>
                            <li>
                            <ion-icon name="list-outline" id="localizacion"></ion-icon>
                            <span class="titulo-colonia">
                            <a href="contrato.php">Términos y condiciones</a>
                            </span>
                            </li>
                            <li>
                            <ion-icon name="people-circle-outline" id="localizacion"></ion-icon>
                            <span class="titulo-colonia">
                            <a href="derechos.php">Derechos y Obligaciones de Usuarios</a>
                            </span>
                            </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p class="contacto">
                        SERVICIOS
                    </p>
                    <ul class="titulo-contacto">
                            <li >
                            <ion-icon name="person-circle-outline" id="localizacion"></ion-icon>
                            <span class="titulo-colonia">
                            <a href="atencion.php"">Atención al Cliente</a>
                            </span>
                            </li>
                            <li>
                            <ion-icon name="home-outline" id="localizacion"></ion-icon>
                            <span class="titulo-colonia">
                            <a href="nosotros.php">Sobre Nosotros</a>
                            </span>
                            </li>
                            <li>
                            <ion-icon name="location-outline" id="localizacion"></ion-icon>
                            <span class="titulo-colonia">
                            <a href="#">Nuestra Ubicación</a>
                            </span>
                            </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p class="contacto">
                        CONTACTOS
                    </p>
                    <ul class="titulo-contacto">
                            <li >
                            <ion-icon name="location-outline" id="localizacion"></ion-icon>
                            <span class="titulo-colonia">
                            Calle Esmeralda Quillacollo - Vinto
                            </span>
                            </li>
                            <li>
                            <ion-icon name="phone-portrait-outline" id="localizacion"></ion-icon>
                            <span class="titulo-colonia">
                            000-000-00 desde tu celular
                            </span>
                            </li>
                            <li>
                            <ion-icon name="call-outline" id="localizacion"></ion-icon>
                            <span class="titulo-colonia">
                            80001700025 desde un fijo
                            </span>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="fondo-footer">
        
    </div>
    <div id="pie-footer">
        <div class="col-md-12 logo-pie">
            <div>
            <a  href="index.php">
            <img src="./img/LogoMakr-3NerdS.png">
            </a>
            </div>
            <div>
            <p class="titulo-footer">
                ©2021 Todos los derechos reservados por el creador <span class="span-subtitulo">Ever C. F. || Rodrigo M. A.</span>
            </p>
            </div>
        </div>
    </div>
  </section>
  </body>
</html>