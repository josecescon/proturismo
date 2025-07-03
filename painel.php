<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    $_SESSION['redirect_after_login'] = $_SERVER['REQUEST_URI'];
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel do Usuário - Proturismo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo">PROTURISMO</h1>
            <nav class="nav">
                <ul>
                    <li><a href="brasil.php">Brasil</a></li>
                    <li><a href="argentina.html">Argentina</a></li>
                    <li><a href="paraguai.html">Paraguai</a></li>
                </ul>
            </nav>
            <div class="cta">
                <a href="logout.php" class="btn">Sair</a>
            </div>
        </div>
    </header>

    <main>
        <h1>Olá, <?php echo $_SESSION['usuario']; ?>!</h1>
        <p style="margin-top: 20px;">
            Bem-vindo ao seu painel de viajante.
        </p>
        <p style="margin-top: 10px;">
            Explore os destinos abaixo:
        </p>

        <div style="margin-top: 30px;">
            <a href="brasil.php" class="btn" style="margin: 10px;">🇧🇷 Brasil</a>
            <a href="argentina.html" class="btn" style="margin: 10px;">🇦🇷 Argentina</a>
            <a href="paraguai.html" class="btn" style="margin: 10px;">🇵🇾 Paraguai</a>
        </div>
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
                    <li><i class="fas fa-phone"></i> +55 (45)</li>
                    <li><i class="fas fa-envelope"></i> Proturismo@gmail.com</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Siga-nos</h3>
                <div class="social-icons">
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2025 Proturismo. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
