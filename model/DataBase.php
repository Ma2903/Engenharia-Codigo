<?php

include_once("Cliente.php");

class DataBase {
    private $host;
    private $login;
    private $pass;
    private $dataBase;

    public function __construct($host, $login, $pass, $dataBase) {
        $this->host = $host;
        $this->login = $login;
        $this->pass = $pass;
        $this->dataBase = $dataBase;
    }

    // Faz a conexao com o banco
    public function connectBD() {
        $conn = mysqli_connect($this->host, $this->login, $this->pass, $this->dataBase);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    // Cria a funcao de insercao para o cliente
    public function inserirCliente($cliente) {
        $conexao = $this->connectBD();
        
        // Obtenha os dados do cliente
        $cpf = $cliente->getCpf();
        $nome = $cliente->getNome();
        $cep = $cliente->getCep();
        $numeroCasa = $cliente->getNumeroCasa();
        $telefone = $cliente->getTelefone();
        $email = $cliente->getEmail();

        // Prepare e execute a consulta SQL diretamente
        $consulta = "INSERT INTO cliente (cpf, nome, cep, numeroCasa, telefone, email) VALUES ('$cpf', '$nome', '$cep', '$numeroCasa', '$telefone', '$email')";
        if (mysqli_query($conexao, $consulta)) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro: " . mysqli_error($conexao);
        }

        // Feche a conexão
        mysqli_close($conexao);
    }
        // Adicionar na classe DataBase
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
    // Adicionar na classe DataBase
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
}
?>