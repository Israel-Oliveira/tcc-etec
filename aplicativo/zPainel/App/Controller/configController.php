<?php 

    class configuracoes
    {
        public function updateCOnfiguracoes($tituloPagina, $whatsapp, $instagram ){
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';

            $configurações = new Dados;

            $data = [
                "whatsapp"=> $whatsapp,
                "instagram"=>$instagram,
                "titulo_pagina"=>$tituloPagina
            ];
    
            $where = "id=2";   

            return $configurações->update('configuracoes', $data, $where);
        }

        public function getConfiguracoesId(){
            require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
                $configurações = new Dados;

            return $configurações->select('configuracoes','','id=2');
        }
    }

?>