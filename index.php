<?php
// index.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sitio Web - Productos e Inventario</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-black text-white d-flex flex-column min-vh-100">


  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-opacity-25 border-bottom border-primary py-3">
      <div class="container">

        <img src="logosurenamejor.png" alt="Logo SUREÑA" width="48" height="48" class="rounded me-2">

        <a class="navbar-brand fw-bold fs-1 lh-1 text-white" href="index.php">SUREÑA</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Mostrar navegacion">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
          <ul class="navbar-nav ms-auto gap-lg-4">

            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Inicio</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="productos.php">Productos</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="registro_usuarios.php">Registro de Usuarios</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-white" href="inventario.php">Inventario</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>


  <main class="container my-4 flex-grow-1">

    
    <section class="bg-dark border border-primary rounded-3 p-5 my-4 text-center" aria-label="Espacio para banner principal">

      <img src="bannersurena.jpg" alt="Banner Principal" class="img-fluid rounded mb-4">

    </section>


   
    <section class="my-5" aria-label="Secciones destacadas">

      <div class="row g-4">


        <div class="col-12 col-md-4 d-flex">

          <div class="card bg-primary bg-opacity-25 text-white border-primary w-100 d-flex flex-column">

            <div class="card-header bg-primary bg-opacity-50 border-primary fw-semibold text-white">
              Nuestra Historia
            </div>

            <div class="card-body d-flex flex-column justify-content-between">

              <img src="surenaantiguo.png" alt="Nuestra Historia" class="img-fluid rounded mb-3">

              <div class="bg-black bg-opacity-50 border border-primary rounded p-3 mb-3">

                <p class="small text-white mb-0">
                  Cerveza Sureña nació en Sucre, Bolivia, y forma parte de la Sociedad Industrial del Sur S.A. Con más de un siglo de tradición,
                  se ha convertido en un símbolo de identidad y orgullo chuquisaqueño, destacando por su calidad y sabor.
                  Sureña representa nuestra historia, nuestras raíces y la tradición cervecera boliviana.
                  Sureña, tradición y orgullo de nuestra tierra.
                </p>

              </div>

              <a href="https://www.facebook.com/correodelsur/videos/-sure%C3%B1a-tiene-historia-con-sabordesde-la-historia-la-tradici%C3%B3n-y-la-innovaci%C3%B3n-c/3973562172953498/" class="btn btn-primary text-white w-100">
                Ver sabor desde la historia
              </a>

            </div>
          </div>
        </div>


        <div class="col-12 col-md-4 d-flex">

          <div class="card bg-primary bg-opacity-25 text-white border-primary w-100 d-flex flex-column">

            <div class="card-header bg-primary bg-opacity-50 border-primary fw-semibold text-white">
              Dónde nos Encontramos
            </div>

            <div class="card-body d-flex flex-column justify-content-between">

              <img src="fabrica.png" alt="Dónde nos encontramos" class="img-fluid rounded mb-3">

              <div class="bg-black bg-opacity-50 border border-primary rounded p-3 mb-3">

                <p class="small text-white mb-0">
                  Horario: Lunes a viernes de 08:00 a 18:00
                  <br>
                  Sábados de 08:00 a 12:00
                  <br><br>
                  Teléfono: 64-41112 / Celular: 76123407
                </p>

              </div>

              <a href="https://maps.app.goo.gl/bzZAYYLq2jRsgfK87" class="btn btn-primary text-white w-100">
                Ver Ubicación
              </a>

            </div>
          </div>
        </div>


       
        <div class="col-12 col-md-4 d-flex">

          <div class="card bg-primary bg-opacity-25 text-white border-primary w-100 d-flex flex-column">

            <div class="card-header bg-primary bg-opacity-50 border-primary fw-semibold text-white">
              Hagamos Negocios Juntos
            </div>

            <div class="card-body d-flex flex-column justify-content-between">

              <img src="copita.png" alt="Hagamos Negocios Juntos" class="img-fluid rounded mb-3">

              <div class="bg-black bg-opacity-50 border border-primary rounded p-3 mb-3">

                <p class="small text-white mb-0">
                  ¿Quieres distribuir Cerveza Sureña, harina Molisur o productos
                  de la Lechería Siempre Activa? Nuestro equipo comercial te atiende con gusto.
                </p>

              </div>

              <a href="https://api.whatsapp.com/send/?phone=59176123407&text&type=phone_number&app_absent=0" class="btn btn-primary text-white w-100">
                Escríbenos al WhatsApp
              </a>

            </div>
          </div>
        </div>

      </div>
    </section>

  </main>



  <footer class="bg-primary bg-opacity-25 text-white border-top border-primary py-4 mt-auto">

    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">

      <div class="d-flex align-items-center gap-2">

        <img src="logosurenamejor.png" alt="Logo Pie" width="32" height="32" class="rounded">

        <p class="mb-0 small text-white">
          &copy; <?php echo date('Y'); ?> Realizado por MIki
        </p>

      </div>

      <a href="registro_usuarios.php" class="btn btn-primary btn-sm text-white">
        Registro de Usuarios
      </a>

    </div>

  </footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>