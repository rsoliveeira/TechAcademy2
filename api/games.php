<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/modulo02/imagens/";

    $games[1] = array("id"=>1, "nome"=>"Submarine Adventure", "descricao"=>"<p>Submarine Adventure é um jogo eletrônico de plataforma desenvolvido e publicado por Rodrigo Oliveira. Lançado inicialmente para PC, Submarine Adventure permite que os jogadores assumam o papel do explorador submarino em uma jornada repleta de desafios emocionantes. Prepare-se para mergulhar em um mundo subaquático cheio de mistérios e perigos, enquanto busca pelo tesouro que pode mudar tudo.</p>
    <p>FICHA TÉCNICA</p> <p>Engine: Construct 3</p> <p>Plataforma: PC </p> <p>Mecânica: Plataforma</p> <p>Dispositivos de Entrada: Teclado</p>" ,
    "poster"=>"{$path}Poster.png","banner"=>"{$path}banner0001.png", "capa"=>"{$path}Poster.png");

    $games[2] = array("id"=>2, "nome"=>"Galactic Attack", "descricao"=>"<p>Galactic Attack é um jogo eletrônico de ação espacial desenvolvido e publicado por Milene Oliveira. Lançado inicialmente para PC, Galactic Attack permite que os jogadores assumam o papel de um piloto de naves espaciais em uma missão para salvar a galáxia. Prepare-se para uma aventura interestelar cheia de batalhas épicas contra inimigos alienígenas, enquanto defende a humanidade e descobre os segredos do universo.
    </p> <p>FICHA TÉCNICA</p> <p>Engine: Construct 3</p> <p>Plataforma: PC </p> <p>Mecânica: Ação Espacial </p> <p>Dispositivos de Entrada: Teclado</p>",
    "poster"=>"{$path}Galactic Attack.jpeg","banner"=>"{$path}bannerGalacticAttack.jpeg", "capa"=>"{$path}Galactic Attack.jpeg");

    $games[3] = array("id"=>3, "nome"=>"Birdy", "descricao"=>"<p>Birdy é um jogo eletrônico de plataforma desenvolvido e publicado por Paulo Eduardo. Lançado inicialmente para PC, Birdy permite que os jogadores assumam o controle de um pássaro aventureiro em uma jornada repleta de desafios emocionantes. Prepare-se para voar por paisagens deslumbrantes, superar obstáculos e descobrir segredos escondidos, enquanto busca por uma nova casa para sua família de pássaros.</p>
    <p>FICHA TÉCNICA</p> <p>Engine: Construct 3</p> <p>Plataforma: PC </p> <p>Mecânica: Plataforma</p> <p>Dispositivos de Entrada: Teclado</p>",
    "poster"=>"{$path}Birdy.jpeg","banner"=>"{$path}bannerBirdy.jpeg", "capa"=>"{$path}Birdy.jpeg");

    $games[4] = array("id"=>4, "nome"=>"Wildwest", "descricao"=>"<p>WildWest é um jogo eletrônico de ação e aventura desenvolvido e publicado por Patrick Ricardo. Lançado inicialmente para PC, WildWest permite que os jogadores assumam o papel de um destemido pistoleiro em uma jornada épica pelo Velho Oeste. Prepare-se para enfrentar bandidos, explorar cidades desertas e participar de duelos emocionantes, enquanto luta para se tornar uma lenda do Oeste.</p> 
    <p>FICHA TÉCNICA</p> <p>Engine: Construct 3</p> <p>Plataforma: PC </p> <p>Mecânica: Ação e Aventura </p> <p>Dispositivos de Entrada: Teclado</p>",
    "poster"=>"{$path}Wildwest.jpeg","banner"=>"{$path}bannerWildwest.jpeg", "capa"=>"{$path}Wildwest.jpeg");

    $games[5] = array("id"=>5, "nome"=>"Souls Dark", "descricao"=>"<p>Souls in the Dark é um jogo eletrônico de ação e RPG desenvolvido e publicado por Felipe Alves. Lançado inicialmente para PC, Souls in the Dark permite que os jogadores assumam o papel de um guerreiro solitário em uma jornada sombria e desafiadora. Prepare-se para enfrentar criaturas aterrorizantes, explorar masmorras perigosas e desvendar segredos antigos, enquanto luta para restaurar a luz em um mundo mergulhado na escuridão.</p>
    <p>FICHA TÉCNICA</p> <p>Engine: Construct 3</p> <p>Plataforma: PC </p> <p>Mecânica: Ação e RPG </p> <p>Dispositivos de Entrada: Teclado</p>",
    "poster"=>"{$path}Souls Dark.jpeg","banner"=>"{$path}banneSoulsDark.jpeg", "capa"=>"{$path}Souls Dark.jpeg");

    $games[6] = array("id"=>6, "nome"=>"Time Sprint", "descricao"=>"<p>Time Sprint é um jogo eletrônico de corrida contra o tempo desenvolvido e publicado por Gustavo Henrique. Lançado inicialmente para PC, Time Sprint permite que os jogadores assumam o papel de um corredor habilidoso em uma jornada cheia de adrenalina e desafios temporais. Prepare-se para correr através de diversos cenários, superar obstáculos e bater recordes, enquanto domina o controle do tempo para alcançar a linha de chegada.</p>
    <p>FICHA TÉCNICA</p> <p>Engine: Construct 3</p> <p>Plataforma: PC </p> <p>Mecânica: Corrida contra o Tempo </p> <p>Dispositivos de Entrada: Teclado</p>",
    "poster"=>"{$path}Time Sprint.jpeg","banner"=>"{$path}bannerTimeSprint.jpeg", "capa"=>"{$path}Time Sprint.jpeg");

    $games[7] = array("id"=>7,"nome"=>"Escape From Space", "descricao"=>"<p>Escape From Space é um jogo eletrônico de ação e sobrevivência desenvolvido e publicado por Maria Eduarda. Lançado inicialmente para PC, Escape From Space permite que os jogadores assumam o papel de um astronauta perdido em uma nave espacial abandonada. Prepare-se para enfrentar alienígenas hostis, resolver quebra-cabeças complexos e explorar ambientes perigosos, enquanto luta para encontrar uma maneira de escapar e voltar para casa.</p>
    <p>FICHA TÉCNICA</p> <p>Engine: Construct 3</p> <p>Plataforma: PC </p> <p>Mecânica: Ação e Sobrevivência </p> <p>Dispositivos de Entrada: Teclado</p>",
    "poster"=>"{$path}Escape From Space.jpeg","banner"=>"{$path}bannerEscapeSpace.jpeg", "capa"=>"{$path}Escape From Space.jpeg");


    echo json_encode($games);