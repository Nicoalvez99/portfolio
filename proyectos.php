<?php
  $pg = "proyectos";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="shortcut icon" href="images/Negro con Dorado Círculo Logo de Inmobiliaria.png" type="image/x-icon">
  <title>Proyectos</title>
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body class="body-proyectos">
  <header class="container">
  <?php include_once("menu.php"); ?>
  </header>
  <main class="container">
    <div class="row">
      <div class="col-12 col-sm-8 py-5">
        <h1>Mis proyectos</h1>
        <p>Los siguientes son algunos de los proyectos que he realizado.</p>
      </div>
    </div>
    <div class="row margen-abajo">
      <div class="col-12 col-sm-4 margen-div">
        <div class="proyecto-div">
          <img src="images/abmclientes.png" class="w-100 imgbox" alt="sitio">
          <h3>ABM Clientes</h3>
          <p>Alta, Baja, modificación de un registro de clientes empleando: Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
          <div class="row mt-2">
            <div class="col-6">
                <a class="color-boton mx-4">Ver online</a>
            </div>
            <div class="col-6">
                <a class="boton-color">Código fuente</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-4 margen-div">
        <div class="proyecto-div">
          <img src="images/abmventas.png" class="w-100 imgbox" alt="ventas">
          <h3>Sistema de gestión de ventas </h3>
          <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
          <div class="row">
            <div class="col-6">
              <a class="color-boton mx-4">Ver producto</a>
            </div>
            <div class="col-6">
              <a class="boton-color">Código fuente</a>
            </div>
          </div>
        </div>
      </div>
      <!--Para este div no me cuadraba bien la imagen por lo tanto tuve que darle una clase específica y utilizar los padding y margin para cuadrarlo mejor.-->
      <div class=" col-12 col-sm-4 margen-div">
        <div class="proyecto-div">
          <img src="images/proyecto-integrador.png" class="w-100 imgbox mb-2" alt="proyecto">
          <h3>Proyecto integrador</h3>
          <p>Proyecto Full Stack, realizado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, con panel administrador, gestor de usuarios, modulo de permisos y funcionalidades a fines.</p>
          <div class="row">
            <div class="col-6">
              <a class="color-boton mx-4">Ver proyecto</a>
            </div>
            <div class="col-6">
              <a class="boton-color">Código fuente</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="container">
    <div class="row enFooter">
      <div class="col-6 col-sm-3">
        <a href="https://github.com/Nicoalvez99" target="_blank"><i class="fa-brands fa-github"></i></a>
        <a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
      <div class="col-6 col-sm-3">
        Sponsor <a href="#">Depc Suite</a>
      </div>
      <div class="col-12 col-sm-3">
        <a href="mailto:nicoalvez@gmail.com">nicoalvez99@gmail.com</a>
      </div>
      <div class="col-12 col-sm-3">
        <a href="https://api.whatsapp.com/send?phone=541157351589"><i class="fa-brands fa-whatsapp"></i></a>
      </div>
    </div>

  </footer>

</body>

</html>