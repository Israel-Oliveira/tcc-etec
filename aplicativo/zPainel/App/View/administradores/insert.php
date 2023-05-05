<?php
require_once __DIR__.'../../../Controller/admController.php';
  
$adm = new administrador;


if(isset($_POST['btnEnviar']))

    if($_POST['senha'] != $_POST['confirmarSenha']){
        echo "<script>alert('As senhas não coincidem')</script>";
    }else{
        $adm->insertAdminitsrador($_POST['nome'], $_POST['email'], $_POST['senha']);
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
    <title>Novo Administrador</title>
    
</head>
<body>

<a class="btnVoltar" href="../../../index.php?tela=administradores">
    <button type="button" class="btn btn-primary">VOLTAR</button>
</a>

<h2>Novo cadastro</h2>

<form id="formulario" action=""  method="post">
    <div class="mb-3">
        <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Digite seu nome">
    </div>

    <div class="mb-3">
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="Digite seu E-mail">
    </div>

    <div class="mb-3">
        <input type="password" class="form-control  senha" id="exampleFormControlInput1" name="senha" placeholder="Digite sua senha">
    </div>

    <div class="mb-3">
        <input type="password" class="form-control confirmarSenha" id="exampleFormControlInput1" name="confirmarSenha" placeholder="Confirme sua senha">
    </div>

    <button type="submit" name="btnEnviar" class="btn btn-success">CADSTRAR</button>
</form>
   
</body>
</html>