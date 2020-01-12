<?php
require_once "./Helpers/conexao.php";

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
            $conn = Conexao::getConexao();
            $query = "INSERT INTO post(titulo,preview,conteudo,autor,data,usuario_FK) 
                        VALUES (:titulo,:preview,:conteudo,:autor,:data,:publicador)";
            $stmt = $conn->prepare($query);
            $stmt->bindValue(":titulo", $this->titulo);
            $stmt->bindValue(":preview", $this->preview);
            $stmt->bindValue(":conteudo", $this->conteudo);
            $stmt->bindValue(":autor", $this->autor);
            $stmt->bindValue(":data", $this->data);
            $stmt->bindValue(":publicador", $this->publicador);
            $stmt->execute();
            return true;
        } catch(Exception $e) {
            echo $e->getMessage();
            return false;
        }
    }

    function buscar() {

    }

    function listar() {
        try {
            $conn = Conexao::getConexao();
            $query = "SELECT id,titulo,preview,conteudo,autor,data,usuario_FK FROM post";
            $resultado = $conn->query($query);
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getPreview($preview) {
        return $this->preview;
    }

    public function setPreview($preview) {
        $this->preview = $preview;
    }

    public function getConteudo($conteudo) {
        return $this->conteudo;
    }

    public function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }

    public function getAutor($autor) {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getData($data) {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function getPublicador($publicador) {
        return $this->publicador;
    }

    public function setPublicador($publicador) {
        $this->publicador = $publicador;
    }
}