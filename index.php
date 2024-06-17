<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rs Subby - Sua página de Games</title>
    <meta name="description" content="Sua página de Games, com lançamentos e jogos pagos e gratuitos">
    <meta name="Keywords" content="games, jogos, lançamentos">

    <base href="http://localhost/modulo02/">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Jersey+25&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut" href="images/icone.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo-removebg-preview.png" alt="Stem">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="equipes">EQUIPES</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Games
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="game1">Jogo1</a></li>
                            <li><a class="dropdown-item" href="game2">Jogo2</a></li>
                            <li><a class="dropdown-item" href="game3">Jogo3</a></li>
                            <li><a class="dropdown-item" href="game4">Jogo4</a></li>
                        </ul>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <?php
        //print_r($_GET);
        $pagina = "home";
        //verificar se foi clicado em algum menu
        if (isset($_GET["pagina"])) {
            $pagina = $_GET["pagina"] ?? "home";
            // games/1
            $pagina = explode("/", $pagina);
            //print_r($pagina);
            $codigo = $pagina[1] ?? NULL;
            $pagina = $pagina[0] ?? "home";
        }

        $pagina = "pages/{$pagina}.php";

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pages/erro.php";
        }

        ?>
    </main>

    <footer id="contato" class="footer">
		<p>RODRIGO OLIVEIRA© 2024 </p>
        <p class="social-media">
            <a href="https://www.github.com" title="GitHub">
                <i class="fab fa-github"></i>
            </a>
            <a href="mailto:example@example.com" title="E-mail">
                <i class="fas fa-envelope"></i>
            </a>
            <a href="https://www.instagram.com" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </p>
	</footer>


    <!-- Scripts -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>