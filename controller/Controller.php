<?php

// Puxa as classes
include_once __DIR__ . "../../model/DataBase.php";
include_once __DIR__ . "../../model/Cliente.php";

/**
 * Controlador para gerenciar operações relacionadas aos clientes.
 *
 * Esta classe é responsável por inserir, editar, excluir e buscar clientes no banco de dados.
 * Utiliza a classe DataBase para interagir com o banco de dados e a classe Cliente para
 * manipular os dados dos clientes.
 *
 * @package MeuPacote
 * @author Daniel
 */
class Controller {
    /**
     * Instância da classe DataBase.
     *
     * @var DataBase
     */
    private $DataBase;

    /**
     * Construtor da classe Controller.
     *
     * Inicializa a instância da classe DataBase com os parâmetros de conexão fornecidos.
     */
    public function __construct() {
        // Insere as informações do banco
        $this->DataBase = new DataBase("localhost", "root", "", "finanpro");
    }

    /**
     * Insere as informações do cliente no banco de dados.
     *
     * Cria uma nova instância da classe Cliente e usa a classe DataBase para inserir
     * as informações no banco de dados.
     *
     * @param string $cpf CPF do cliente.
     * @param string $nome Nome do cliente.
     * @param string $cep CEP do cliente.
     * @param string $numeroCasa Número da casa do cliente.
     * @param string $telefone Telefone do cliente.
     * @param string $email Email do cliente.
     */
    public function inserirCliente($cpf, $nome, $cep, $numeroCasa, $telefone, $email) {
        $cliente = new Cliente($cpf, $nome, $cep, $numeroCasa, $telefone, $email);
        $this->DataBase->inserirCliente($cliente);
    }

    /**
     * Edita as informações de um cliente existente no banco de dados.
     *
     * Cria uma nova instância da classe Cliente com as informações fornecidas e usa a
     * classe DataBase para atualizar as informações do cliente no banco de dados.
     *
     * @param string $cpf CPF do cliente.
     * @param string $nome Nome do cliente.
     * @param string $cep CEP do cliente.
     * @param string $numeroCasa Número da casa do cliente.
     * @param string $telefone Telefone do cliente.
     * @param string $email Email do cliente.
     */
    public function editarCliente($cpf, $nome, $cep, $numeroCasa, $telefone, $email) {
        $cliente = new Cliente($cpf, $nome, $cep, $numeroCasa, $telefone, $email);
        $this->DataBase->editarCliente($cliente);
    }

    /**
     * Exclui um cliente do banco de dados.
     *
     * Usa a classe DataBase para remover um cliente com base no CPF fornecido.
     *
     * @param string $cpf CPF do cliente a ser excluído.
     */
    public function excluirCliente($cpf) {
        $this->DataBase->excluirCliente($cpf);
    }

    /**
     * Busca todos os clientes no banco de dados.
     *
     * Usa a classe DataBase para retornar uma lista de todos os clientes cadastrados.
     *
     * @return Cliente[] Lista de objetos Cliente.
     */
    public function buscarClientes() {
        return $this->DataBase->buscarClientes();
    }
}
?>
