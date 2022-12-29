<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

  <!-- css de libreria datatable -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/r-2.4.0/sc-2.0.7/datatables.min.css" />


  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/estilos.css">

  <title>Dashboard Mensajes Recibidos</title>

</head>

<body>

  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
        <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Andres F Jimenez S</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.facebook.com/andres.jimzs" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/andres_jimzs/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/andrésfelipe-jiménez-sánchez-4b3318199/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
          <a href="https://github.com/andresjimzs/curriculum.git" class="github" target="_blank"><i class="bx bxl-github"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#about" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>Solicitud de Contacto</span></a></li>
          <li><a href="pages/Home/index.php" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home Page</span></a></li>
        </ul>
      </nav>
    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Bandeja de Correos Enviados</h2>
          <ol>
            <li><a href="pages/Home/index.php">Home</a></li>
            <li>Bandeja Entrada</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <div class="container fondo my-3">
      <div class="row">
        <div class="col-2 offset-10 my-3 px-2">
          <div class="text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
              <i class="bi bi-plus-circle-fill"></i> Crear
            </button>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table id="datos_usuario" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>empresa</th>
              <th>Teléfono</th>
              <th>Email</th>
              <th>Mensaje</th>
              <th>Fecha Creación</th>
              <th>Editar</th>
              <th>Borrar</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </main>

  <!-- ======= Footer ======= -->
  <?php
  require_once("php/mainFooter.php")
  ?>
  <!-- End  Footer -->


  <!-- Modal -->
  <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen-md-down">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Mensaje</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="col-lg-12 mt-5 px-2 mt-lg-0">
          <form method="POST" id="formulario" enctype="multipart/form-data" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="nombre">Tu Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
              </div>
              <div class="form-group col-md-6">
                <label for="empresa">¿De dónde me Contactas?</label>
                <input type="text" name="empresa" id="empresa" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="telefono">Tu Télefono de contacto</label>
                <input type="text" name="telefono" id="telefono" class="form-control">
              </div>
              <div class="form-group col-md-6">
                <label for="email">Tu correo Electrónico</label>
                <input type="email" name="email" id="email" class="form-control">
              </div>
            </div>
            <!-- <div class="form-group">
              <label for="name">La razón de tu contacto</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div> -->
            <div class="form-group">
              <label for="mensaje">Ingrese el mensaje</label>
              <textarea name="mensaje" id="mensaje" class="form-control" rows="5" required></textarea>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_usuario" id="id_usuario">
              <input type="hidden" name="operacion" id="operacion">
              <input type="submit" name="action" id="action" class="btn btn-success" value="Guardar">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->



  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <script type="text/javascript" src="assets/js/fuction.js"></script>
</body>

</html>