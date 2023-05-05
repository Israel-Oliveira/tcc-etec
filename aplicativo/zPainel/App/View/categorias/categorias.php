<?php 
    require_once __DIR__.'../../../Controller/categoriaController.php';

    $categorias = new categorias;
     
    if(isset($_GET['btnDeletarCategoria'])){
      $categorias->deleteCategoria($_GET['id']);
    }
?>

<section id="fundoPainel">
  <a class="btnIncluir" href="./App/View/categorias/insert.php">
    <button type="button" class="btn btn-success">INCLUIR</button>
  </a>

  <h2>Categorias</h2>
    <div class="form">
        <table class="table table-white table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Categoria</th>
              <th scope="col">Editar</th>
              <th scope="col">Excluir</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($categorias->getCategorias() as $categoria) { ?>
            <tr>
              <th scope="row">></th>
              <td><?=$categoria['nome']?></td>
              <td>
                <a href="./App/View/categorias/update.php?id=<?=$categoria['id']?>">
                  <img src="./App/View/assets/upload/icons/lapis.png" alt="">
                </a>
              </td>
              <td><a href="index.php?tela=categorias&btnDeletarCategoria=1&id=<?=$categoria['id']?>">
              <img src="./App/View/assets/upload/icons/lixeira.png" alt="">
              </a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
</section>