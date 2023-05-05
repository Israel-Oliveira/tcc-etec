<?php

class administrador
{
    public function getAdminitsrador()
    {
        require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
        $Administradores = new Dados;

        return $Administradores->select('administradores');
    }

    public function getAdminitsradorId($id)
    {
        $where = "id=".$id;

        require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
        $Administradores = new Dados;

        return $Administradores->select('administradores','',$where);
    }
    public function insertAdminitsrador($nome, $email, $senha)
    {
        require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
        $Administradores = new Dados;

        $data = [
            "nome"=> $nome,
            "email"=>$email,
            "senha"=>$senha
        ];
        
        //return json_encode($data);

        return $Administradores->insert('administradores', $data);
    }

    public function updateAdminitsrador($id,$nome, $email, $senha)
    {
        require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
        $Administradores = new Dados;

        $data = [
            "nome"=> $nome,
            "email"=>$email,
            "senha"=>$senha
        ];

        $where = "id=".$id;   

        return $Administradores->update('administradores', $data, $where);
    }
    
    public function deleteAdminitsrador($id)
    {
        require_once __DIR__.'/../../../zPainel/App/Model/Dados.php';
        $Administradores = new Dados;

        $where = "id=".$id;

        return $Administradores->delete('administradores', $where);
    }
    
}

?>