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
    <link rel="stylesheet" href="./assets/style/style-category.css">
    <link rel="stylesheet" href="./assets/style/style-category-teste.css">

    <style>
        :root {
            --quant-car: "4";
        }

        .card:nth-child(1){
            margin-top: 10px;
        }
        .card:nth-child(2){
            margin-top: 10px;
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
                    <a href="./index.php">LOGO</a>
                </div>
                <div class="carrinho">
                    <img src="./upload/img/carrinho-carrinho.png" alt="">
                </div>
            </div>
        </div>
    </nav>

    <div id="areaModal" class="desativo" style="z-index: 200;">
        <div id="modalCarrinnho">

        </div>
    </div>