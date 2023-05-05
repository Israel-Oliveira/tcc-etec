<?php 
  require_once __DIR__.'../../../Controller/admController.php';
  
  $adm = new administrador;

  if(isset($_GET['btnDeletarAdministrador'])){
    $adm->deleteAdminitsrador($_GET['id']);
  }
?>

<section id="fundoPainel">
  <a class="btnIncluir" href="./App/View/administradores/insert.php">
    <button type="button" class="btn btn-success">INCLUIR</button>
  </a>

  <h2>Administradores</h2>
    <div class="form">
        <table class="table table-white table-striped">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Editar</th>
              <th scope="col">Excluir</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($adm->getAdminitsrador() as $administrador) { ?>
            <tr>
              <th scope="row">></th>
              <td><?=$administrador['nome']?></td>
              <td><?=$administrador['email']?></td>
              <td>
                <a href="./App/View/administradores/update.php?id=<?=$administrador['id']?>">
                  <img src="./App/View/assets/upload/icons/lapis.png" alt="">
                </a>
              </td>
              <td><a href="index.php?tela=administradores&btnDeletarAdministrador=1&id=<?=$administrador['id']?>">
              <img src="./App/View/assets/upload/icons/lixeira.png" alt="">
              </a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
    </div>
</section>