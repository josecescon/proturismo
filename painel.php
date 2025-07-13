<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel do Usuário</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <h1 class="logo">PROTURISMO</h1>
            <nav class="nav">
                <ul>
                    <li><a href="brasil.html">Brasil</a></li>
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
        <h1>Você está logado como <?php echo $_SESSION['usuario']; ?></h1>
        <p>Explore nossos destinos e aproveite as melhores experiências!</p>
    </main>
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Sobre Nós</h3>
                <p>Oferecemos os melhores passeios e experiências em Foz do Iguaçu.</p>
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