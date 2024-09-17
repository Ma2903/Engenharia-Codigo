<?php

include_once("Cliente.php");

/**
 * Classe para gerenciar a conexão com o banco de dados e executar operações CRUD.
 *
 * Esta classe é responsável por conectar-se ao banco de dados e realizar operações como 
 * inserção, atualização, exclusão e busca de registros de clientes.
 *
 * @package MeuPacote
 * @author Daniel
 */
class DataBase {
    /**
     * Host do banco de dados.
     *
     * @var string
     */
    private $host;

    /**
     * Nome de usuário para conexão com o banco de dados.
     *
     * @var string
     */
    private $login;

    /**
     * Senha para conexão com o banco de dados.
     *
     * @var string
     */
    private $pass;

    /**
     * Nome do banco de dados.
     *
     * @var string
     */
    private $dataBase;

    /**
     * Construtor da classe DataBase.
     *
     * Inicializa as propriedades necessárias para conectar ao banco de dados.
     *
     * @param string $host O host do banco de dados.
     * @param string $login Nome de usuário para conexão com o banco de dados.
     * @param string $pass Senha para conexão com o banco de dados.
     * @param string $dataBase Nome do banco de dados.
     */
    public function __construct($host, $login, $pass, $dataBase) {
        $this->host = $host;
        $this->login = $login;
        $this->pass = $pass;
        $this->dataBase = $dataBase;
    }

    /**
     * Estabelece uma conexão com o banco de dados.
     *
     * Cria uma nova conexão com o banco de dados usando as propriedades fornecidas.
     *
     * @return mysqli Conexão com o banco de dados.
     */
    public function connectBD() {
        $conn = mysqli_connect($this->host, $this->login, $this->pass, $this->dataBase);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    /**
     * Insere um novo cliente no banco de dados.
     *
     * Recebe um objeto Cliente e insere suas informações na tabela `cliente`.
     *
     * @param Cliente $cliente Objeto Cliente contendo as informações a serem inseridas.
     */
    public function inserirCliente($cliente) {
        $conexao = $this->connectBD();
        
        // Obtenha os dados do cliente
        $cpf = $cliente->getCpf();
        $nome = $cliente->getNome();
        $cep = $cliente->getCep();
        $numeroCasa = $cliente->getNumeroCasa();
        $telefone = $cliente->getTelefone();
        $email = $cliente->getEmail();

        // Prepare e execute a consulta SQL
        $consulta = "INSERT INTO cliente (cpf, nome, cep, numeroCasa, telefone, email) VALUES ('$cpf', '$nome', '$cep', '$numeroCasa', '$telefone', '$email')";
        if (mysqli_query($conexao, $consulta)) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro: " . mysqli_error($conexao);
        }

        // Feche a conexão
        mysqli_close($conexao);
    }

    /**
     * Atualiza as informações de um cliente no banco de dados.
     *
     * Recebe um objeto Cliente e atualiza suas informações na tabela `cliente` com base no CPF.
     *
     * @param Cliente $cliente Objeto Cliente contendo as informações a serem atualizadas.
     */
    public function editarCliente($cliente) {
        $conexao = $this->connectBD();
    
        // Obtenha os dados do cliente
        $cpf = $cliente->getCpf();
        $nome = $cliente->getNome();
        $cep = $cliente->getCep();
        $numeroCasa = $cliente->getNumeroCasa();
        $telefone = $cliente->getTelefone();
        $email = $cliente->getEmail();
        
        // Atualize os dados do cliente usando o CPF como chave
        $consulta = "UPDATE cliente SET nome='$nome', cep='$cep', numeroCasa='$numeroCasa', telefone='$telefone', email='$email' WHERE cpf='$cpf'";
        
        if (mysqli_query($conexao, $consulta)) {
            echo "Registro atualizado com sucesso";
        } else {
            echo "Erro ao atualizar: " . mysqli_error($conexao);
        }

        // Feche a conexão
        mysqli_close($conexao);
    }

    /**
     * Exclui um cliente do banco de dados com base no CPF.
     *
     * Recebe o CPF de um cliente e o remove da tabela `cliente`.
     *
     * @param string $cpf CPF do cliente a ser excluído.
     */
    public function excluirCliente($cpf) {
        $conexao = $this->connectBD();
        
        // Consulta para excluir o cliente pelo CPF
        $consulta = "DELETE FROM cliente WHERE cpf='$cpf'";
        
        if (mysqli_query($conexao, $consulta)) {
            echo "Registro excluído com sucesso";
        } else {
            echo "Erro ao excluir: " . mysqli_error($conexao);
        }

        // Feche a conexão
        mysqli_close($conexao);
    }

    /**
     * Busca todos os clientes no banco de dados.
     *
     * Retorna um resultado contendo todos os registros da tabela `cliente`.
     *
     * @return mysqli_result Resultado da consulta SQL.
     */
    public function buscarClientes() {
        $conexao = $this->connectBD();
        
        // Consulta para selecionar todos os clientes
        $consulta = "SELECT * FROM cliente";
        $resultado = mysqli_query($conexao, $consulta);
        
        // Retorna o resultado da consulta
        return $resultado;
    }
}
?>
