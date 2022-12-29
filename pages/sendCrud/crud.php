<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="../../assets/img/logo.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

  <!-- css de libreria datatable -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.1/b-2.3.3/b-html5-2.3.3/r-2.4.0/sc-2.0.7/datatables.min.css" />

</head>

<body>
  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
        <img src="../../assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle">
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
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Correo de Notificación</span></a></li>
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

    <section class="inner-page">

      <div class="card shadow mb-4 mx-3">
        <div class="card-header py-3">
          <div class="container">
            <div class="h4">
              <p>Lista de mensajes enviados</p>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
                </div>
              </div>
            </div><br>
            <div class="container caja">
              <div class="row">
                <div class="col-lg-12">
                  <div class="table-responsive my-custom-scrollbar" style="text-align: left;">
                    <table id="tablaSend" class="table table-striped table-bordered table-condensed" style="width:100%">
                      <thead class="text-center">
                        <tr>
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Correo</th>
                          <th>Teléfono</th>
                          <th>Empresa</th>
                          <th>Asunto</th>
                          <th>Mensaje</th>
                          <th>Fecha enviado</th>
                          <th>Fecha Modificado</th>
                          <th>Fecha Eliminado</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- ======= Footer ======= -->
  <?php
  require_once("../../php/mainFooter.php")
  ?>
  <!-- End  Footer -->


    <!--Modal para CRUD-->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="col-12 mt-5 mt-lg-0 d-flex align-items-stretch pt-3">
            <form id="dataSend" action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="nomSend">Tu Nombre</label>
                  <input type="text" name="nomSend" class="form-control" id="nomSend" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="emailSend">Tu Correo Electrónico</label>
                  <input type="email" class="form-control" name="emailSend" id="emailSend" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="phoneSend">Tu Télefono de contacto</label>
                  <input type="text" name="phoneSend" class="form-control" id="phoneSend" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="companySend">¿De dónde me Contactas?</label>
                  <input type="text" class="form-control" name="companySend" id="companySend" required>
                </div>
              </div>
              <div class="form-group">
                <label for="subjectSend">La razón de tu contacto</label>
                <input type="text" class="form-control" name="subjectSend" id="subjectSend" required>
              </div>
              <div class="form-group">
                <label for="messageSend">El mensaje que deseas dejar</label>
                <textarea class="form-control" name="messageSend" rows="3" id="messageSend" required></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="../../assets/datatables/datatables.min.js"></script>

    <script type="text/javascript" src="main.js"></script>


</body>

</html>