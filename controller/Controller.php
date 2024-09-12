<?php

// Puxa as classes
include_once __DIR__ . "../../model/DataBase.php";
include_once __DIR__ . "../../model/Cliente.php";

// Coloca o Controller para conectar o banco com o sistema
class Controller {
    private $DataBase;

    public function __construct() {
        // Insere as informacoes do banco
        $this->DataBase = new DataBase("localhost", "root", "", "finanpro");
    }

    // Insere as informacoes do cliente no banco
    public function inserirCliente($cpf, $nome, $cep, $numeroCasa, $telefone, $email) {
        $cliente = new Cliente($cpf, $nome, $cep, $numeroCasa, $telefone, $email);
        $this->DataBase->inserirCliente($cliente);
    }
    // Adicionar na classe Controller
    public function editarCliente($cpf, $nome, $cep, $numeroCasa, $telefone, $email) {
        $cliente = new Cliente($cpf, $nome, $cep, $numeroCasa, $telefone, $email);
        $this->DataBase->editarCliente($cliente);
    }

    public function excluirCliente($cpf) {
        $this->DataBase->excluirCliente($cpf);
    }

    public function buscarCliente($cpf){

    }
}
?>