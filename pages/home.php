<?php

$url = "http://localhost/teste/api/banners.php";

$dadosApi = file_get_contents($url);

$dadosBanner = json_decode($dadosApi);

?>

<div id="carouselExample" class="carousel slide" data-aos="fade">
    <div class="carousel-inner">
    <div class="carousel-item active">
            <a href="game/1">
                <img src="http://localhost/teste/imagens/bannerSubmarineAdventure.jpeg " class="d-block w-100" alt="SubmarineAdventure">
            </a>
        </div>
        <?php
        foreach ($dadosBanner as $dados) {
            if ($dados->id_game != 1) {
        ?>
            <div class="carousel-item">
                <a href="game/<?= $dados->id_game ?>">
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
    <h1 class="text-center">GAMES</h1>

    <div class="row">
        <?php
        foreach ($dadosJogos as $dados) {
        ?>

            <div class="col-12 col-md-4 mt-3">
                <div class="card" data-aos="fade-up" data-aos-delay="50">
                    <img src="<?= $dados->poster ?>" alt="<?= $dados->nome ?>" class="card-img-top" loading="lazy">

                    <div class="card-body text-center">
                        <a href="<?= $dados->jogo ?>" title="JOGAR" class="btn btn-info">
                            <i class="bi bi-controller"></i> JOGAR
                        </a>

                        <a href="game/<?= $dados->id ?>" title="SOBRE O JOGO" class="btn btn-info">
                            <i class="fas fa-search"></i> SOBRE O JOGO
                        </a>

                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>