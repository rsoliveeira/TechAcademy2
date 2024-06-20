<?php

$id = $p[1] ?? NULL;

$dadosApi = file_get_contents("http://localhost/modulo02/api/games.php/");

$dadosApi = json_decode($dadosApi);

$jogo = $dadosApi->$id;

?>


<div class="container">
    <img src="<?=$jogo->banner?>" alt="SubmarineAdventure" title="SubmarineAdventure" class="bannermenu">
    <h1 class="text-center"><?=$jogo->nome?></h1>

    <div class="row">
        <div class="col-12 col-md-4" data-aos="fade-left">
            <img class="imgcapa" src="<?=$jogo->poster?>" class="w-100">
        </div>

        <div class="col-12 col-md-8" data-aos="fade-right">
            <p><<?=$jogo->descricao?>
            Submarine Adventure é um jogo eletrônico de plataforma desenvolvido e publicado por Rodrigo Oliveira. Lançado inicialmente para PC, Submarine Adventure permite que os jogadores assumam o papel do explorador submarino em uma jornada repleta de desafios emocionantes. Prepare-se para mergulhar em um mundo subaquático cheio de mistérios e perigos, enquanto busca pelo tesouro que pode mudar tudo.</p>
        </div>
    </div>

    <h2 class="text-center">Fotos do Game:</h2>
    <div class="row fotos" data-aos="fade">
        <div class="col-12 col-md-3">
            <img src="images/fase1.jpg" alt="Fase 01" class="w-100">
            </a>
        </div>
        <div class="col-12 col-md-3">
            <img src="images/fase2.jpg" alt="Fase 01" class="w-100">
            </a>
        </div>
        <div class="col-12 col-md-3">
            <img src="images/fase3.jpg" alt="Fase 01" class="w-100">
            </a>
        </div>
        <div class="col-12 col-md-3">
            <img src="images/fase4.jpg" alt="Fase 01" class="w-100">
            </a>
        </div>
    </div>
</div>