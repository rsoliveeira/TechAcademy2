<?php
// URL da API para obter os dados dos jogos
$apiGames = "http://localhost/modulo02/api/games.php";
$apiBanner = "http://localhost/modulo02/api/banners.php";
$apiGamesEquipes = "http://localhost/modulo02/api/gamesequipes.php";


// Obtém o conteúdo JSON da URL
$jsonGames = file_get_contents($apiGames);
$JsonBanner = file_get_contents($apiBanner);
$jsonGamesEquipes = file_get_contents($apiGamesEquipes);


// Decodifica o JSON em um array de objetos PHP
$dadosGames = json_decode($jsonGames, true);
$dadosBanner = json_decode($JsonBanner);
$dadosGamesEquipes = json_decode($jsonGamesEquipes, true);

?>

<div id="carouselExample" class="carousel slide" data-aos="fade">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="gamesPage/1">
                <img src="http://localhost/modulo02/imagens/bannerSubmarineAdventure.jpeg " class="d-block w-100" alt="SubmarineAdventure">
            </a>
        </div>

        <?php
        foreach ($dadosBanner as $dados) {
            if ($dados->id_game != 1) {
        ?>
                <div class="carousel-item">
                    <a href="games/<?= $dados->id_game ?>">
                        <img src="<?= $dados->imagem ?>" class="d-block w-100" alt="<?= $dados->nome ?>">
                    </a>
                </div>
        <?php
            }
        }
        ?>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
</div>
 

<div class="container">
    <h1 class="text-center">GAMES:</h1>
    <div class="row">

    <?php
        foreach ($dadosGames as $dados) {
            $id = $dados['id'];
            $capa = $dados['capa'];
            $jogoIframe = isset($dadosGamesEquipes[$id]) ? $dadosGamesEquipes[$id]['jogo'] : '';
        ?>

        <div class="col-12 col-md-4 mt-3">
            <div class="card" data-aos="fade-up" data-aos-delay="50">
                <img src="<?=$capa ?>" alt="<?=$nome ?>" class="card-img-top" loading="lazy">
                <div class="card-body text-center">
                        <a href="gamesequipes.php?id=<?=$id ?>" title="JOGAR" class="btn btn-info">
                            <i class="bi bi-controller"></i> JOGAR
                        </a>
                        <a href="game.php?id=<?=$id ?>" title="SOBRE O JOGO" class="btn btn-info">
                            <i class="fas fa-search"></i> SOBRE O JOGO
                        </a>
                    </p>
                </div>
            </div>
        </div>
     <?php
     }
     ?>

    </div>
</div>



