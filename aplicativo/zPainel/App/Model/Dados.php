<?php

class Dados
{
    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new \PDO('mysql:host=localhost;dbname=tcc', 'root', '');
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro na conexão com o banco de dados: " . $e->getMessage();
            exit();
        }
    }

    public function select($table, $columns = array(), $where = '', $params = array())
    {
        try {
            if (empty($columns)) {
                $columns = '*';
            } else {
                $columns = implode(', ', $columns);
            }

            $sql = "SELECT $columns FROM $table";

            if (!empty($where)) {
                $sql .= " WHERE $where";
            }

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute($params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao selecionar dados: " . $e->getMessage();
            exit();
        }
    }

    public function insert($table, $data = array())
    {
        try {
            $columns = implode(', ', array_keys($data));
            $placeholders = implode(', ', array_fill(0, count($data), '?'));

            $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";  

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute(array_values($data));

            return $this->conexao->lastInsertId();
        } catch (PDOException $e) {
            echo "Erro ao inserir dados: " . $e->getMessage();
            exit();
        }
    }

    public function update($table, $data = array(), $where = '', $params = array())
    {
        try {
            $set = implode('=?, ', array_keys($data)) . '=?';

            $sql = "UPDATE $table SET $set WHERE $where";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute(array_merge(array_values($data), $params));

            return $stmt->rowCount();
        } catch (PDOException $e) {
            echo "Erro ao atualizar dados: " . $e->getMessage();
            exit();
        }
    }

    public function delete($table, $where = '', $params = array())
    {
        try {
            $sql = "DELETE FROM $table WHERE $where";

            $stmt = $this->conexao->prepare($sql);
            $stmt->execute($params);

            return $stmt->rowCount();
        } catch (PDOException $e) {
            echo "Erro ao deletar dados: " . $e->getMessage();
            exit();
        }
    }
}
