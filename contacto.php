<?php
  $pg = "contacto";
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
    <title>Contacto</title>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body id="contacto">
    <header class="container">
       <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="post">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTel" id="txtTel" placeholder="Telefono" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Mensaje" class="form-control"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn">ENVIAR</button>
                    </div>
                </form>
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