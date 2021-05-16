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
    <link rel="stylesheet" href="./css/style6.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
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
<h1 class="texto1">Contratos De Servicios</h1>
</section>
<div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
<br>

<section class="section body">
  <div class="container pdf">
    <h1>Contrato de Servicios</h1>
    <div class="pdf"><iframe src="./pdf/contrato.pdf"></iframe></div>


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
                            <a href="atencion.php">Atención al Cliente</a>
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