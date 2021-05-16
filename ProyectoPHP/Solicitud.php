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
    <link rel="stylesheet" href="./css/style3.css">
    <script src="scroll.js"></script>
    <script src="mapa.js"></script>
    
  </head>
  <body>

    <section class="section header">
    <nav class="navbar" >
    <div class="navbar-brand logo">
      <a  href="index.php">
        <img src="./img/LogoMakr-3NerdS.png" alt="...">
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
  <h1 class="texto1">Contrata ya tu plan!</h1>
</div>
</section>
<div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
<br>

<section class="section body">
  <div class="container" style="width: 90%;max-width: 2050px;margin: 0 auto;">
  <h1>Solicitud de Internet</h1>
  <br>
  <form action="insertar.php" method="POST">
  <div class="field">
  <label class="label">Documento de Identidad</label>
  <div class="control">
    <input class="input" type="text" name="identidades" id="identidades" placeholder="C.I" value="<?php if(isset($identidades)) echo $identidades ?>">
  </div>
  </div>
  <p><strong>Plan de internet</strong></p>
  <p>Plan ----- Velocidad --- Tarifa (Bs) - Casillas</p>
  
  <div class="select is-rounded is-small">
  <select name="planes" id="planes" class="planes">
    <option></option>
    <option>[FOH SOL] -- [5 Mbs] -- [90] -- [3]</option>
    <option>[FOH 200] -- [15 Mbs] -- [143] -- [3]</option>
    <option>[FOH 300] -- [35 Mbs] -- [187] -- [3]</option>
    <option>[FOH 500] -- [50 Mbs] -- [262] -- [3]</option>
    <option>[FOH 800] -- [58 Mbs] -- [299] -- [3]</option>
    <option>[FOH 10M] -- [68 Mbs] -- [346] -- [3]</option>
    <option>[FOH 30M] -- [87 Mbs] -- [442] -- [3]</option>
    <option>[FOH 50M] -- [138 Mbs] -- [698] -- [3]</option>
    <option>[FOH 60M] -- [166 Mbs] -- [840] -- [3]</option>
    <option>[FOH 80M] -- [207 Mbs] -- [1.047] -- [3]</option>
    <option>[FOH 100M] -- [262 Mbs] -- [1.320] -- [3]</option>
    <option>[FOH 200M] -- [500 Mbs] -- [2.520] -- [3]</option>
  </select>
</div>

  <div class="field">
  <label class="label">Nombre del titular</label>
  <div class="control">
    <input class="input" type="text" id="nombres" name="nombres" placeholder="Nombre">
  </div>
  </div>
  <div class="field">
  <label class="label">Apellido del titular</label>
  <div class="control">
    <input class="input" type="text" name="apellidos" id="apellidos" placeholder="Apellido">
  </div>
  </div>
  
  <div class="field">
  <label class="label">Empresa o Razón Social</label>
  <div class="control">
    <input class="input" type="text" name="razones" id="razones" placeholder="Escriba el nombre o razón social para su factura.....">
  </div>
  </div>

  <div class="field">
  <label class="label">Email</label>
  <div class="control">
    <input class="input" type="text" name="correos" id="correos" placeholder="Hola@">
  </div>
  </div>


<div class="field">
  <div class="field is-normal">
  </div>
  <div class="field-body">
  <div class="field">
  <label class="label">Telélefono Fijo</label>
  <div class="control">
    <input class="input" type="text" name="telefonofijo" id="telefonofijo" placeholder="Escriba su número de teléfono....">
  </div>
  </div>
    <div class="field">
  <label class="label">Teléfono Calular</label>
  <div class="control">
    <input class="input" type="text" name="telefonocelular" id="telefonocelular" placeholder="Escriba su número de teléfono....">
  </div>
  </div>
    </div>
</div>

<div class="field">
  <div class="field is-normal">
  </div>
  <div class="field-body">
  <div class="field">
  <label class="label">Telélefono Oficina</label>
  <div class="control">
    <input class="input" type="text" name="telefonooficina" id="telefonooficina" placeholder="Escriba su número de teléfono....">
  </div>
  </div>
    <div class="field">
  <label class="label">Celular de Oficina</label>
  <div class="control">
    <input class="input" type="text" name="celularoficina" id="celularoficina" placeholder="Escriba su número de teléfono....">
  </div>
  </div>
    </div>
</div>

<div class="field ">
  <label class="label">Agenda tu fecha de contratación</label>
  <div class="control">
    <input class="input" type="date" name="fechacontratacion" id="fechacontratacion" style="max-width: 20%;">
  </div>
  </div>


  <div class="row">
  <label class="label">Ubicar lugar de Instalación</label>
  <div class="col-md-12">
    <div id="mapa" style="width: 100%; height:500px;"></div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="latitud">Latitud</label>
      <input type="text" id="latitud" name="latitud"  class="form-control">
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label for="longitud">Longitud</label>
      <input type="text" id="longitud" name="longitud" class="form-control" >
    </div>
  </div>
</div>
<br>

<br>
<div class="field is-grouped">
  <div class="control">
    <button type="submit" id="submit" name="submit" class="button is-link submit">Enviar</button>
  </div>

</div>
  </div>
</form>
  
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
            <img src="./img/LogoMakr-3NerdS.png" alt="...">
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
  <script src="https://maps.googleapis.com/maps/api/js?key=&callback=iniciarMapa"></script>
  </body>
</html>