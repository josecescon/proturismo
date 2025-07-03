<?php
include 'conexao.php';
$erro = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $erro = true;
    } else {
        $sql = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$senha')";
        if ($conn->query($sql)) {
            header("Location: login.html");
            exit;
        } else {
            echo "Erro ao cadastrar: " . $conn->error;
        }
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Proturismo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo">PROTURISMO</h1>
            <nav class="nav">
                <ul>
                    <li><a href="#">Destinos</a></li>
                    <li><a href="#">Experiências</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </nav>
            <div class="cta">
                <a href="login.html" class="btn">Ir para Login</a>
            </div>
        </div>
    </header>

    <main>
        <h1>Cadastre-se</h1>

        <?php if ($erro): ?>
            <p style="color: red; font-weight: bold;">Este e-mail já está cadastrado.</p>
        <?php endif; ?>

        <form action="cadastro.php" method="POST" style="margin-top: 30px;">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required placeholder="Digite seu email"><br><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" required placeholder="Digite sua senha"><br><br>

            <button type="submit" class="btn">Cadastrar-se</button>
        </form>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Sobre Nós</h3>
                <p>Oferecemos os melhores passeios e experiências em Foz do Iguaçu. Explore e se surpreenda com a nossa cidade!</p>
            </div>
            <div class="footer-section">
                <h3>Contatos</h3>
                <ul>
                    <li>+55 (45)</li>
                    <li>Proturismo@gmail.com</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Siga-nos</h3>
                <div class="social-icons"></div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 Proturismo. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>