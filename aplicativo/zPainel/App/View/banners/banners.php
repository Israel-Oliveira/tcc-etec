<?php 
    require_once __DIR__.'../../../Controller/bannerController.php';

    $Banners = new banners;
     
    if(isset($_GET['btnDeletarBanner'])){
      $Banners->deleteBanners($_GET['id']);
    }
?>

<section id="fundoPainel">
  <a class="btnIncluir" href="./App/View/banners/insert.php">
    <button type="button" class="btn btn-success">INCLUIR</button>
  </a>

  <h2>Banners</h2>
    <div class="form">
        <table class="table table-white table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome banner</th>
              <th scope="col">Editar</th>
              <th scope="col">Excluir</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($Banners->getBanners() as $Banner) { ?>
            <tr>
              <th scope="row">></th>
              <td><?=$Banner['nome']?></td>
              <td>
                <a href="./App/View/banners/update.php?id=<?=$Banner['id']?>">
                  <img src="./App/View/assets/upload/icons/lapis.png" alt="">
                </a>
              </td>
              <td><a href="index.php?tela=banners&btnDeletarBanner=1&id=<?=$Banner['id']?>">
              <img src="./App/View/assets/upload/icons/lixeira.png" alt="">
              </a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
</section>