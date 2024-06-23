<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/teste/imagens/";

    $fotos[1] = array(
        array("foto"=>"{$path}SubmarineAdventure1.jpg"),
        array("foto"=>"{$path}SubmarineAdventure2.jpg"),
        array("foto"=>"{$path}SubmarineAdventure3.jpg"),
        array("foto"=>"{$path}SubmarineAdventure4.jpg"),
    );

    $fotos[2] = array(
        array("foto"=>"{$path}GalacticAttack1.png"),
        array("foto"=>"{$path}GalacticAttack2.png"),
        array("foto"=>"{$path}GalacticAttack3.png"),
    );

    $fotos[3] = array(
        array("foto"=>"{$path}Birdy1.png"),
        array("foto"=>"{$path}Birdy2.png"),
        array("foto"=>"{$path}Birdy3.png"),
    );

    $fotos[4] = array(
        array("foto"=>"{$path}Wildwest1.jpeg"),
        array("foto"=>"{$path}Wildwest2.jpeg"),
        array("foto"=>"{$path}Wildwest3.jpeg"),
        array("foto"=>"{$path}Wildwest4.jpeg"),
    );

    $fotos[5] = array(
        array("foto"=>"{$path}SoulsDark1.png"),
        array("foto"=>"{$path}SoulsDark2.png"),
    );

    $fotos[6] = array(
        array("foto"=>"{$path}TimeSprint1.jpg"),
        array("foto"=>"{$path}TimeSprint2.jpg"),
    );

    $fotos[7] = array(
        array("foto"=>"{$path}EscapeFromSpace1.jpg"),
        array("foto"=>"{$path}EscapeFromSpace2.jpg"),
    );


    echo json_encode($fotos);

