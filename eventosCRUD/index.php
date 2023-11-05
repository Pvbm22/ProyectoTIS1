<?php
    include 'includes/funciones.php';

    incluirTemplate('header');
// Descomentar linea 3 si es que se quiere usar la autenticación para esta página
//require("middleware/auth.php");
?>



<div class="container text-center">
    <!--esta es la seccion del nav-->
    <div class="row">
        <div class="col">
        </div>
        <div class="col-12">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=home">Inicio</a>
                </li>
                <li class="nav-item">
                    <a id="emprendedores-link" class="nav-link"
                        href="index.php?p=emprendedores/emprendedores">Emprendedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?p=mapa/mapa">Mapa</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false" value="dd">Actualidad</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?p=actualidad/noticias/noticias">Noticias</a></li>
                        <li><a class="dropdown-item" href="index.php?p=actualidad/eventos/eventos">Eventos</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">Nexo Municipal</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?p=nexo-municipal/misionyvision/misionvision">Mision
                                y Vision</a></li>
                        <li><a class="dropdown-item" href="index.php?p=nexo-municipal/alcalde/alcalde">Palabras del
                                alcalde</a></li>
                        <li><a class="dropdown-item"
                                href="index.php?p=nexo-municipal/direccionesmunicipales/direcciones">Direcciones
                                Municipales</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a id="participacion-link" class="nav-link"
                        href="index.php?p=participacion\participacion">Participacion</a>
                </li>
        </div>
    </div>
    <!--finaliza seccion nav-->


    <!--aqui empiezan las publicaciones de noticias-->
    <section class="row contenedor noticias">
        <?php 
            $limite= 3; 
            include 'includes/templates/actualidadeventos.php';
        ?>
    </section>
    <!--termina seccion noticias-->

    <br><br>
    <div id="carouselExampleInterval" class="carousel slide mx-auto" data-bs-ride="carousel" style="width: 500px" ;">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHyRrkW-Y8KfqfbBKyqUcnkiRZRbduCun3yYkEMAU7H4xApUg7FbKPF366MQ&s=10"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Mayumana en Gimnasio Municipal de Concepción</h5>
                    <p>Gimnasio Municipal De Concepción
                        Av. Gral. Oscar Bonilla 2700, Concepciónve placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://static.puntoticket.com/images/eventos/edo026_calugalistado.jpg" class="d-block w-100"
                    alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>EDO CAROE en Teatro UdeC</h5>
                    <p> Libertador Gral. Bernardo O'Higgins 650, Concepción, Bío Bío</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy6dL-IKg3yqQkrpHgrzaQeqFM4hMANJSUcKGMMAfFFl-omKSnOBPDZjxDGw&s"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5> Bancario vs Municipales Olavarría</h5>
                    <p>Collao 481, Concepción, Bío Bío</p>
                </div>

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

</div>

<?php
    incluirTemplate('footer');
?>