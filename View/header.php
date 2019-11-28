<!doctype html>
<html lang="pt-br">
    <head>

        <title>Pet Customs</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link rel="stylesheet" href="../CSS/menu.css">
        <link rel="stylesheet" href="../CSS/style.css">


    </head>
        <body>
        
            <!--  Menu/Navbar -->

            <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
                <div class="container">
                <a class="navbar-brand" href="<?php echo $url; ?>/home/">Pet Customs</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $url; ?>/produtos">Produtos</a>
                    </li>
                    </ul>
                    <div class="bg-light rounded rounded-pill shadow-sm col-sm-12 col-xs-12 col-md-12 col-lg-7 barra-pesquisa">
                        <div class="input-group">
                        <input type="search" placeholder="Procure em todo nosso site..." aria-describedby="button-addon1" class="form-control border-0 bg-light">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link text-warning"><i class="fa fa-search"></i></button>
                        </div>
                        </div>
                    </div>
                    <ul class="navbar-nav">
                    <li class="nav-item dropdown carrinho-menu ml-auto">
                        <a class="nav-link dropdown" href="<?php echo $url; ?>/carrinho/">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrinho <span>0</span>
                        </a> 
                    </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user-circle" aria-hidden="true"></i> Login / Cadastro
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo $url; ?>/login/">Fazer Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo $url; ?>/cadastro/">Cadastrar-se</a>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>


            
            
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

                  <!--  Menu/Navbar -->