<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/modulo02/imagens/";

    $games[1] = array("id"=>1, "nome"=>"Submarine Adventure", "descricao"=>"<p>Submarine Adventure é um jogo eletrônico de plataforma desenvolvido e publicado por Rodrigo Oliveira. Lançado inicialmente para PC, Submarine Adventure permite que os jogadores assumam o papel do explorador submarino em uma jornada repleta de desafios emocionantes. Prepare-se para mergulhar em um mundo subaquático cheio de mistérios e perigos, enquanto busca pelo tesouro que pode mudar tudo.</p>",
    "poster"=>"{$path}Poster.png","banner"=>"{$path}banner0001.png", "capa"=>"{$path}Poster.png");

    $games[2] = array("id"=>2, "nome"=>"Galactic Attack", "descricao"=>"<p>Submarine Adventure é um jogo eletrônico de plataforma desenvolvido e publicado por Rodrigo Oliveira. Lançado inicialmente para PC, Submarine Adventure permite que os jogadores assumam o papel do explorador submarino em uma jornada repleta de desafios emocionantes. Prepare-se para mergulhar em um mundo subaquático cheio de mistérios e perigos, enquanto busca pelo tesouro que pode mudar tudo.</p>",
    "poster"=>"{$path}Galactic Attack.jpeg","banner"=>"{$path}bannerGalacticAttack.jpeg", "capa"=>"{$path}Galactic Attack.jpeg");

    $games[3] = array("id"=>3, "nome"=>"Birdy", "descricao"=>"<p>Submarine Adventure é um jogo eletrônico de plataforma desenvolvido e publicado por Rodrigo Oliveira. Lançado inicialmente para PC, Submarine Adventure permite que os jogadores assumam o papel do explorador submarino em uma jornada repleta de desafios emocionantes. Prepare-se para mergulhar em um mundo subaquático cheio de mistérios e perigos, enquanto busca pelo tesouro que pode mudar tudo.</p>",
    "poster"=>"{$path}Birdy.jpeg","banner"=>"{$path}bannerBirdy.jpeg", "capa"=>"{$path}Birdy.jpeg");

    $games[4] = array("id"=>4, "nome"=>"Wildwest", "descricao"=>"<p>Submarine Adventure é um jogo eletrônico de plataforma desenvolvido e publicado por Rodrigo Oliveira. Lançado inicialmente para PC, Submarine Adventure permite que os jogadores assumam o papel do explorador submarino em uma jornada repleta de desafios emocionantes. Prepare-se para mergulhar em um mundo subaquático cheio de mistérios e perigos, enquanto busca pelo tesouro que pode mudar tudo.</p>",
    "poster"=>"{$path}Wildwest.jpeg","banner"=>"{$path}bannerWildwest.jpeg", "capa"=>"{$path}Wildwest.jpeg");

    $games[5] = array("id"=>5, "nome"=>"Souls Dark", "descricao"=>"<p>Submarine Adventure é um jogo eletrônico de plataforma desenvolvido e publicado por Rodrigo Oliveira. Lançado inicialmente para PC, Submarine Adventure permite que os jogadores assumam o papel do explorador submarino em uma jornada repleta de desafios emocionantes. Prepare-se para mergulhar em um mundo subaquático cheio de mistérios e perigos, enquanto busca pelo tesouro que pode mudar tudo.</p>",
    "poster"=>"{$path}Souls Dark.jpeg","banner"=>"{$path}banneSoulsDark.jpeg", "capa"=>"{$path}Souls Dark.jpeg");

    $games[6] = array("id"=>6, "nome"=>"Gustavo Game", "descricao"=>"<p>Submarine Adventure é um jogo eletrônico de plataforma desenvolvido e publicado por Rodrigo Oliveira. Lançado inicialmente para PC, Submarine Adventure permite que os jogadores assumam o papel do explorador submarino em uma jornada repleta de desafios emocionantes. Prepare-se para mergulhar em um mundo subaquático cheio de mistérios e perigos, enquanto busca pelo tesouro que pode mudar tudo.</p>",
    "poster"=>"{$path}Gustavo Game.jpeg","banner"=>"{$path}bannerGalacticAttack.jpeg", "capa"=>"{$path}Gustavo Game.jpeg");

    $games[7] = array("id"=>7, "nome"=>"Maria Game", "descricao"=>"<p>Submarine Adventure é um jogo eletrônico de plataforma desenvolvido e publicado por Rodrigo Oliveira. Lançado inicialmente para PC, Submarine Adventure permite que os jogadores assumam o papel do explorador submarino em uma jornada repleta de desafios emocionantes. Prepare-se para mergulhar em um mundo subaquático cheio de mistérios e perigos, enquanto busca pelo tesouro que pode mudar tudo.</p>",
    "poster"=>"{$path}Maria Game.jpeg","banner"=>"{$path}bannerGalacticAttack.jpeg", "capa"=>"{$path}Maria Game.jpeg");


    echo json_encode($games);