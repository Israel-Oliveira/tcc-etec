<?php
require_once __DIR__.'../../../Controller/categoriaController.php';
  
$categorias = new categorias;


if(isset($_POST['btnCadastrarCategoria'])){

    $formatosPermitidos = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "txt");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
    
    if(in_array($extensao, $formatosPermitidos)){
        $pasta = "../assets/upload/imgs/categoria/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().'.'.$extensao;

        if(move_uploaded_file($temporario, $pasta.$novoNome)){
            $imgcategoria = $novoNome;
        }else{
            echo "Erro ao mover";
        }
    }else{
        $mensagem = "Este formato não é permitido";
    }

    $categorias->inserCategorias($_POST['status'], $_POST['nome'], $imgcategoria);
   
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

    <link rel="stylesheet" href="../administradores/assets/style/insertAdm.css">
    <title>Novo Administrador</title>
    
</head>
<body>
    

<a class="btnVoltar" href="../../../index.php?tela=categorias">
    <button type="button" class="btn btn-primary">VOLTAR</button>
</a>

<h2>Nova Categoria</h2>

<form id="formulario" action=""  method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <input required type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Digite o nome da Categoria">
    </div>

    <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02" name="arquivo">
        <label class="input-group-text" for="inputGroupFile02">Upload</label>
    </div>

    <div class="form-check">
        <input value="1" class="form-check-input" type="radio" name="status" id="flexRadioDefault1">
        <label class="form-check-label" for="status">
            Ativo
        </label>
    </div>
    <div class="form-check">
        <input value="0" class="form-check-input" type="radio" name="status" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="status">
            Desabilitado
        </label>    
    </div>

    <button type="submit" name="btnCadastrarCategoria" class="btn btn-success">CADSTRAR</button>
</form>
</body>
</html>