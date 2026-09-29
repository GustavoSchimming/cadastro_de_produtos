<!-- Digite sua solução para o desafio (AQUI) -->
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>

    <h2>Cadastrar Produto</h2>

    <form method="post" action="">
        <label for="nome">Nome do Produto:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="preco">Preço:</label><br>
        <input type="number" id="preco" name="preco" step="0.01" min="0.01" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <?php
    // Verifica se o formulário foi enviado via POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // Recebe e limpa os dados enviados
        $nome = trim($_POST['nome'] ?? '');
        $preco = filter_input(INPUT_POST, 'preco', FILTER_VALIDATE_FLOAT);

        // Validações em PHP
        if (empty($nome)) {
            echo "<p id='msg' style='color: red;'>Erro: O nome do produto não pode estar vazio.</p>";
        } elseif ($preco === false || $preco <= 0) {
            echo "<p id='msg' style='color: red;'>Erro: O preço deve ser um número positivo.</p>";
        } else {
            // Configuração da conexão com o banco de dados
            $servername = "localhost";
            $username = "root";
            $password = "Senai@118";
            $dbname = "exercicio";

            $conn = new mysqli($servername, $username, $password, $dbname);


            // Verifica a conexão
            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            // Inserção segura usando Prepared Statements
            $stmt = $conn->prepare("INSERT INTO produtos (nome, preco) VALUES (?, ?)");
            $stmt->bind_param("sd", $nome, $preco);

            if ($stmt->execute()) {
                echo "<p id='msg' style='color: green;'>Produto cadastrado com sucesso!</p>";
            } else {
                echo "<p id='msg' style='color: red;'>Erro ao cadastrar produto: " . $stmt->error . "</p>";
            }

            // Encerra a instrução e a conexão
            $stmt->close();
            $conn->close();

            echo "
            <script>
            setTimeout(function(){
                document.getElementById('msg').style.display = 'none'
            }, 5000)
            </script>
            ";
        }
    }
    ?>

</body>
</html>