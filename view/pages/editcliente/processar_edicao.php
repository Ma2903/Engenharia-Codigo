<?php
// Inclui o arquivo do Controller
include_once '../../../controller/Controller.php';

/**
 * Processa a edição de um cliente.
 *
 * Recebe os dados atualizados do cliente via POST e usa a classe Controller para atualizar
 * as informações do cliente no banco de dados. Após a atualização, redireciona para a página
 * principal de clientes.
 *
 * @package MeuPacote
 * @author Manoela
 */

$controller = new Controller();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pega os dados do formulário
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $cep = $_POST['cep'];
    $numeroCasa = $_POST['numeroCasa'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    // Atualiza o cliente no banco de dados
    $controller->editarCliente($cpf, $nome, $cep, $numeroCasa, $telefone, $email);

    // Redireciona para a página principal após a edição
    header("Location: ../cliente/");
    exit;
}
?>
