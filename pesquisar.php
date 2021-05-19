<?php
include ("conexao.php");

class Pesquisa extends Conexao{
    public function pesquisardb($busca){
        $crud = $this -> buscarbanco() -> prepare("SELECT * FROM aluno WHERE nome LIKE :nome");
        $crud -> bindValue (":nome", $busca);
        $crud -> execute();
        $f = $crud -> fetchAll();
        return $f;
    }
}