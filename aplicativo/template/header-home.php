<?php ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Importando os estilos do Bootstrap -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Importando o JavaScript do Bootstrap -->
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./assets/style/style.css">
    <link rel="stylesheet" href="./assets/style/modalCarrinho.css">

    <style>
        :root {
            --quant-car: "4";
        }
    </style>

    <title>Document</title>
</head>

<body>
    <nav>
        <div class="containeer">
            <div class="header">
                <div class="icones">
                    <img src="./upload/img/menu-aberto.png" alt="">
                </div>
                <div class="logo">
                    <a>
                        LOGO
                    </a>
                </div>
                <div class="carrinho">
                    <img src="./upload/img/carrinho-carrinho.png" alt="">
                </div>
            </div>
        </div>
        <div id="banner">
            <div class="banners">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./upload/img/carrossel1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./upload/img/carrossel2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./upload/img/carrossel3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div id="areaModal" class="desativo">
        <div id="modalCarrinnho">

        </div>
    </div>