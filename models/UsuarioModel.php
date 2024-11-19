<?php

use PSpell\Config;

require_once "Conexao.php";
require_once "Usuario.php";

class UsuarioModel
{

    private $tabela = "usuario";

    public function create(Usuario $c)
    {
        try{
            $sql = "insert into $this->tabela (nome, email, senha, pontos, casa_id) values (?,?,?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getEmail());
            $stmt->bindValue(3, $c->getSenha());
            $stmt->bindValue(4, $c->getPontos());
            $stmt->bindValue(5, $c->getCasaId());
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();
            echo "Número: ". (int)$e->getCode();
        }
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetchAll();
    }
 
    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id_usuario=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Usuario $c)
    {
        try{
            $sql = "update $this->tabela set nome=?, email=?, senha=?, pontos=?, casa_id=? where id=?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getEmail());
            $stmt->bindValue(3, $c->getSenha());
            $stmt->bindValue(4, $c->Pontos());
            $stmt->bindValue(5, $c->getCasaId());
            $stmt->bindValue(6, $c->getId());
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();
            echo "Número: ". (int)$e->getCode();
        }
    }
    public function delete($id)
    {
        try{
            $sql = "delete from $this->tabela where id=?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Erro: ". $e->getMessage();
            echo "Número: ". (int)$e->getCode();
        }   
    }
}
