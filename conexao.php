<?php
abstract class Conexao{

    protected function conectardb(){
        try{
            $conn = new PDO("mysql:host=localhost;dbname=aluno","root","");
            return $conn;
        }
        catch (PDOException $erro) {
            return $erro -> getMessage();
        }
    }

}