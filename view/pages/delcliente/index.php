<?php
    include_once '../../global.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinanPro - Deletar Cliente</title>
    <link rel="stylesheet" href="styles.css"> <!-- Adicione um arquivo de estilo opcional -->
</head>
<body>
    <?php Cabecalho() ?>
    <div class="container">
        <?php
        // Inclui o arquivo Controller
        include_once '../../../controller/Controller.php';
        
        /**
         * Exclui um cliente do banco de dados com base no CPF fornecido.
         *
         * Recebe um CPF via GET e usa a classe Controller para excluir o cliente
         * correspondente do banco de dados. Exibe uma mensagem de sucesso após a
         * exclusão ou uma mensagem de erro se o CPF não for fornecido.
         *
         * @package MeuPacote
         * @author Manoela
         */

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
    <?php Rodape() ?>
</body>
</html>
