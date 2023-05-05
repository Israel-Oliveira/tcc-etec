<?php 
    require_once __DIR__.'../../../Controller/configController.php';

    $configuracoes = new configuracoes;

     if(isset($_POST['btnAtualizarConfiguracoes']))
         $configuracoes->updateCOnfiguracoes($_POST['tituloDaPagina'], $_POST['whatsapp'], $_POST['instagram']);
     
?>

<section id="fundoPainel">

<h2>Configurações</h2>

<?php
        $configuracoes = $configuracoes->getConfiguracoesId();
      
?>

    <form id="formConfiguracoes" action="" method="post">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titulo da página</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="tituloDaPagina" value="<?= $configuracoes[0]['titulo_pagina']?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Número do WhatsApp</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="whatsapp" value="<?= $configuracoes[0]['whatsapp']?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Link do Instragram</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="instagram" value="<?= $configuracoes[0]['instagram']?>">
        </div>
        <button type="submit" class="btn btn-success" name="btnAtualizarConfiguracoes">ATUALIZAR</button>
    </form>
</section>