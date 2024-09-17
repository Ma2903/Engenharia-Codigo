<?php

// Inclui o arquivo do controller, necessário para lidar com as operações do cliente.
include_once "../../../controller/Controller.php";

/**
 * Processa o cadastro de um cliente.
 *
 * Recebe os dados do formulário via POST, valida as entradas e usa a classe Controller
 * para inserir um novo cliente no sistema. Exibe uma mensagem de sucesso e redireciona
 * para a página inicial após a inserção bem-sucedida.
 *
 * @package MeuPacote
 * @author Manoela
 */

// Cria uma nova instância do Controller
$controller = new Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados enviados via POST no formulário de cadastro.
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $cep = $_POST['cep'];
    $numeroCasa = $_POST['numeroCasa'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    // Verifica se todos os campos obrigatórios foram preenchidos.
    if (empty($cpf) || empty($nome) || empty($cep) || empty($numeroCasa) || empty($telefone) || empty($email)) {
        // Define uma mensagem de erro e redireciona de volta para a página de cadastro.
        $erro = "Por favor, preencha todos os campos obrigatórios.";
        $_SESSION['erro'] = $erro;
        header('Location: index.php');
        exit;
    }

    // Chama o método do controller para inserir o cliente no sistema.
    $controller->inserirCliente($cpf, $nome, $cep, $numeroCasa, $telefone, $email);
    
    // Exibe uma mensagem de sucesso e redireciona para a página inicial.
    echo "Cliente cadastrado com sucesso!";
    header('Location: ../../../index.php');
}
?>
