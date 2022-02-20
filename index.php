<?php include_once __DIR__."/header.html";?>

<section>
    <div id="carusel_principal" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carusel_principal" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carusel_principal" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carusel_principal" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.imgur.com/PQzZ1zR.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mazda MX-5</h5>
                    <p>CONDUCCIÓN APASIONANTE A CIELO ABIERTO</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.imgur.com/tR2yb1q.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mazda 2 Sedán</h5>
                    <p>2019 - Con control G-Vectoring</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://i.imgur.com/PjNCb08.jpg." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mazda CX-9</h5>
                    <p>LA MÁXIMA EXPRESIÓN DE SOFISTICACIÓN.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carusel_principal" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carusel_principal" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


</section>


<section class="contacto">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="contenedor-titulo badge bg-light">
                    <h4 class="text-center"><strong>ÚNETE A LA CONVERSACIÓN</strong></h4>
                </div>
            </div>
        </div>

        <div class="container row info">
            <h5 class="contactobox text-center"> ¿Tienes inquietudes sobre tu Mazda o del servicio recibido?
                <a href="#">Ingresa aquí</a>
                <br>
                <br>
                Mazda de Colombia S.A.S.
                <br>
                <span>Dirección: Carrera 7 No.75-66 / Bogotá - Colombia / Teléfono: (1) 2 35 75 29 Línea Nacional: 01
                    8000 112 595</span>
            </h5>
        </div>
    </div>
</section>


<section class="link-contacto">
    <div class="container">
        <div class="row link">
            <div class="col orden">
                <button class="btn btn-primary" style="margin-bottom:10px;">Noticias</button>
                <br>
                <button class="btn btn-primary" style="margin-bottom:10px;">Videos</button>
            </div>
            <div class="col orden2">
                <button class="btn btn-primary" style="margin-bottom:10px;">Ventas Corporativas</button>
                <br>
                <button class="btn btn-primary" style="margin-bottom:10px;">Contáctanos</button>
            </div>
            <div class="col">
                <div class="w-50 p-3" style="background-color: #eee;">
                    <a href="#">Mazda CX-3, con los mejores costos de reparación de su categoría </a>
                    <br>
                    <p>• Mazda CX- 3, en su versión Prime, se des...</p><a href="#">Más información</a>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="final">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Catálogos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Concesionarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aviso Legal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Mapa del Sitio</a>
                    </li>
                </ul>

            </div>
            <div class="col">
                <div class="row svg">
                    <div class="col">
                        <p class="siguenos">Siguenos: </p>
                    </div>
                    <div class="col-9">
                        <img style="height:30px;width: 30px;" src="https://i.imgur.com/deZv7DO.png">
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>

<?php include_once __DIR__."/footer.html";?>