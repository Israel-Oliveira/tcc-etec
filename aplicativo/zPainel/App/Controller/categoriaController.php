<?php 

    class categorias
    {
        public function getCategorias()
        {
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Categorias= new Dados;

            return $Categorias->select('categoria');
        }

        public function getCategoriaId($id)
        {
            $where = "id=".$id;
    
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Categorias = new Dados;
    
            return $Categorias->select('categoria','',$where);
        }

        public function inserCategorias($status, $nome, $imgcategoria)
        {
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Categorias = new Dados;

            $data = [
                "status"=> $status,
                "nome"=>$nome,
                "imgcategoria"=>$imgcategoria
            ];
            
            return $Categorias->insert('categoria', $data);
        }

        public function updateCategorias($id,$nome, $status, $imgcategoria)
        {

            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Categorias = new Dados;

            if($imgcategoria != ""){
                $data = [
                    "status"=>$status,
                    "nome"=> $nome,
                    "imgcategoria"=>$imgcategoria
                ];
            }else{
                $data = [
                    "status"=>$status,
                    "nome"=> $nome
                ];
            }

            $where = "id=".$id;   

            return $Categorias->update('categoria', $data, $where);
        }

        public function deleteCategoria($id)
        {
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Categorias = new Dados;

            $where = "id=".$id;

            return $Categorias->delete('categoria', $where);
        }

    }    
?>