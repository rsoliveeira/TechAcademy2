<?php

$id = $p[1] ?? NULL;

$dadosApi = file_get_contents("http://localhost/modulo02/api/games.php/");

$dadosApi = json_decode($dadosApi);

$jogo = $dadosApi->$id;

?>

<div class="banner" data-aos="fade-left">   
<img src="<?=$jogo->banner?>"  class="w-100">
</div>  

<div class="container">
    <div class="row">
        <div class="col-12 col-md-3" data-aos="fade-left">
        <img src="<?=$jogo->poster?>" class="w-100">
        </div>

        <div class="col-12 col-md-9" data-aos="fade-right">
        <p><strong><text-justify><?=$jogo->descricao?></strong></text-justify></p>
        </div>
        
    </div>

    <h2 class="text-center">Fotos do Jogo</h2>
 <div class="row">
    
    <?php
    // Verifique se o conteúdo foi recuperado com sucesso
    $id = $p[1] ?? NULL;
    $dadosFotos = file_get_contents("http://localhost/modulo02/api/fotos.php/");
    $dadosFotos = json_decode($dadosFotos,true);
    $dados = $dadosFotos->$id;
    ?>

        <div class="col-12 col-md-3">
            <a href="<?=$dados->dados?>" title="Foto <?=$id?>" data-fslightbox>
                <img src="<?=$dados->dados?>" alt="Foto <?=$id?>" class="w-100">
            </a>
        </div>
        <?php
    ?>
</div>
</div>
