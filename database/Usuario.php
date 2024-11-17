<?php

class Usuario {
  private $id_usuario;
  private $nome;
  private $email;
  private $senha;
  private $pontos;
  private $casa_id;

  public function __construct($id_usuario = null, $nome = null, $email = null, $senha = null, $pontos = 0, $casa_id = null) {
    $this->id_usuario = $id_usuario;
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
    $this->pontos = $pontos;
    $this->casa_id = $casa_id;
  }

  // Getters
  public function getIdUsuario() {
    return $this->id_usuario;
  }

  public function getNome() {
    return $this->nome;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getSenha() {
    return $this->senha;
  }

  public function getPontos() {
    return $this->pontos;
  }

  public function getCasaId() {
    return $this->casa_id;
  }

  // Setters
  public function setIdUsuario($id_usuario) {
    $this->id_usuario = $id_usuario;
  }

  public function setNome($nome) {
    $this->nome = $nome;
  }

  public function setEmail($email) {
    $this->email = $email;
  }

  public function setSenha($senha) {
    $this->senha = $senha;
  }

  public function setPontos($pontos) {
    $this->pontos = $pontos;
  }

  public function setCasaId($casa_id) {
    $this->casa_id = $casa_id;
  }
}

?>