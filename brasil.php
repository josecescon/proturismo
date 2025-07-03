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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proturismo</title>
    <link rel="stylesheet" href="brasil.css">
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
                    <li><a href="argentina.html">Argentina</a></li>
                    <li><a href="paraguai.html">Paraguai</a></li>
                </ul>
            </nav>
            <div class="cta">
                <a href="painel.php" class="btn">Voltar ao início</a>
            </div>
        </div>
    </header>

    <section class="search-section">
        <div class="search-containe">
            <input 
                type="text" 
                id="searchInput" 
                placeholder="Pesquisar por passeios..."/>
        </div>
    </section>
    
    <section class="sla">
        <div class="proturismo">
            <img src="data:image/jpeg;base64,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" alt="Imagem de turismo" class="img-turismo">
        </div>
    </section>

    <main>
        <section class="destination-grid">
            <div class="destination" style="background-image: url('https://www.viagensecaminhos.com/wp-content/uploads/2010/08/foz-do-iguacu-cataratas-do-iguacu.jpg');">
                <span class="destination-title">Cataratas do Iguaçu</span>
            </div>
            <div class="destination" style="background-image: url('https://www.iguassu.com.br/wp-content/uploads/2023/09/WhatsApp-Image-2023-09-06-at-16.16.28.jpeg');">
                <span class="destination-title">Parque das Aves</span>
            </div>
            <div class="destination" style="background-image: url('https://www.h2foz.com.br/wp-content/uploads/2020/10/bfb1d31a-1578594718-capa.jpg');">
                <span class="destination-title">Marco das Três Fronteiras</span>
            </div>
            <div class="destination" style="background-image: url('https://www.hoteldelreyfoz.com.br/wp-content/uploads/2020/09/usina-de-itaipu-binacional-1024x576.jpeg');">
                <span class="destination-title">Usina de Itaipu</span>
            </div>
            <div class="destination" style="background-image: url('https://a.travel-assets.com/findyours-php/viewfinder/images/res70/71000/71069-Foz-Do-Iguacu.jpg');">
                <span class="destination-title">Templo Budista</span>
            </div>
            <div class="destination" style="background-image: url('https://dynamic-media-cdn.tripadvisor.com/media/photo-o/2b/30/9c/d5/fachada-do-museu-de-cera.jpg?w=1200&h=-1&s=1');">
                <span class="destination-title">Dreamland Museu de Cera</span>
            </div>
        </section>
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