<?php
require_once "../Helpers/conexao.php";

class Post {
    private $id;
    private $titulo;
    private $preview;
    private $conteudo;
    private $autor;
    private $data;
    private $publicador;

    function inserir() {
        try {
            $conn = getConexao();
            $query = "INSERT INTO post(titulo,preview,conteudo,autor,data,publicador) 
                        VALUES (:titulo,:preview,:conteudo,:autor,:data,:publicador)";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(":titulo", $this->titulo);
            $stmt->bindValue(":preview", $this->preview);
            $stmt->bindValue(":conteudo", $this->conteudo);
            $stmt->bindValue(":autor", $this->autor);
            $stmt->bindValue(":data", $this->data);
            $stmt->bindValue(":publicador", $this->publicador);
            $stmt->execute();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }
}