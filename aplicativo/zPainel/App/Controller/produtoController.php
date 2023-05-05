<?php 

    class produtos
    {
        public function getProdutos()
        {
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Produtos= new Dados;

            return $Produtos->select('produtos');
        }

        public function getProdutoId($id)
        {
            $where = "id=".$id;
    
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Produtos = new Dados;
    
            return $Produtos->select('produtos','',$where);
        }

        public function getProdutosCategorias($categoriaId)
        {
            $where = "categoria=".$categoriaId;
    
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Produtos = new Dados;
    
            return $Produtos->select('produtos','',$where);
        }

        public function inserProdutos($status, $nome, $imgCardProduto, $subtituloProduto, $precoProduto, $imgPrincipalProduto, $descricaoProduto, $categoria) //$adicionaisAtivo
        {
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Produtos = new Dados;

            $data = [
                "status"=> $status,
                "nome"=>$nome,
                "imgCardProduto"=>$imgCardProduto,
                "subtituloProduto"=>$subtituloProduto,
                "precoProduto"=>$precoProduto,
                "imgPrincipalProduto"=>$imgPrincipalProduto,
                "descricaoProduto"=>$descricaoProduto,
                "categoria"=>$categoria,
                "adicionaisAtivos"=> " "
                //"adicionais-ativos"=>$adicionaisAtivo,
            ];
            
            return $Produtos->insert('produtos', $data);
        }

        public function updateProdutos($id, $status, $nome, $imgCardProduto, $subtituloProduto, $precoProduto, $imgPrincipalProduto, $descricaoProduto, $categoria)
        {

            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Produtos = new Dados;

            if($imgCardProduto != "" && $imgPrincipalProduto != ""){
                $data = [
                    "status"=> $status,
                    "nome"=>$nome,
                    "imgCardProduto"=>$imgCardProduto,
                    "subtituloProduto"=>$subtituloProduto,
                    "precoProduto"=>$precoProduto,
                    "imgPrincipalProduto"=>$imgPrincipalProduto,
                    "descricaoProduto"=>$descricaoProduto,
                    "categoria"=>$categoria,
                    "adicionaisAtivos"=> " "
                    //"adicionais-ativos"=>$adicionaisAtivo,
                ];
            }else if($imgCardProduto != "" && $imgPrincipalProduto == ""){
                $data = [
                    "status"=> $status,
                    "nome"=>$nome,
                    "imgCardProduto"=>$imgCardProduto,
                    "subtituloProduto"=>$subtituloProduto,
                    "precoProduto"=>$precoProduto,
                    "descricaoProduto"=>$descricaoProduto,
                    "categoria"=>$categoria,
                    "adicionaisAtivos"=> " "
                    //"adicionais-ativos"=>$adicionaisAtivo,
                ];
            }else if($imgCardProduto == "" && $imgPrincipalProduto != ""){
                $data = [
                    "status"=> $status,
                    "nome"=>$nome,
                    "subtituloProduto"=>$subtituloProduto,
                    "precoProduto"=>$precoProduto,
                    "imgPrincipalProduto"=>$imgPrincipalProduto,
                    "descricaoProduto"=>$descricaoProduto,
                    "categoria"=>$categoria,
                    "adicionaisAtivos"=> " "
                    //"adicionais-ativos"=>$adicionaisAtivo,
                ];
            }else{
                $data = [
                    "status"=> $status,
                    "nome"=>$nome,
                    "subtituloProduto"=>$subtituloProduto,
                    "precoProduto"=>$precoProduto,
                    "descricaoProduto"=>$descricaoProduto,
                    "categoria"=>$categoria,
                    "adicionaisAtivos"=> " "
                    //"adicionais-ativos"=>$adicionaisAtivo,
                ];
            }

            $where = "id=".$id;   

            return $Produtos->update('produtos', $data, $where);
        }

        public function deleteProduto($id)
        {
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Produtos = new Dados;

            $where = "id=".$id;

            return $Produtos->delete('produtos', $where);
        }

    }    
?>