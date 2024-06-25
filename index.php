<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS SUBBY - PÁGINA DE GAMES </title>
    <meta name="description" content="Sua página de Games gratuitos">
    <meta name="Keywords" content="games, jogos, lançamentos">

    <base href="http://localhost/teste/">

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

    <link rel="shortcut" href="imagens/icone.png">
</head>

<body>

<?php
	$url = "http://localhost/teste/api/games.php";

	$dadosApi = file_get_contents($url);

	$dadosJogos = json_decode($dadosApi);


    
?>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="imagens/logo-removebg-preview.png" alt="RS SUBBY" title="RS SUBBY">
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
                        <?php
                            foreach($dadosJogos as $dados) {
                                    echo "<li><a class='dropdown-item' href='game/{$dados->id}'>{$dados->nome}</a>
                                    </li>";
                                }
                        ?>
                	</ul>
					</li>
				</ul>
                <div class="d-flex">
    <a href="contato" class="btn btn-custom" title="Contato">
        <i class="fa-regular fa-envelope"></i> Entre em Contato
    </a>
</div>

                </div>
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
		<p> DESENVOLVIDO POR RODRIGO OLIVEIRA© 2024</p>
        <p class="social-media">
            <a href="https://github.com/rsoliveeira" title="GitHub">
                <i class="fab fa-github"></i>
            </a>
            <a href="mailto:rodrigo_oliveeira@hotmail.com" title="E-mail">
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