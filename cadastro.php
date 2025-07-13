<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        header("Location: cadastro.php?erro=email");
        exit;
    }
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO usuarios (email, senha) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $senha);

    if ($stmt->execute()) {
        header("Location: login.html");
        exit;
    } else {
        echo "Erro ao cadastrar.";
    }

    $stmt->close();
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
                    <li><a href="destinos.html">Destinos</a></li>
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
        <?php if (isset($_GET['erro']) && $_GET['erro'] === 'email'): ?>
            <p style="color: red; font-weight: bold;">Este e-mail já está cadastrado.</p>
        <?php endif; ?>
        <form action="cadastro.php" method="POST">
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Digite seu email" required><br><br>
            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required><br><br>
            <button type="submit" class="btn">Cadastrar</button>
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