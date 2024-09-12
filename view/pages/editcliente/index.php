<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinanPro - Editar Cliente</title>
</head>
<body>
    <header>
        <h1>Editar Cliente</h1>
    </header>
    <div class="container">
        <?php
        // Inclui o arquivo Controller
        include_once '../../../controller/Controller.php';
        $controller = new Controller();

        // Verifica se o CPF foi passado via GET
        if (isset($_GET['cpf'])) {
            $cpf = $_GET['cpf'];
            // Pegue os dados do cliente pelo CPF
            $cliente = $controller->buscarCliente($cpf);

            if ($cliente) {
                // Exibir o formulário preenchido com os dados do cliente
                echo "
                <form method='POST' action='processar_edicao.php'>
                    <input type='hidden' name='cpf' value='{$cliente->getCpf()}' required>
                    
                    <label for='nome'>Nome:</label>
                    <input type='text' id='nome' name='nome' value='{$cliente->getNome()}' required>

                    <label for='cep'>CEP:</label>
                    <input type='text' id='cep' name='cep' value='{$cliente->getCep()}' required>

                    <label for='numeroCasa'>Número da Casa:</label>
                    <input type='text' id='numeroCasa' name='numeroCasa' value='{$cliente->getNumeroCasa()}' required>

                    <label for='telefone'>Telefone:</label>
                    <input type='text' id='telefone' name='telefone' value='{$cliente->getTelefone()}' required>

                    <label for='email'>E-mail:</label>
                    <input type='email' id='email' name='email' value='{$cliente->getEmail()}' required>

                    <button type='submit'>Salvar Alterações</button>
                </form>
                ";
            } else {
                echo "<p>Cliente não encontrado.</p>";
            }
        } else {
            echo "<p>Nenhum cliente selecionado para edição.</p>";
        }
        ?>
        <a href="index.php">Voltar para a Página Inicial</a>
    </div>
    <footer>
        <p>&copy; 2024 FinanPro. Todos os direitos reservados.</p>
    </footer>
</body>
</html>