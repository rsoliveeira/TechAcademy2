<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/modulo02/imagens/";

    $games[1] = array("id"=>1, "nome"=>"Submarine Adventure", "descricao"=>"<p>Submarine Adventure é um jogo eletrônico de plataforma desenvolvido e publicado por Rodrigo Oliveira. Lançado inicialmente para PC, Submarine Adventure permite que os jogadores assumam o papel do explorador submarino em uma jornada repleta de desafios emocionantes. Prepare-se para mergulhar em um mundo subaquático cheio de mistérios e perigos, enquanto busca pelo tesouro que pode mudar tudo.</p>",
    "poster"=>"{$path}banner0001.png","banner"=>"{$path}banner0001.png", "capa"=>"{$path}Poster.png");


    echo json_encode($games);