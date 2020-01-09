<?php

class Conexao {
    public static function getConexao() {
        require_once "config.php";
        try {
            $conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname,$dbuser,$dbpass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("set names utf8");
            return $conn;
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }
}