<?php

include_once "../../../controller/Controller.php";
$controller = new Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegue os dados do formulário
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $cep = $_POST['cep'];
    $numeroCasa = $_POST['numeroCasa'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    if (empty($cpf) || empty($nome) || empty($cep) || empty($numeroCasa) ||
    empty($telefone) || empty($email)) {
    $erro = "Por favor, preencha todos os campos obrigatórios.";
    $_SESSION['erro'] = $erro;
    header('Location: index.php');
    exit;
    }

    // Crie uma instância do Controller e insira o cliente
    $controller->inserirCliente($cpf, $nome, $cep, $numeroCasa, $telefone, $email);
    
    // Redirecione ou mostre uma mensagem de sucesso
    echo "Cliente cadastrado com sucesso!";
    header('Location: ../../../index.php');
}
?>