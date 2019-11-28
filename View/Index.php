<?php include "view/header.php"?>

    <div class="top-space">

                    <ul class="nav bg-warning">
                        <div class="container">
                            <ul class="nav justify-content-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link link-menu-top" href="#"><i class="fa fa-user" aria-hidden="true"></i> Dono do Pet</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link link-menu-top" href="#"><i class="fas fa-dog"></i> Cachorro</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link link-menu-top" href="#"><i class="fas fa-cat"></i> Gato</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link link-menu-top" href="#"><i class="fas fa-dove"></i> Aves</a>
                            </li>                  
                            </ul>
                        </div>
    </div>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="../IMG/img1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="../IMG/img2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="../IMG/img3.jpg" alt="Third slide">
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

    <div class="container">
        <img src="../IMG/site-info-promo.png" class="img-responsive img-fluid promo-info">
    </div>


    <!--- PAINEL DE OFERTAS --->


<?php include "view/footer.php"?>

