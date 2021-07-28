<?php


    session_start();

    if(!isset($_SESSION['usuarios'])){
      echo '
          <script>
              alert("Por favor debes iniciar sesión");
              window.location = "index.php";
          </script>      
          ';
          header('Location: index.php');
          session_destroy();
          die();
         
          
    }
  

?>






<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Tecno-SaluD.</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body class="img">
    <!-- cabezera -->
    <header class="container-fluid bg-secondary d-flex justify-content-center">
        <p class="text-info mb-0 p-2 fs-6">Siempre pensando en usted.</p>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <span class="text-primary fs-5 fw-bold"><img src="logotecnosalud2.png" style="height: 100px;"></span>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#intro">Inicio</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#equipo">Nosotros</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#fff">Contactos</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>
    
 <!-- imagenes -->

 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <div class="carousel-item active" data-bs-interval="3000" >
        <img src="pexels-negative-space-48604.jpg" class="d-block w-100" alt="pexels-hannah-nelson-1456951">
      </div>

      
      <div class="carousel-item" data-bs-interval="2000">
        <img src="pexels-karolina-grabowska-4021769.jpg" class="d-block w-100" alt="pexels-pixabay-461049">
      </div>

      <div class="carousel-item" data-bs-interval="2000">
        <img src="pexels-vidal-balielo-jr-1682497.jpg" class="d-block w-100" alt="pexels-pixabay-461049">
      </div>


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- intro -->

  <section class="w-50 mx-auto text-center pt-5" id="intro">
    <h1 class="p-3 fs-2 border-top border-3"> <span><img src="TECNOSALUD.jpg" class="logo__tecno-salud"></span> Es una agencia unica para suplir necesidades de las entidades prestadoras de servcios en salud.</h1>
    <p class="p-3 fs-4">Esta herramienta le permite a todos los empleados del sistema de salud, consultar de manera ágil, sencilla y dinámica, las tecnologías, servicios y especialistas inlcuidos o no en el <span class="text-primary">PBS</span> (Plan de Benficios en Salud) y como se manejan internamente en cada <span class="text-primary">IPS</span> (Institucion Prestadora de Servicios en Salud).</p>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Texto de búsqueda" aria-label="Search">
      <button class="btn btn-primary btn-primary-outline-success" type="button">Buscar</button>
    </form>
    <!-- <img src="pexels-pixabay-40568.jpg" class="rounded float-start" alt="...">
    <img src="pexels-artem-podrez-5726794.jpg" class="rounded float-end" alt="...">
    <img src="pexels-lukas-317356.jpg" class="rounded mx-auto d-block" alt="..."> -->
  </section>

  <br><br>

  <hr>

  <!-- <section class="w-100">
    <h2 class="text-primary">Que debes saber. </h2>
    <p class="ht">Realice la búsqueda de Ayudas diagnosticas, Especialistas y Procedimientos , ingresados o NO en el <span class="text-primary">PBS</span> (Plan de Beneficios en salud) permitiendo realizar todo el proceso para orientar, entregar y autorizar, de forma agil y segura.
      Por ejemplo: ‹‹citologia›› ‹‹consulta alergologo››.</p>
  </section>

  <hr>

  <section class="w-100">
    <h2 class="text-primary">Aquí conocerá todo acerca de los contenidos de los veneficios en salud.</h2>
    <p class="ht">Esta herramienta le permite al empleado del sector salud independiente de su rango acceder a un sistema de búsqueda en el que podrá consultar las tecnologías, servicios y especialistas incluidos en el <span class="text-primary">PBS</span> , antiguo POS y financiados con recursos de la Unidad de Pago por Capitación y los NO financiados con recursos de la Unidad de Pago al que tienen derecho los colombianos residentes en el territorio nacional.</p>
    <p class="ht">Puede acceder a todo tipo de información relacionada con los beneficios en salud, resolver sus inquietudes y necesidades de manera inmediata, permitiendo orientar al usuario aun sin el conocimiento completo de todo lo que incluye el <span class="text-primary">PBS</span>  .</p>
    <p class="ht">Recuerde que también consultar el Metabuscador desde su dispositivo móvil o Tablet para los orientadores y anfitriones de las <span class="text-primary">IPS</span> tambien.</p>
    <img src="pexels-vidal-balielo-jr-1682497.jpg" class="rounded float-start" alt="...">
    <img src="pexels-emma-bauso-2253879.jpg" class="rounded float-end" alt="...">
    <img src="pexels-andreas-wohlfahrt-2456327.jpg" class="rounded mx-auto d-block" alt="...">
  </section> -->

  <!-- intro -->
  <h2 class="text-primary text-center">Todo lo que necesitas saber</h2>

  <section class="container-fluid">
    <div class="row w-75 mx-auto my-5 servicio-fila">
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="123.jpg" alt="Busquedas" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Busquedas.</h3>
            <p class="px4">
              Realice la búsqueda de Ayudas diagnosticas, Especialistas y Procedimientos. </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="imagen2.png" alt="Proceso" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Proceso.</h3>
            <p class="px4">
              Realiza todos tus proceso para orientar, entregar y autorizar, de forma agil y segura.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="imagen3.jpg" alt="Beneficios" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Beneficios</h3>
            <p class="px4">
              Áqui conocerá todo acerca de los beneficios en salud. </p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="imagen4.png" alt="desarrollo" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Herramienta.</h3>
            <p class="px4">
              Esta herramienta le permite al empleado del sector salud independiente de su rango acceder a un sistema de búsqueda.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="imagen5.jpg" alt="Beneficios" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Consultas.</h3>
            <p class="px4">
              Podrá consultar las tecnologías, servicios y especialistas incluidos en el PBS y antiguo POS.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
          <img src="imagen6.png" alt="desarrollo" width="180" height="160">
          <div>
            <h3 class="fs-5 mt-4 px-4 pd-1">Inquietudes.</h3>
            <p class="px4">
              Resolver tus inquietudes y necesidades de manera inmediata desde tu computador o celular .</p>
          </div>
        </div>
    </div>
  </section>

   <!-- acerca de noisotros  -->

   <hr>

   <section>
     <div class="w-50 m-auto text-center" id="equipo">
       <h2 class="mb-5 fs-2 text-primary">Nosotros somos un equipo con espectativas altas.</h2>
       <p class="fs-4">Siempre estamos buscando ayudar al personal de la salud para facilitar su trabajo y por medio de esta erramienta vamos a lograr un cambio grande para nuestros heroes de la salud.</p>
      </div>
      <div class="mt-5 text-center">
       <img class="img-fluid" src="trabajo-en-equipo.jpg" alt="equipo">
      </div> 
   </section>

   

   <!-- formulario  -->

   

   
  
   
     <!-- formulario  -->

   

      <br>

      <br>

   

   
     <!-- pie de pagina  -->

     <!-- <footer class="w-100 d-flex aling-items justify-content-center">
       <p class="fs-5 px-3 pt-3">Meta-SaluD. &copy; Todos Los Derechos Reservados 2021</p>
       <div id="iconos">
         <a href="#"><i class="bi bi-facebook"></i></a>
         <a href="#"><i class="bi bi-twitter"></i></a>
         <a href="#"><i class="bi bi-instagram"></i></a>
       </div>
     </footer> -->

    <!-- <header>

    </header>
    <div class="body__page">
      <div class="cover"></div>
      <div class="container__aeticle">
        <div class="box__article"></div>
        <div class="box__article"></div>
        <div class="box__article"></div>
        <div class="box__article"></div>
        <div class="box__article"></div>
        <div class="box__article"></div>
        <div class="box__article"></div>
        <div class="box__article"></div>
      </div>
      <div class="container-testimonials">
        <div class="box__testimonials"></div>
        <div class="box__testimonials"></div>
        <div class="box__testimonials"></div>
      </div>
    </div> -->

    <footer class="w-100 d-flex aling-items justify-content-center">
    

      <div class="container__footer">
        <div class="box__footer">
          <div class="logo">
            <img class="logo__tecno-salud" src="TECNOSALUD.jpg" alt="">
          </div>
          <div class="terms">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero natus culpa dolore temporibus vel, dolorum expedita quia ea sequi perspiciatis voluptatum odit eligendi rerum quis quae labore, doloribus dicta itaque.</p>
          </div>
        </div>
        <div class="box__footer">
          <h2>Soluciones</h2>
          <a href="#">app desarrollo</a>
          <a href="#">app desarrollo</a>
          <a href="#">app desarrollo</a>
          <a href="#">app desarrollo</a>

        </div>
        <div class="box__footer">
          <h2>Compañias</h2>
          <a href="#">Acerca de</a>
          <a href="#">Trabajos</a>
          <a href="#">Procesos</a>
          <a href="#">Servicios</a>

        </div>
        <div class="box__footer">
          <h2>Redes sociales</h2>
          <a href="#"><i class="bi bi-facebook"></i>Facebook</a>
          <a href="#"><i class="bi bi-twitter"></i>twitter</a>
          <a href="#"><i class="bi bi-instagram"></i>instagram</a>

        </div>
        <div class="box__copyringt">
          <hr>
          <p class="fs-5 px-3 pt-3">Tecno-SaluD. &copy; Todos Los Derechos Reservados 2021</p>
        </div>
      </div>
      

    </footer>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   
  </body>
</html>