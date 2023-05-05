<?php 
    require_once __DIR__.'../../../Controller/produtoController.php';

    $Produtos = new produtos;
     
    if(isset($_GET['btnDeletarProduto'])){
      $Produtos->deleteProduto($_GET['id']);
    }
?>

<section id="fundoPainel">
  <a class="btnIncluir" href="./App/View/produtos/insert.php">
    <button type="button" class="btn btn-success">INCLUIR</button>
  </a>

  <h2>Produtos</h2>
    <div class="form">
        <table class="table table-white table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Produto</th>
              <th scope="col">Editar</th>
              <th scope="col">Excluir</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($Produtos->getProdutos() as $produto) { ?>
            <tr>
              <th scope="row">></th>
              <td><?=$produto['nome']?></td>
              <td>
                <a href="./App/View/produtos/update.php?id=<?=$produto['id']?>">
                  <img src="./App/View/assets/upload/icons/lapis.png" alt="">
                </a>
              </td>
              <td><a href="index.php?tela=produtos&btnDeletarProduto=1&id=<?=$produto['id']?>">
              <img src="./App/View/assets/upload/icons/lixeira.png" alt="">
              </a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
</section>