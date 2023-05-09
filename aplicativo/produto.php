<?php 

session_start();

$_SESSION['carrinho'];

function setProdtudoCarrinho($idProduto, $nomeProduto, $precoProduto, $quantidadeProduto){

  $produto = [
    "id"=>$idProduto,
    "nome"=>$nomeProduto,
    "preco"=>$precoProduto,
    "quantidade"=>$quantidadeProduto
  ];

  array_push($_SESSION['carrinho'], $produto);
}

if(isset($_POST['addCarrinho'])){
  setProdtudoCarrinho($_POST['produtoId'], $_POST['produtoNome'], $_POST['produtoPreco'], $_POST['quantidade']);
}

require_once './zPainel/App/Controller/produtoController.php';
$Produtos = new produtos;

$produto = $Produtos->getProdutoId($_GET["id"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/style/produto-style/style-produto.css" />
  <title><?=$produto[0]["nome"];?></title>
</head>

<body>
  <form action="?id=<?=$_GET['id']?>&categoriaId=<?=$_GET['categoriaId']?>" method="post">
  <div class="titulo">
    <a href="./categoria.php?categoriaId=<?=$_GET['categoriaId']?>">
      <img src="./upload/img/btnvoltar.png" /><img />
    </a>
    <header>
      <h1><?=$produto[0]["nome"];?></h1>
    </header>
    <p>R$ <?=$produto[0]["precoProduto"];?></p>
  </div>

  <div class="imagem">
    <img src="./zPainel/App/View/assets/upload/imgs/produtos/<?=$produto[0]["imgPrincipalProduto"];?>" /><img />
    <p>
    <?=$produto[0]["descricaoProduto"];?>
    </p>
  </div>

  <div class="centralizar">
    <div class="quantidade">
      <div class="subtrai"></div>
      <div class="valor">
        <label for="" id="valor">0</label>

        <!-- INPUTS PARA SALVAR AS INFORMAÇÕES NO CARRINHO -->
        <input type="hidden" name="quantidade" id="quantidade" value="">
        <input type="hidden" name="produtoId" value="<?=$produto[0]["id"];?>">
        <input type="hidden" name="produtoNome" value="<?=$produto[0]["nome"];?>">
        <input type="hidden" name="produtoPreco" value="<?=$produto[0]["precoProduto"];?>">
      </div> 
      <div class="adiciona"></div>
    </div>
  </div>

  <div class="incluir">
    <div class="adicionais">
      <h3>Que tal um adicional?</h3>
      <p>Escolha até 3 opções</p>
    </div>
  </div>

  <div class="incluir1">
    <div class="adicional1">
      <div class="adPart1">
        <img src="bacon.png" alt="" />
      </div>
      <div class="adPart2">
        <div class="addText">
          <p class="add">Adicional de Bacon</p>
          <p class="conta">R$ 3,50</p>
        </div>
        <p class="soma">+</p>
      </div>
    </div>

    <div class="adicional1">
      <div class="adPart1">
        <img src="./alface.png" alt="" />
      </div>
      <div class="adPart2">
        <div class="addText">
          <p class="add">Adicional de Bacon</p>
          <p class="conta">R$ 3,50</p>
        </div>
        <p class="soma">+</p>
      </div>
    </div>
  </div>

  <button type="submit" class="carrinho" name="addCarrinho">
    <div class="carrinho2">
      <p>Adicionar ao carrinho</p>
    </div>
  </button>
  </form>

  <script src="./assets/js/produto/script-produto.js"></script>
  <script src="./assets/js/produto/jquery.js"></script>
  <script src="./assets/js/produto/carrinho.js"></script>

<?php include './template/footer.php'; ?>