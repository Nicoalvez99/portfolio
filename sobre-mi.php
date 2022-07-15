<?php
  $pg = "sobre-mi";
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
  <title>Sobre mi</title>
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body id="sobre-mi">
  <header class="container">
  <?php include_once("menu.php"); ?>
  </header>
  <main>
    <div class="container">
      <div class="row my-5">
        <div class="col-12 col-sm-6">
          <h1>Sobre mí</h1>
          <p>Estudiante de programación full stack, amante de los proyectos y sistemas para crear nuevas soluciones.</p>
          <div class="row">
            <div class="col-12 my-5">
              <a href="contacto.php" class="botonMensaje py-2 px-1">Enviar mensaje</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <div class="foto mx-auto"></div>
        </div>
      </div>
    </div>
    <!--Contenedor del Stack, utilicé fluid para que ocupe el 100% de amncho de la pantalla, cada stack tiene para Desktop dos columnas y para Mobile 6-->
    <div class="container-fluid tecnologias w-100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h3 class="py-5">Stack tecnológico</h3>
          </div>
          <div class="row">
            <div class=" col-6 col-sm-2 text-center">
              <div class="tech px-4 py-5 mb-2">
                <h4>Javascript</h4>
                <img src="images/javascript.jpeg" class="w-60 img-fluid mx-auto" alt="javascript">
              </div>
            </div>
            <div class="col-6 col-sm-2 text-center">
              <div class="tech px-4 py-5 mb-2">
                <h4>PHP</h4>
                <img src="images/php.jpg" class="w-60 img-fluid mx-auto" alt="php">
              </div>
            </div>
            <div class="col-6 col-sm-2 text-center">
              <div class="tech px-4 py-5 mb-2">
                <h4>HTML5</h4>
                <img src="images/html.png" class="w-60 img-fluid mx-auto" alt="html">
              </div>
            </div>
            <div class="col-6 col-sm-2 text-center">
              <div class="tech px-4 py-5 mb-2">
                <h4>React.js</h4>
                <img src="images/react.png" class="w-60 img-fluid mx-auto" alt="React">
              </div>
            </div>
            <div class="col-6 col-sm-2 text-center">
              <div class="tech px-4 py-5 mb-2">
                <h4>jQuery</h4>
                <img src="images/jquery.jpg" class="w-60 img-fluid mx-auto" alt="jquery">
              </div>
            </div>
            <div class="col-6 col-sm-2 text-center">
              <div class="tech py-5 px-4 mb-2">
                <h4>Bootstrap</h4>
                <img src="images/bootstrap.png" class="w-60 img-fluid mx-autor" alt="Bootstrap">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-sm-2 text-center">
              <div class="tech px-4 py-5 mb-2">
                <h4>Laravel</h4>
                <img src="images/laravel_.png" class="w-60 img-fluid mx-auto" alt="Laravel">
              </div>
            </div>
            <div class="col-6 col-sm-2 text-center">
              <div class="tech px-4 py-5 mb-2">
                <h4>MySQL</h4>
                <img src="images/mariadb.png" class="w-60 img-fluid mx-auto" alt="mysql">
              </div>
            </div>
            <div class="col-6 col-sm-2 text-center">
              <div class="tech px-4 py-5 mb-2">
                <h4>CSS</h4>
                <img src="images/css.png" class="w-60 img-fluid mx-auto" alt="css">
              </div>
            </div>
            <div class="col-6 col-sm-2 text-center">
              <div class="tech px-4 py-5 mb-2">
                <h4>GIT</h4>
                <img src="images/git.png" class="w-60 img-fluid mx-auto" alt="git">
              </div>
            </div>
            <div class="col-6 col-sm-2 text-center">
              <div class="tech px-4 py-5 mb-2">
                <h4>Apache</h4>
                <img src="images/apache.png" class="w-60 img-fluid mx-autor" alt="apache">
              </div>
            </div>
            <div class="col-6 col-sm-2 text-center">
              <div class="tech px-4 py-5 mb-2">
                <h4>Mercado Pago</h4>
                <img src="images/mercadopago.jpg" class="w-60 img-fluid mx-auto" alt="Mercado Pago">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--Para lograr el efecto que tiene el portfolio de container a container-fluid, los fui alternando en todo el sobre-mi-->
    <!--Aparte de las clases de Bootstrap utilicé clases específicas para darles algunos retoques necesarios-->
    <div class="container-fluid contenedor-idi">
      <div class="w-100">
        <div class="row">
          <div class="col-12 col-sm-6 mt-5 shadow idiomasyhobbies">
            <i class="fa-solid fa-comment-dots"></i>
            <div class="py-2 ">
              <p>IDIOMAS</p>
              <ul>
                <li>Inglés - Básico</li>
                <li>Español - Nativo</li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-sm-6 shadow mt-5 idiomasyhobbies">
            <i class="fa-solid fa-star"></i>
            <div class="py-2">
              <p>HOBBIES</p>
              <ul>
                <li>Música</li>
                <li>Leer libros</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="container contenedor-work">
      <div class="row">
        <div class="col-12 d-flex">
          <i class="fa-solid fa-briefcase"></i>
          <h3>Experiencia laboral</h3>
        </div>
        <div class="row shadow">
          <div class="col-12 d-flex mt-5">
            <div class="p-5 my-auto d-none d-sm-block">
              <img src="images/sin-logo.png" class="img-fluid w-100 d-none d-sm-block" alt="logo">
            </div>
            <div class="p-3">
              <h4 class="mb-1">Puesto</h4>
              <h5 class="mb-1">Nombre</h5>
              <h5 class="mb-1">Tiempo</h5>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae odio laboriosam quidem voluptatum
                mollitia, nobis aliquid perspiciatis ipsa quasi blanditiis quam temporibus ea maxime aperiam dicta quas
                voluptatem architecto similique. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla omnis
                libero officia alias molestiae,</p>
            </div>
          </div>
          <div class="col-12">
            <div class="col-12 d-flex mt-5">
              <div class="p-5 my-auto d-none d-sm-block">
                <img src="images/sin-logo.png" class="img-fluid w-100" alt="logo">
              </div>
              <div class="p-3">
                <h4 class="mb-1">Puesto</h4>
                <h5 class="mb-1">Nombre</h5>
                <h5 class="mb-1">Tiempo</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae odio laboriosam quidem voluptatum
                  mollitia, nobis aliquid perspiciatis ipsa quasi blanditiis quam temporibus ea maxime aperiam dicta
                  quas voluptatem architecto similique. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla
                  omnis libero officia alias molestiae,</p>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="col-12 d-flex mt-5">
              <div class="p-5 my-auto d-none d-sm-block">
                <img src="images/sin-logo.png" class="img-fluid w-100 d-none d-sm-block" alt="logo">
              </div>
              <div class="p-3">
                <h4 class="mb-1">Puesto</h4>
                <h5 class="mb-1">Nombre</h5>
                <h5 class="mb-1">Tiempo</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae odio laboriosam quidem voluptatum
                  mollitia, nobis aliquid perspiciatis ipsa quasi blanditiis quam temporibus ea maxime aperiam dicta
                  quas voluptatem architecto similique. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla
                  omnis libero officia alias molestiae,</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="container formacion">
      <div class="row">
        <div class="col-12 d-flex my-5">
          <i class="fa-solid fa-graduation-cap mt-3"></i>
          <h3>Formación académica</h3>
        </div>
        <div class="row shadow">
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-3 my-auto">
                <img src="images/sin-logo.png" class="w-100" alt="">
              </div>
              <div class="col-9 p-3">
                <h4>Carrera</h4>
                <h5>Nombre</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fuga praesentium corrupti laudantium explicabo reprehenderit dolor, blanditiis nemo inventore ut! Assumenda a enim eos consectetur dolorem? Sit eius officiis tenetur.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-3 my-auto">
                <img src="images/sin-logo.png" class="w-100" alt="">
              </div>
              <div class="col-9 p-3">
                <h4>Carrera</h4>
                <h5>Nombre</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas voluptatibus sapiente illo vero voluptates excepturi dicta dolorum. Ab, voluptatum? Quisquam, omnis ea voluptatem assumenda quidem maiores temporibus quis at voluptas.</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-3 my-auto">
                <img src="images/sin-logo.png" class="w-100" alt="">
              </div>
              <div class="col-9 p-3">
                <h4>Carrera</h4>
                <h5>Nombre</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat numquam modi blanditiis similique asperiores dignissimos fugiat veniam eveniet provident, hic incidunt voluptates, nam quos aliquam culpa at consequuntur quaerat vero!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container formacion">
        <div class="col-12 d-flex my-5">
          <i class="fa-solid fa-graduation-cap mt-3"></i>
          <h3>Cursos de desarrollo profesional</h3>
        </div>
        <div class="row shadow py-5">
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-3 my-auto d-flex">
                <img src="images/sin-logo.png" class="w-100" alt="">
              </div>
              <div class="col-9 p-3">
                <h4>Curso</h4>
                <h5>Lugar</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-3 my-auto">
                <img src="images/sin-logo.png" class="w-100" alt="">
              </div>
              <div class="col-9 p-3">
                <h4>Curso</h4>
                <h5>Lugar</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-3 my-auto">
                <img src="images/sin-logo.png" class="w-100" alt="">
              </div>
              <div class="col-9 p-3">
                <h4>Curso</h4>
                <h5>Lugar</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-3 my-auto">
                <img src="images/sin-logo.png" class="w-100" alt="">
              </div>
              <div class="col-9 p-3">
                <h4>Curso</h4>
                <h5>Lugar</h5>
              </div>
            </div>
          </div>
        </div>
      </dis>
    </section>
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