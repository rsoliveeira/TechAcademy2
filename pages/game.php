<?php

$id = $p[1] ?? NULL;

$dadosApi = file_get_contents("http://localhost/modulo02/api/games.php/");

$dadosApi = json_decode($dadosApi);

$jogo = $dadosApi->$id;

?>


<div class="container">
    <img src="<?=$jogo->banner?>" alt="SubmarineAdventure" title="SubmarineAdventure" class="w-100">
    <h1 class="text-center"><?=$jogo->nome?></h1>

    <div class="row my-4">
        <div class="col-12 col-md-4" data-aos="fade-left">
            <img class="imgcapa" src="<?=$jogo->poster?>" class=>
        </div>

        <div class="col-12 col-md-8" data-aos="fade-right">
            <p><<?=$jogo->descricao?>
        </div>
    </div>

    <h2 class="text-center">Fotos do Game:</h2>
    <div class="row fotos" data-aos="fade">
        <div class="col-12 col-md-3">
            <img src="imagens/fase1.jpg" alt="Fase 01" class="img-fluid">
            </a>
        </div>
        <div class="col-12 col-md-3">
            <img src="imagens/fase2.jpg" alt="Fase 01" class="img-fluid">
            </a>
        </div>
        <div class="col-12 col-md-3">
            <img src="imagens/fase3.jpg" alt="Fase 01" class="img-fluid">
            </a>
        </div>
        <div class="col-12 col-md-3">
            <img src="imagens/fase4.jpg" alt="Fase 01" class="img-fluid">
            </a>
        </div>
    </div>
</div>