<?php
include './template/header-home.php';

require_once './zPainel/App/Controller/categoriaController.php';
$Categorias = new categorias;
?>

<section>

  <div class="containeer">
    <div id="categorias">
      
      <?php foreach ($Categorias->getCategorias() as $categoria) { ?>
        <a href="./categoria.php?categoriaId=<?=$categoria['id']?>" class="categoria">
        <h2><?=$categoria['nome']?></h2>
        <img src="../aplicativo/zPainel/App/View/assets/upload/imgs/categoria/<?=$categoria['imgcategoria']?>" alt="">
      </a>
      <?php } ?>

     
    </div>
    
  </div>

   

</section>

<?php
  include './template/footer.php';
?>