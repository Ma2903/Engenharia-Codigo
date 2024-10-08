<?php
    include_once '../../global.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinanPro - Ver Clientes</title>
    <link rel="stylesheet" href="styles.css"> <!-- Adicione um arquivo de estilo opcional -->
</head>
<body>
    <?php Cabecalho() ?>
    <div class="container">
        <h1>Lista de Clientes</h1>
        <?php
        // Inclui o arquivo do Controller
        include_once '../../../controller/Controller.php';
        
        /**
         * Cria uma instância do Controller e busca todos os clientes.
         *
         * Usa a classe Controller para recuperar todos os registros de clientes
         * do banco de dados e exibi-los em uma tabela HTML. Também fornece opções
         * para editar ou deletar cada cliente.
         *
         * @package MeuPacote
         * @author Manoela
         */
        
        // Cria uma instância do Controller
        $controller = new Controller();
        
        // Busca todos os clientes
        $clientes = $controller->buscarClientes();

        if ($clientes && mysqli_num_rows($clientes) > 0) {
            // Exibe os clientes em uma tabela
            echo "
            <table border='1'>
                <tr>
                    <th>CPF</th>
                    <th>Nome</th>
                    <th>CEP</th>
                    <th>Número da Casa</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            ";

            // Itera sobre cada cliente e exibe seus dados
            while ($cliente = mysqli_fetch_assoc($clientes)) {
                echo "
                <tr>
                    <td>{$cliente['cpf']}</td>
                    <td>{$cliente['nome']}</td>
                    <td>{$cliente['cep']}</td>
                    <td>{$cliente['numeroCasa']}</td>
                    <td>{$cliente['telefone']}</td>
                    <td>{$cliente['email']}</td>
                    <td>
                        <a href='../editcliente/?cpf={$cliente['cpf']}'><button>Editar</button></a>
                        <a href='../delcliente/?cpf={$cliente['cpf']}' onclick='return confirm(\"Tem certeza que deseja excluir este cliente?\")'><button>Deletar</button></a>
                    </td>
                </tr>
                ";
            }

            echo "</table>";
        } else {
            echo "<p>Nenhum cliente encontrado.</p>";
        }
        ?>
        <a href="../../../index.php" class="back-link">Voltar para a Página Inicial</a>
    </div>
    <?php Rodape() ?>
</body>
</html>
