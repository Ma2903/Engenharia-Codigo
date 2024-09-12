<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinanPro - Cadastro de Clientes</title>
</head>
<body>
    <header>
        <h1>FinanPro</h1>
    </header>
    <div class="container">
        <h1>Cadastro de Cliente</h1>
        <form id="client-form" method="POST" action="processar_cadastro.php">
            <label for="nome">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="cep">CEP:</label>
            <input type="text" id="cep" name="cep" required>

            <label for="numeroCasa">Número da Casa:</label>
            <input type="text" id="numeroCasa" name="numeroCasa" required>
            
            <label for="telefone">Telefone:</label>
            <input type="text" id="telefone" name="telefone" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <button type="submit">Cadastrar Cliente</button>
        </form>
        <a href="index.php" class="back-link">Voltar para a Página Inicial</a>
    </div>
    <footer>
        <p>&copy; 2024 FinanPro. Todos os direitos reservados.</p>
    </footer>
</body>
</html>