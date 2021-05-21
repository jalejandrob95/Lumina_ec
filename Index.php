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
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Lumia</title>
</head>

<body>

    <header class="header fixed-top">
        <div class="logo-nav-container">
            <img src="img/Lumia-logo.png" alt="logo" class="logo">
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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="#">Multimedia</a></li>
                <li><a href="#">Catálogo</a></li>
            </ul>
        </nav>
        
    </header>



    <main class="main">
        <div class="contenedor-categorias-noticias">
            <ul>
                <h2>Categorías</h2>
                <hr id="hr">
                <li>
                    <a href="contenidoweb\categorias\categoria-computadoras-ensamblaje.php"
                        class="btn-outline-secundary">
                        <span class="iconos-categoria bi bi-laptop"></span><br>
                        <h5>Computadores</h5>
                    </a>
                </li>
                <li>
                    <a href="#" class="btn-outline-secundary">
                        <span class="iconos-categoria bi bi-display"></span><br>
                        <h5>Monitores</h5>
                    </a>
                </li>
                <li>
                    <a href="#" class="btn-outline-secundary">
                        <span class="iconos-categoria bi bi-tv"></span><br>
                        <h5>Televisores</h5>
                    </a>
                </li>
                <div class="w-100"></div>
                <li>
                    <a href="#" class="btn-outline-secundary">
                        <span class="iconos-categoria bi bi-printer"></span><br>
                        <h5>Impresoras</h5>
                    </a>
                </li>
                <li>
                    <a href="#" class="btn-outline-secundary">
                        <span class="iconos-categoria bi bi-camera"></span><br>
                        <h5>Cámaras de seguridad</h5>
                    </a>
                </li>
                <li>
                    <a href="#" class="btn-outline-secundary">
                        <span class="iconos-categoria bi bi-grid"></span><br>
                        <h5>Otras categorías</h5>
                    </a>
                </li>
            </ul>
            <div class="carta-noticas">
                <h2>Noticias/Ofertas</h2>
                <hr id="hr">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carta">
                                <img src="img/ContainerNoticias/noticas-ofertas.jpg" class="card-img-top"
                                    alt="img-noticias">
                                <div class="card-body">
                                    <h5 class="card-title">30% de descuento en set gaming</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Eos
                                        quis
                                        laudantium maxime ipsam tenetur eligendi tempore iusto voluptate accusamus
                                        optio
                                        itaque
                                        sunt
                                        recusandae omnis excepturi suscipit laboriosam, dolorum distinctio ad.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carta">
                                <img src="img/ContainerNoticias/noticas-ofertas3.jpg" class="card-img-top"
                                    alt="img-noticias">
                                <div class="card-body">
                                    <h5 class="card-title">30% de descuento en set gaming</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Eos
                                        quis
                                        laudantium maxime ipsam tenetur eligendi tempore iusto voluptate accusamus
                                        optio
                                        itaque
                                        sunt
                                        recusandae omnis excepturi suscipit laboriosam, dolorum distinctio ad.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carta">
                                <img src="img/ContainerNoticias/noticas-ofertas2.jpg" class="card-img-top"
                                    alt="img-noticias">
                                <div class="card-body">
                                    <h5 class="card-title">30% de descuento en set gaming</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Eos
                                        quis
                                        laudantium maxime ipsam tenetur eligendi tempore iusto voluptate accusamus
                                        optio
                                        itaque
                                        sunt
                                        recusandae omnis excepturi suscipit laboriosam, dolorum distinctio ad.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <section class="seccion">
        <div class="conteiner-productos">
            <h2>Productos más vendidos</h2>
            <hr id="hr">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group text-center">
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas2.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas3.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas4.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas5.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group text-center">
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas2.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a
                                        natural
                                        lead-in to
                                        additional
                                        content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas3.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas4.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas5.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon btn btn-outline-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon btn btn-outline-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <h2>Productos varios</h2>
            <hr id="hr">
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group text-center">
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas2.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas3.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas4.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas5.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card-group text-center">
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas2.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a
                                        natural
                                        lead-in to
                                        additional
                                        content.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas3.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas4.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="img/ContainerNoticias/noticas-ofertas5.jpg"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below
                                        as
                                        a natural
                                        lead-in to
                                        additional content. This card has even longer content than the
                                        first
                                        to show
                                        that
                                        equal
                                        height action.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                            ago</small></p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev " href="#carouselExampleControls2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon btn btn-outline-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon btn btn-outline-secondary" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <div class="container-footer" style="clear: left;">
        <footer class="page-footer font-small indigo text-white" style="background: rgb(97, 97, 97);">
            <div class="container">
                <div class="row text-center d-flex justify-content-center pt-5 mb-3">
                    <div class="col-md-2 mb-3">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="bi bi-facebook"></i></a>
                    </div>
                    <div class="col-md-2 mb-3">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="bi bi-twitter"></i></a>
                    </div>
                    <div class="col-md-2 mb-3">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="bi bi-google"></i></a>
                    </div>
                    <div class="col-md-2 mb-3">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="bi bi-instagram"></i></a>
                    </div>
                    <div class="col-md-2 mb-3">
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                                class="bi bi-linkedin"></i></a>
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
                            <input type="text" class="form-control" placeholder="Correo electrónico"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
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




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
    <script src="js/scripts.js"></script>
</body>

</html>