<?php

class Conexao
{
    public static function conexao()
    {
        try
        {
            $conexao = new PDO("mysql:host=localhost; dbname=bd_petshop_catos", "root", "");
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;
        }
        catch(Exception $e)
        {
            echo("Erro na conexão com o banco.");
            echo($e);
        }
    }

}

?>