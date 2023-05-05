<?php 

    class banners
    {
        public function getBanners()
        {
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Banners= new Dados;

            return $Banners->select('banners');
        }

        public function getBannerId($id)
        {
            $where = "id=".$id;
    
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Banners = new Dados;
    
            return $Banners->select('banners','',$where);
        }

        public function inserBanners($status, $nome, $imgbanner)
        {
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Banners = new Dados;

            $data = [
                "status"=> $status,
                "nome"=>$nome,
                "imgbanner"=>$imgbanner
            ];
            
            return $Banners->insert('banners', $data);
        }

        public function updateBanners($id,$nome, $status, $imgbanner)
        {

            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Banners = new Dados;

            if($imgbanner != ""){
                $data = [
                    "status"=>$status,
                    "nome"=> $nome,
                    "imgbanner"=>$imgbanner
                ];
            }else{
                $data = [
                    "status"=>$status,
                    "nome"=> $nome
                ];
            }

            $where = "id=".$id;   

            return $Banners->update('banners', $data, $where);
        }

        public function deleteBanners($id)
        {
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
            $Banners = new Dados;

            $where = "id=".$id;

            return $Banners->delete('banners', $where);
        }

    }    
?>