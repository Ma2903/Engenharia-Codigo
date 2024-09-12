<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinanPro - Deletar Cliente</title>
    <link rel="stylesheet" href="styles.css"> <!-- Adicione um arquivo de estilo opcional -->
</head>
<body>
    <header>
        <h1>Deletar Cliente</h1>
    </header>
    <div class="container">
        <?php
        // Inclui o arquivo Controller
        include_once '../../../controller/Controller.php';
        $controller = new Controller();

        // Verifica se o CPF foi passado via GET
        if (isset($_GET['cpf'])) {
            $cpf = $_GET['cpf'];

            // Exclui o cliente do banco de dados
            $controller->excluirCliente($cpf);

            echo "<p>Cliente excluído com sucesso.</p>";
        } else {
            echo "<p>Nenhum cliente selecionado para exclusão.</p>";
        }
        ?>
        <a href="../../../index.php">Voltar para a Página Inicial</a>
    </div>
    <footer>
        <p>&copy; 2024 FinanPro. Todos os direitos reservados.</p>
    </footer>
</body>
</html>