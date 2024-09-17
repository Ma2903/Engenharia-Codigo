<?php
    include_once '../../global.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinanPro - Editar Cliente</title>
    <link rel="stylesheet" href="styles.css"> <!-- Adicione um arquivo de estilo opcional -->
</head>
<body>
    <?php Cabecalho() ?>
    <div class="container">
        <?php
        // Inclui o arquivo DataBase e Cliente
        include_once '../../../model/DataBase.php';
        include_once '../../../model/Cliente.php';

        // Cria uma nova instância da classe DataBase
        $db = new DataBase("localhost", "root", "", "finanpro");

        // Verifica se o CPF foi passado via GET
        if (isset($_GET['cpf'])) {
            $cpf = $_GET['cpf'];

            // Consulta o cliente pelo CPF (você deve criar uma função buscarCliente pelo CPF)
            $conexao = $db->connectBD();
            $consulta = "SELECT * FROM cliente WHERE cpf='$cpf'";
            $resultado = mysqli_query($conexao, $consulta);

            if ($resultado && mysqli_num_rows($resultado) > 0) {
                $clienteData = mysqli_fetch_assoc($resultado);

                // Criar um objeto Cliente com os dados recuperados
                $cliente = new Cliente(
                    $clienteData['cpf'],
                    $clienteData['nome'],
                    $clienteData['cep'],
                    $clienteData['numeroCasa'],
                    $clienteData['telefone'],
                    $clienteData['email']
                );

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

            // Fechar a conexão
            mysqli_close($conexao);
        } else {
            echo "<p>Nenhum cliente selecionado para edição.</p>";
        }
        ?>
        <a href="../../../index.php">Voltar para a Página Inicial</a>
    </div>
    <?php Rodape() ?>
</body>
</html>