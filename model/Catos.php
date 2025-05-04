<?php
require_once("Conexao.php");

class Catos
{
    private $id;
    private $rga;
    private $nome;
    private $raca;
    private $pelagem;
    private $data_nasc;

    // SETTERS
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setRga($rga)
    {
        if(strlen($rga) == 9)
        {
            $this->rga = $rga;
        }
    }

    public function setNome($nome)
    {
        if(strlen($nome) > 1)
        {
            $this->nome = $nome;
        }    
    }

    public function setRaca($raca)
    {
        if(strlen($raca) >= 4)
        {
            $this->raca = $raca;
        }
    }

    public function setPelagem($pelagem)
    {
        if(strlen($pelagem) >= 4)
        {
            $this->pelagem = $pelagem;
        }     
    }

    public function setDataNasc($data_nasc)
    {
        $this->data_nasc = $data_nasc;
    }


    // GETTERS
    public function getId()
    {
        return $this->id;
    }

    public function getRga()
    {
        return $this->rga;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function getPelagem()
    {
        return $this->pelagem;
    }

    public function getDataNasc()
    {
        return $this->data_nasc;
    }

    public function cadastrar()
    {
        $conexao = Conexao::conexao();

        $queryInsert = $conexao->prepare(
            "INSERT INTO tb_catos(nome_cato, rga_cato, raca_cato, pelagem_cato, data_nasc_cato)
             VALUES(?, ?, ?, ?, ?)" 
        );

        $queryInsert->bindValue(1, $this->getNome());
        $queryInsert->bindValue(2, $this->getRga());
        $queryInsert->bindValue(3, $this->getRaca());
        $queryInsert->bindValue(4, $this->getPelagem());
        $queryInsert->bindValue(5, $this->getDataNasc());

        $queryInsert->execute();

        echo("Cadastro feito com sucesso.");
    }

    public function listar()
    {
        $conexao = Conexao::conexao();

        $querySelect = $conexao->query(
            "SELECT id_cato, nome_cato, rga_cato, raca_cato, pelagem_cato, data_nasc_cato 
             FROM tb_catos"
        );

        $lista = $querySelect->fetchAll();
        return $lista;
    }

    public function buscaPeloId()
    {
        $conexao = Conexao::conexao();

        $querySelect = $conexao->prepare(
            "SELECT id_cato, nome_cato, rga_cato, raca_catos, pelagem_cato, data_nasc_cato 
             FROM tb_catos
             WHERE id_cato = ?"
        );

        $querySelect->bindValue(1, $this->getId());
        $querySelect->execute();
        $lista = $querySelect->fetchAll();

        echo("Busca ok");
        print_r($lista);
        return $lista;
    }

    public function atualizar()
    {
        $conexao = Conexao::conexao();

        $queryUpdate = $conexao->prepare(
            "UPDATE tb_catos 
             SET nome_cato = ?, rga_cato = ?, raca_cato = ?, pelagem_cato = ?, data_nasc_cato = ? 
             WHERE id_cato = ?"
        );
        $queryUpdate->bindValue(1, $this->getNome());
        $queryUpdate->bindValue(2, $this->getRga());
        $queryUpdate->bindValue(3, $this->getRaca());
        $queryUpdate->bindValue(4, $this->getPelagem());
        $queryUpdate->bindValue(5, $this->getDataNasc());
        $queryUpdate->bindValue(6, $this->getId());
        $queryUpdate->execute();

        echo("Atualização realizada com sucesso.");
    }

    public function deletar()
    {
        $conexao = Conexao::conexao();
        $queryDelete = $conexao->prepare(
            "DELETE FROM tb_catos 
            WHERE id_cato = ?"
        );

        $queryDelete->bindValue(1, $this->getId());
        $queryDelete->execute();

        echo("Exclusão realizada com sucesso.");
    }
}

