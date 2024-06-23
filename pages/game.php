<?php
$dados = $dadosJogos->$codigo;
?>

<div class="banner" data-aos="fade-left">
    <img src="<?= $dados->banner ?>" alt="<?= $dados->banner ?>" class="w-100">
</div>

<div class="container">
    <h1 class="text-center"><?= $dados->nome ?></h1>
    <div class="row">
        <div class="col-12 col-md-3" data-aos="fade-left">
            <img src="<?= $dados->poster ?>" alt="<?= $dados->nome ?>" class="w-100">
        </div>

        <div class="col-12 col-md-9" data-aos="fade-right">
        <p>
                <?=$dados->descricao?>
            </p>
        </div>

    </div>

    <h2 class="text-center">Fotos do Jogo</h2>
    <div class="row">
    <?php
            $dadosFotos = file_get_contents ("http://localhost/teste/api/fotos.php");
            $dadosFotos = json_decode($dadosFotos);
            //só as fotos do jogo
            $dados = $dadosFotos->$codigo;

            $i = 1;
            foreach($dados as $foto) {
                ?>
                <div class="col-12 col-md-3">
                    <a href="<?=$foto->foto?>" title="Foto <?=$i?>"
                    data-fslightbox>
                        <img src="<?=$foto->foto?>"
                        alt="Foto <?=$i?>" class="w-100">
                    </a>
                </div>
                <?php
                $i++;
            }
        ?>
    </div>
</div>