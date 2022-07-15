<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Etiquetas de estilos, FontAwesome, Bootstrap y CSS-->
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="shortcut icon" href="images/Negro con Dorado Círculo Logo de Inmobiliaria.png" type="image/x-icon">
    <title>Inicio</title>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body id="inicio">
  <!--Barra de navegacion de Bootstrap-->
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
      <div class="row">
        <div class="col-12 mx-auto text-center">
          <img src="images/cohete.svg" class="img-fluid w-100" alt="cohete">
        </div>
          <div class="col-12 col-sm-6 offset-3 my-5 text-center bienvenidaDiv">
            <span class="p-2 my-5 bienvenida">Bienvenido a mi sitio sobre desarrollo full stack.</span>
          </div>
          <div class="col-12 botonInicio mx-auto mb-5 text-center">
            <a href="proyectos.html">Conocé mis proyectos</a>
          </div>
      </div>

    </main>
    <footer class="container">
      <div class="row">
        <div class="col-3">
          <a href="https://github.com/Nicoalvez99" target="_blank"><i class="fa-brands fa-github"></i></a>
          <a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <div class="col-3">
          Sponsor <a href="#">Depc Suite</a>
        </div>
        <div class="col-3">
          <a href="mailto:nicoalvez@gmail.com">nicoalvez99@gmail.com</a>
        </div>
        <div class="col-3">
          <a href="https://api.whatsapp.com/send?phone=541157351589"><i class="fa-brands fa-whatsapp"></i></a>
        </div>
      </div>
    </footer>
</body>
</html>