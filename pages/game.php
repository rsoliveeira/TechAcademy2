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

    <h2 class="text-center">Fotos do Jogo</h2>
    <div class="row">
    <?php
    // Verifique se o conteúdo foi recuperado com sucesso
    $dadosFotos = file_get_contents("http://localhost/modulo02/api/fotos.php/");
    
    if ($dadosFotos === FALSE) {
        echo "Erro ao recuperar os dados.";
        exit;
    }

    // Decodifique o JSON
    $dadosFotos = json_decode($dadosFotos);

    // Defina a variável $codigo com a chave correta
    $codigo = 1; // Use a chave que você precisar

    // Verifique se a propriedade existe no objeto decodificado
    if (isset($dadosFotos->$codigo)) {
        $dados = $dadosFotos->$codigo;
    } else {
        echo "Código não encontrado.";
        exit;
    }

    $i = 1;
    foreach($dados as $foto) {
?>
        <div class="col-12 col-md-3">
            <a href="<?=$foto->foto?>" title="Foto <?=$i?>" data-fslightbox>
                <img src="<?=$foto->foto?>" alt="Foto <?=$i?>" class="w-100">
            </a>
        </div>
<?php
        $i++;
    }
?>

    </div>
</div>
</div>