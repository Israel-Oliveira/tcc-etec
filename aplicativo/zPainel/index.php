<?php
    session_start();

    if(isset($_SESSION['login'])){

    include './App/View/header.php';
?>

<div id="painel">
    <div id="opPainel">
        <div class="pedidos">
            <a href=""><h4>Painel</h4>
        </a>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Administração
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div id="opButtom">
                      <form action="" method="GET">
                          <input type="hidden" name="tela" value="administradores">
                          <button id="buttomOpecoes" type="submit">Administradores</button>
                      </form>
                      <form action="" method="GET">
                          <input type="hidden" name="tela" value="configuracoes">
                          <button id="buttomOpecoes" type="submit">Configurações</button>
                      </form>
                    </div>
                </div>
                </div>
            </div>

            <div id="opButtom">
                <form action="" method="GET">
                    <input type="hidden" name="tela" value="banners">
                    <button id="buttomOpecoes" type="submit">Banners</button>
                </form>  
            </div>

            <div id="opButtom">
                <form action="" method="GET">
                    <input type="hidden" name="tela" value="categorias">
                    <button id="buttomOpecoes" type="submit">Categorias</button>
                </form>  
            </div>

            <div id="opButtom">
                <form action="" method="GET">
                    <input type="hidden" name="tela" value="produtos">
                    <button id="buttomOpecoes" type="submit">Produtos</button>
                </form>  
            </div>
        </div>
    </div>
    <div id="tlPainel">
        <?php

            if(isset($_GET['tela'])){
                $tela = $_GET['tela'];

                if($tela == "configuracoes"){
                    include './App/View/configuracoes/configuracoes.php';
                }else if($tela == "administradores"){
                    include './App/View/administradores/administradores.php';
                }else if($tela == "categorias"){
                    include './App/View/categorias/categorias.php';
                }else if($tela == "banners"){
                    include './App/View/banners/banners.php';
                }else if($tela == "produtos"){
                    include './App/View/produtos/produtos.php';
                }
            }else{
                
            }

        ?>
    </div>
</div>


<?php    
    include './App/View/footer.php';
}else{
    header('location: login.php'); 
}
?>