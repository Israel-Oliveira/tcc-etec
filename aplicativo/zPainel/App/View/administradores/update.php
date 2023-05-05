<?php
    require_once __DIR__.'../../../Controller/admController.php';

    $adm = new administrador;

    if(isset($_POST['btnUpdate']))

    if($_POST['senha'] != $_POST['confirmarSenha']){
        echo "<script>alert('As senhas não coincidem')</script>";
    }else{
        $adm->updateAdminitsrador($_POST['id'], $_POST['nome'], $_POST['email'], $_POST['senha']);
    }

       
     
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../../../node_modules/bootstrap/dist/css/bootstrap.min.css">

<!-- Importando o JavaScript do Bootstrap -->
    <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="./assets/style/insertAdm.css">
    <title>Alterar administrador</title>
</head>
<body>

<a class="btnVoltar" href="../../../index.php?tela=administradores">
    <h2>
        <button type="button" class="btn btn-primary">VOLTAR</button>
    </h2>
</a>
<?php
    if(isset($_GET['id'])){
        $administrador = $adm->getAdminitsradorId($_GET['id']);
?>

<h2>Atualizar Cadastro</h2>

<form id="formulario" action="" method="post">

    <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Digite seu nome" value="<?= $administrador[0]['nome']?>">
    </div>

    <div class="mb-3">
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Digite seu e-mail" value="<?= $administrador[0]['email']?>">
    </div>

    <div class="mb-3">
        <input type="password" class="form-control" id="exampleFormControlInput1" name="senha" placeholder="Digite sua senha" value="<?= $administrador[0]['senha']?>">
    </div>

    <div class="mb-3">
        <input type="password" class="form-control" id="exampleFormControlInput1" name="confirmarSenha" placeholder="Confirme sua senha" value="<?= $administrador[0]['senha']?>">
    </div>

    <input type="hidden" name="id" value="<?=$_GET['id']?>">

    <button type="submit" name="btnUpdate" class="btn btn-success">ATUALIZAR</button>
</form>

<?php
        
    }else{
        echo "O id não existe";
    }
    
?>
    <script src="./assets/js/blockForm.js"></script>
</body>
</html>