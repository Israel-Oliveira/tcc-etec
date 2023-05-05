<?php
require_once __DIR__.'../../../Controller/categoriaController.php';
$Categorias = new categorias;

require_once __DIR__.'../../../Controller/produtoController.php';
$Produtos = new produtos;

$imgCardProduto = "";
$imgPrincipalProduto = "";

if(isset($_POST['btnCadastrarProdutos'])){

    $formatosPermitidos = array("png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "txt");

    // CARD PRODUTO
    $extensao = pathinfo($_FILES['img-card-produto']['name'], PATHINFO_EXTENSION);
    
    if(in_array($extensao, $formatosPermitidos)){
        $pasta = "../assets/upload/imgs/produtos/";
        $temporario = $_FILES['img-card-produto']['tmp_name'];
        $novoNome = uniqid().'.'.$extensao;

        if(move_uploaded_file($temporario, $pasta.$novoNome)){
            $imgCardProduto = $novoNome;
        }else{
            echo "Erro ao mover";
        }
    }else{
        $mensagem = "Este formato não é permitido";
    }

    // IMAGEM PRINCIPAL DO PRODUTO
    $extensao2 = pathinfo($_FILES['img-principal-produto']['name'], PATHINFO_EXTENSION);
    
    if(in_array($extensao2, $formatosPermitidos)){
        $pasta = "../assets/upload/imgs/produtos/";
        $temporario = $_FILES['img-principal-produto']['tmp_name'];
        $novoNome = uniqid().'.'.$extensao;

        if(move_uploaded_file($temporario, $pasta.$novoNome)){
            $imgPrincipalProduto = $novoNome;
        }else{
            echo "Erro ao mover";
        }
    }else{
        $mensagem = "Este formato não é permitido";
    }

    $Produtos->inserProdutos($_POST['status'], $_POST['nome'], $imgCardProduto , $_POST['subtitulo-produto'], $_POST['preco-produto'], $imgPrincipalProduto, $_POST['descricao-produto'], $_POST['categoria']);
   
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
    <script src="../../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="../administradores/assets/style/insertAdm.css">
    <title>Novo Produto</title>
    
</head>
<body>
    

<a class="btnVoltar" href="../../../index.php?tela=produtos">
    <button type="button" class="btn btn-primary">VOLTAR</button>
</a>

<h2>Novo Produto</h2>

<form id="formulario" action=""  method="post" enctype="multipart/form-data">

    <!-- NOME PRODUTO -->
    <div class="mb-3">
        <input required type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Digite o nome do Produto">
    </div>

    <!-- SUBTITULO PRODUTO -->
    <div class="mb-3">
        <input required type="text" class="form-control" id="exampleFormControlInput1" name="subtitulo-produto" placeholder="Digite subtitulo do Produto">
    </div>

    <!-- IMAGEM CARD PRODUTO -->
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02" name="img-card-produto">
        <label class="input-group-text" for="inputGroupFile02">Card Produto</label>
    </div>


    <div style="display:flex; justify-content:space-between">
        <!-- PRECO PRODUTO -->
        <div class="mb-3" style="display: flex; gap: 10px;">
            <label class="input-group-text" for="">Preco do produto</label>
            <input required type="text" class="form-control" id="exampleFormControlInput1" name="preco-produto" placeholder="R$ 0,00" style="width:100px">
        </div>

        <!-- CATEGORIA PRODUTO -->
        <select name="categoria" class="form-select" aria-label="Default select example" style="width: 200px; height: 40px">
            <option selected>Categoria</option>
            <?php foreach ($Categorias->getCategorias() as $categoria) { ?>
            <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
            <?php } ?>
        </select>
    </div>

    <!-- IMAGEM PRINCIPAL PRODUTO -->
    <div class="input-group mb-3">
        <input type="file" class="form-control" id="inputGroupFile02" name="img-principal-produto">
        <label class="input-group-text" for="inputGroupFile02">Imagem Principal</label>
    </div>

    <!-- DESCRIÇÃO PRODUTO -->
    <div class="form-floating">
        <textarea class="form-control" placeholder="Descrição do produto..." id="floatingTextarea2" name="descricao-produto" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Descrição do produto...</label>
    </div>

    <!-- ATIVA/DESATIVA PRODUTO -->
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

    <button type="submit" name="btnCadastrarProdutos" class="btn btn-success">CADSTRAR</button>
</form>
</body>
</html>