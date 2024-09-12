<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinanPro - Ver Cliente</title>
    <link rel="stylesheet" href="styles.css"> <!-- Adicione um arquivo de estilo opcional -->
</head>
<body>
    <header>
        <h1>FinanPro - Cliente</h1>
    </header>
    <div class="container">
        <h1>Informações do Cliente</h1>
        <?php
        // Inclui o arquivo Controller para puxar os dados do cliente
        include_once '../../../controller/Controller.php';
        $controller = new Controller();

        // Pegue o CPF passado via GET (ex: vercliente.php?cpf=123456789)
        if (isset($_GET['cpf'])) {
            $cpf = $_GET['cpf'];
            // Pegue os dados do cliente por meio de uma função que você pode adicionar ao Controller
            // Supondo que exista um método no Controller para buscar dados do cliente com o CPF.
            $cliente = $controller->buscarCliente($cpf); 
            
            if ($cliente) {
                // Exibir os dados do cliente em uma tabela
                echo "
                <table border='1'>
                    <tr>
                        <th>CPF</th>
                        <td>{$cliente->getCpf()}</td>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <td>{$cliente->getNome()}</td>
                    </tr>
                    <tr>
                        <th>CEP</th>
                        <td>{$cliente->getCep()}</td>
                    </tr>
                    <tr>
                        <th>Número da Casa</th>
                        <td>{$cliente->getNumeroCasa()}</td>
                    </tr>
                    <tr>
                        <th>Telefone</th>
                        <td>{$cliente->getTelefone()}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{$cliente->getEmail()}</td>
                    </tr>
                </table>
                ";

                // Botões de editar e deletar
                echo "
                <div class='actions'>
                    <a href='editcliente.php?cpf={$cliente->getCpf()}'>
                        <button>Editar Cliente</button>
                    </a>
                    <a href='delcliente.php?cpf={$cliente->getCpf()}' onclick='return confirm(\"Tem certeza que deseja excluir este cliente?\")'>
                        <button>Deletar Cliente</button>
                    </a>
                </div>
                ";
            } else {
                echo "<p>Cliente não encontrado.</p>";
            }
        } else {
            echo "<p>Nenhum cliente selecionado.</p>";
        }
        ?>
        <a href="../../../index.php" class="back-link">Voltar para a Página Inicial</a>
    </div>
    <footer>
        <p>&copy; 2024 FinanPro. Todos os direitos reservados.</p>
    </footer>
</body>
</html>