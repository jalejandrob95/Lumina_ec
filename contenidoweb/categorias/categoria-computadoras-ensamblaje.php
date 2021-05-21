<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, shrink-to-fit=no, maximum-scale=1.0, minimum-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../../css/stylecategorias.css">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Ensamblaje</title>
</head>

<body>


  <header class="header fixed-top">
    <div class="logo-nav-container">
        <img src="../../img/Lumia-logo.png" alt="logo" class="logo">
        <span class="menu-icon bi bi-list"></span>
        <nav class="navegador-buscador">
            <form class="formulario-busqueda">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                        id="buscador">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit" id="botonbusqueda">
                            <ion-icon name="search-outline" id="IconoBusqueda"></ion-icon>
                        </button>
                    </div>
                </div>
            </form>
        </nav>
        <nav class="navegador2">
            <ul class="navegador2-botones">
                <li>
                    <a href="#" class="btn-secondary">
                        <span>
                            <ion-icon name="language-outline" id="IconoIdiomas"></ion-icon>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="btn-secondary">
                        <span>
                            <ion-icon name="cart-outline" id="IconoCarritoCompras"></ion-icon>
                        </span>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="btn-secondary dropdown-toggle" href="#" type="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-expanded="true">
                        <span>
                            <ion-icon name="person-outline" id="IconoUsuario"></ion-icon>
                        </span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" role="menu">
                        <li><a class="dropdown-item" href="#">Compras</a></li>
                        <li><a class="dropdown-item" href="#">Mis datos</a></li>
                        <li><a class="dropdown-item" href="#">Seguirdad</a></li>
                        <li><a class="dropdown-item" href="#">Privacidad</a></li>
                        <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <nav class="navegador3 text-center">
        <ul>
            <li><a href="../../Index.php">Inicio</a></li>
            <li><a href="#">Multimedia</a></li>
            <li><a href="#">Catálogo</a></li>
        </ul>
    </nav>
    
</header>

  <div class="main-acordion">

    <div class="conteiner-acordion-total">
      <!-- Menu de ensamblado -->
      <div class="row">
        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 col-sm-8">
          <div class="container-acordion">


            <!-- Inicion del acordion de marca procesador -->
            <div class="card">
              <div class="card-header" id="MarcaProcesador">
                <button class="btn btn-link" data-toggle="collapse" data-target="#marcaprocesador" aria-expanded="true"
                  aria-controls="marcaprocesador">
                  <h4>Marca del procesador</h4>
                </button>
              </div>
              <div id="marcaprocesador" class="collapse show" aria-labelledby="MarcaProcesador"
                data-parent="#accordion">
                <div class="card-body">
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/procesadores/AMD-logo.jpg" alt="logo-amd">
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Seleccionar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/procesadores/Intel-Logo.png" alt="logo-intel">
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Seleccionar</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- FIn del acordion de marca procesador -->







            <!-- Inicion del acordion de procesador -->
            <div class="card">
              <div class="card-header" id="Procesador">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#procesador"
                    aria-expanded="false" aria-controls="procesador">
                    <h4>Procesador</h4>
                  </button>
                </h5>
              </div>
              <div id="procesador" class="collapse" aria-labelledby="Procesador" data-parent="#accordion">
                <div class="card-body text-center">

                  <!-- Inicio de las cartas con productos(procesadores) -->
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/procesadores/procesador-amd.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/procesadores/procesador-amd2.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/procesadores/procesador-amd3.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/procesadores/procesador-intel.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/procesadores/procesador-intel2.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/procesadores/procesador-intel3.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Fin de las cartas con productos(procesadores) -->

                </div>
              </div>
            </div>
            <!-- FIn del acordion de procesador -->



            <!-- Inicio del acordion de disipador de calor -->
            <div class="card">
              <div class="card-header" id="DisipadorCalor">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#disipadorcalor"
                    aria-expanded="false" aria-controls="disipadorcalor">
                    <h4>Disipador de calor</h4>
                  </button>
                </h5>
              </div>
              <div id="disipadorcalor" class="collapse" aria-labelledby="DisipadorCalor" data-parent="#accordion">
                <div class="card-body text-center">

                  <!-- Inicio de las cartas con productos(disipadores de calor) -->
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/disipadores-calor/disipadores-calor.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/disipadores-calor/disipadores-calor2.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/disipadores-calor/disipadores-calor3.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/disipadores-calor/disipadores-calor4.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/disipadores-calor/disipadores-calor5.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/disipadores-calor/disipadores-calor6.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Fin de las cartas con productos(disipadores de calor) -->


                </div>
              </div>
            </div>
            <!-- FIn del acordion de disipador de calor -->




            <!-- Inicio del acordion de tarjeta madre -->
            <div class="card">
              <div class="card-header" id="TarjetaMadre">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tarjetamadre"
                    aria-expanded="false" aria-controls="tarjetamadre">
                    <h4>Tarjeta madre</h4>
                  </button>
                </h5>
              </div>
              <div id="tarjetamadre" class="collapse" aria-labelledby="TarjetaMadre" data-parent="#accordion">
                <div class="card-body text-center">

                  <!-- Inicio de las cartas con productos(tarjetas madres) -->
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-madre/tarjetas-madre.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-madre/tarjetas-madre2.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-madre/tarjetas-madre3.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-madre/tarjetas-madre4.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-madre/tarjetas-madre5.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-madre/tarjetas-madre6.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Fin de las cartas con productos(tarjetas madres) -->

                </div>
              </div>
            </div>
            <!-- Fin del acordion de tarjetas madres -->



            <!-- Inicio del acordion de Memorias ram -->
            <div class="card">
              <div class="card-header" id="MemoriaRam">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#memoriaram"
                    aria-expanded="false" aria-controls="memoriaram">
                    <h4>Memoria RAM</h4>
                  </button>
                </h5>
              </div>
              <div id="memoriaram" class="collapse" aria-labelledby="MemoriaRam" data-parent="#accordion">
                <div class="card-body text-center">

                  <!-- Inicio de las cartas con productos(memoria ram) -->
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram2.jpeg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram3.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram4.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram5.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram6.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Fin de las cartas con productos(memoria ram) -->

                </div>
              </div>
            </div>
            <!-- Fin del acordion de memoria ram -->





            <!-- Inicio del acordion de memoria ram adicional -->
            <div class="card">
              <div class="card-header" id="MemoriaRamAdicional">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#memoriaramadicional"
                    aria-expanded="false" aria-controls="memoriaramadicional">
                    <h4>Memoria RAM adicional</h4>
                  </button>
                </h5>
              </div>
              <div id="memoriaramadicional" class="collapse" aria-labelledby="MemoriaRamAdicional"
                data-parent="#accordion">
                <div class="card-body text-center">

                  <!-- Inicio de las cartas con productos(memoria ram adicional) -->
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram2.jpeg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram3.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram4.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram5.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/memoria-ram/memoria-ram6.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Fin de las cartas con productos(memoria ram adicional) -->
                </div>
              </div>
            </div>
            <!-- Fin del acordion de memoria ram adicional -->



            <!-- Inicio del acordion de almacenamiento -->
            <div class="card">
              <div class="card-header" id="Almacenamiento">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#almacenamiento"
                    aria-expanded="false" aria-controls="almacenamiento">
                    <h4>Almacenamiento</h4>
                  </button>
                </h5>
              </div>
              <div id="almacenamiento" class="collapse" aria-labelledby="Almacenamiento" data-parent="#accordion">
                <div class="card-body text-center">

                  <!-- Inicio de las cartas con productos(almacenamiento) -->
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria2.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria3.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria4.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria5.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria6.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Fin de las cartas con productos(almacenamiento) -->
                </div>
              </div>
            </div>
            <!-- Fin del acordion de almacenamiento -->



            <!-- Inicio del acordion de almacenamiento adicional -->
            <div class="card">
              <div class="card-header" id="AlmacenamientoAdicional">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#almacenamientoadicional"
                    aria-expanded="false" aria-controls="almacenamientoadicional">
                    <h4>Almacenamiento adicional</h4>
                  </button>
                </h5>
              </div>
              <div id="almacenamientoadicional" class="collapse" aria-labelledby="AlmacenamientoAdicional"
                data-parent="#accordion">
                <div class="card-body text-center">

                  <!-- Inicio de las cartas con productos(almacenamiento adicional) -->
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria2.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria3.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria4.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria5.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/almacenamiento/memoria6.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Fin de las cartas con productos(almacenamiento adicional) -->

                </div>
              </div>
            </div>
            <!-- Fin del almacenamiento adicional -->




            <!-- Inicio del acordion de tarjeta grafica -->
            <div class="card">
              <div class="card-header" id="TarjetaGrafica">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#tarjetagrafica"
                    aria-expanded="false" aria-controls="tarjetagrafica">
                    <h4>Tarjeta Gráfica</h4>
                  </button>
                </h5>
              </div>
              <div id="tarjetagrafica" class="collapse" aria-labelledby="TarjetaGrafica" data-parent="#accordion">
                <div class="card-body text-center">

                  <!-- Inicio de las cartas con productos(tarjeta grafica) -->
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-grafica/tarjeta-grafica.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-grafica/tarjeta-grafica2.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-grafica/tarjeta-grafica3.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-grafica/tarjeta-grafica4.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-grafica/tarjeta-grafica5.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/tarjeta-grafica/tarjeta-grafica6.jpg">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Fin de las cartas con productos(tarjeta grafica) -->

                </div>
              </div>
            </div>
            <!-- Fin del almacenamiento de tarjeta grafica -->




            <!-- Inicio del acordion de torre -->
            <div class="card">
              <div class="card-header" id="Torre">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#torre"
                    aria-expanded="false" aria-controls="torre">
                    <h4>Torres</h4>
                  </button>
                </h5>
              </div>
              <div id="torre" class="collapse" aria-labelledby="Torre" data-parent="#accordion">
                <div class="card-body text-center">

                  <!-- Inicio de las cartas con productos(torres) -->
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top" src="../../img/Categorias/computadora-ensamblaje/torre/torre.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="../../img/Categorias/computadora-ensamblaje/torre/torre2.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="../../img/Categorias/computadora-ensamblaje/torre/torre3.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="card">
                      <img class="card-img-top" src="../../img/Categorias/computadora-ensamblaje/torre/torre4.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="../../img/Categorias/computadora-ensamblaje/torre/torre5.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top" src="../../img/Categorias/computadora-ensamblaje/torre/torre6.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Fin de las cartas con productos(torres) -->

                </div>
              </div>
            </div>
            <!-- Fin del acordion de torre -->


            <!-- Inicio del acordion de fuente de poder -->
            <div class="card">
              <div class="card-header" id="FuenteDePoder">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#fuentedepoder"
                    aria-expanded="false" aria-controls="fuentedepoder">
                    <h4>Fuente de poder</h4>
                  </button>
                </h5>
              </div>
              <div id="fuentedepoder" class="collapse" aria-labelledby="FuenteDePoder" data-parent="#accordion">
                <div class="card-body text-center">

                  <!-- Inicio de las cartas con productos(fuentes de poder) -->
                  <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/fuente-poder/fuente-poder.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/fuente-poder/fuente-poder2.jpg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/fuente-poder/fuente-poder3.jpeg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/fuente-poder/fuente-poder4.jpeg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/fuente-poder/fuente-poder5.jpeg"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top"
                        src="../../img/Categorias/computadora-ensamblaje/fuente-poder/fuente-poder6.png"
                        alt="procesador-amd">
                      <div class="card-body">
                        <h5 class="card-title">AMD A6 9500 </h5>
                        <p class="card-text">Procesador AMD A6 9500 / 2 Core / 3.5GHz / 3.8GHz Boost / TDP 65W /
                          Gráficos
                          Radeon R5 Series / Socket AM4 / AD9500AGABBOX / Compatible SÓLO con tarjetas madre AM4 serie
                          300
                        </p>
                        <h4 style="color: rgb(202, 43, 43);">$179.00</h4>
                      </div>
                      <div class="card-footer text-center">
                        <span>
                          <a href="#" class="btn btn-primary btn-center">Agregar</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <!-- Fin de las cartas con productos(fuentes de poder) -->

                </div>
              </div>
            </div>
            <!-- Fin del acordion de fuente de poder -->


            <!-- Fin del contenedor ensamblador -->



          </div>
        </div>




        <!-- Inicio de Total acumulado -->

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 ">
          <div class="totalacumulado sticky-top">
            
            <nav class="card carta-total">
              <div class="card-header">
                <h5>Total acumulado</h5>
              </div>
              <div class="card-body">
                <h5 class="card-text">30.00$</h5>
              </div>
              <!-- Inicio del resumen -->
              <div class="card-header">
                <h5>Resumen</h5><span class="menu-icon-resumen bi bi-list"></span>
              </div>
              <div class="container-resumen justify-content-center">
                <div class="card-body resumen">
                  <div class="row g-0 resumen-row-col">
                    <div class="col-md-3 card-img-top">
                      <img src="../../img/Categorias/computadora-ensamblaje/procesadores/procesador-amd2.jpg" alt="">
                    </div>
                    <div class="col-md-7 ">
                      <div class="card-body interior-card">
                        <p class="card-text">Procesador AMD A6 9500</p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="card-footer footer-card">
                        <i class="bi bi-trash"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body resumen">
                  <div class="row g-0 resumen-row-col">
                    <div class="col-md-3 card-img-top">
                      <img src="../../img/Categorias/computadora-ensamblaje/procesadores/procesador-amd2.jpg" alt="">
                    </div>
                    <div class="col-md-7 ">
                      <div class="card-body interior-card">
                        <p class="card-text">Procesador AMD A6 9500</p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="card-footer footer-card">
                        <i class="bi bi-trash"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body resumen">
                  <div class="row g-0 resumen-row-col">
                    <div class="col-md-3 card-img-top">
                      <img src="../../img/Categorias/computadora-ensamblaje/procesadores/procesador-amd2.jpg" alt="">
                    </div>
                    <div class="col-md-7 ">
                      <div class="card-body interior-card">
                        <p class="card-text">Procesador AMD A6 9500</p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="card-footer footer-card">
                        <i class="bi bi-trash"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body resumen">
                  <div class="row g-0 resumen-row-col">
                    <div class="col-md-3 card-img-top">
                      <img src="../../img/Categorias/computadora-ensamblaje/procesadores/procesador-amd2.jpg" alt="">
                    </div>
                    <div class="col-md-7 ">
                      <div class="card-body interior-card">
                        <p class="card-text">Procesador AMD A6 9500</p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="card-footer footer-card">
                        <i class="bi bi-trash"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body resumen">
                  <div class="row g-0 resumen-row-col">
                    <div class="col-md-3 card-img-top">
                      <img src="../../img/Categorias/computadora-ensamblaje/procesadores/procesador-amd2.jpg" alt="">
                    </div>
                    <div class="col-md-7 ">
                      <div class="card-body interior-card">
                        <p class="card-text">Procesador AMD A6 9500</p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="card-footer footer-card">
                        <i class="bi bi-trash"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
            <!-- Fin del resumen -->
          </div>
        </div>

        <!-- Fin de Seccion de Total acumulado -->
      </div>
    </div>





  </div>


  <!-- Footer -->
  <div class="container-footer" style="clear: left; margin-top: 2rem;">
    <footer class="page-footer font-small indigo text-white" style="background: rgb(97, 97, 97);">
      <div class="container">
        <div class="row text-center d-flex justify-content-center pt-5 mb-3">
          <div class="col-md-2 mb-3">
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-facebook"></i></a>
          </div>
          <div class="col-md-2 mb-3">
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-twitter"></i></a>
          </div>
          <div class="col-md-2 mb-3">
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-google"></i></a>
          </div>
          <div class="col-md-2 mb-3">
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                class="bi bi-instagram"></i></a>
          </div>
          <div class="col-md-2 mb-3">
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <hr class="rgba-white-light" style="margin: 0 15%;">


        <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
          <div class="col-md-8 col-12 mt-5">
            <h5 class="font-weight-bold text-uppercase ">Sobre nosotros</h5>
            <p style="line-height: 1.7rem">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Perferendis dolorem officia voluptatibus saepe modi. Explicabo est beatae
              necessitatibus
              autem dignissimos aut excepturi dolor? Assumenda ratione et consequatur vero
              explicabo
              molestiae.</p>
          </div>

        </div>


        <div class="row d-flex justify-content-center">
          <div class="col-md-5 col-12">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Correo electrónico" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-dark" type="button">Subcríbete</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-white" href="#">Lumia</a>
      </div>


    </footer>

  </div>
  <!-- Footer -->









  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="../../js/scripts-ensamblaje.js"></script>
  <script src="../../js/scripts.js"></script>


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>