<?php
require_once "Helpers/conexao.php";

class Usuario {
    private $id;
    private $login;
    private $senha;

    public function login() {
        $conn = Conexao::getConexao();
        $query = "SELECT id,login FROM usuario WHERE login = :login AND senha = :senha";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':login', $this->login);
        $stmt->bindValue(':senha', $this->senha);
        $stmt->execute();            

        if($stmt->rowCount() > 0)
            return true;        
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
}