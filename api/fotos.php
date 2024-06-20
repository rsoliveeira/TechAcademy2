<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/modulo02/imagens/";

    $fotos[1] = array(
        array("foto"=>"{$path}bannerSubmarineAdventure.jpg"),
        array("foto"=>"{$path}Poster.jpg"),
        array("foto"=>"{$path}fallout3.jpg"),
        array("foto"=>"{$path}fallout4.jpg"),
    );

    $fotos[2] = array(
        array("foto"=>"{$path}sf1.jpg"),
        array("foto"=>"{$path}sf2.jpg"),
        array("foto"=>"{$path}sf3.jpg"),
        array("foto"=>"{$path}sf4.jpg"),
    );

    $fotos[3] = array(
        array("foto"=>"{$path}mk11.jpg"),
        array("foto"=>"{$path}mk12.jpg"),
        array("foto"=>"{$path}mk13.jpg"),
    );

    $fotos[4] = array(
        array("foto"=>"{$path}fc1.jpg"),
        array("foto"=>"{$path}fc2.jpg"),
        array("foto"=>"{$path}fc3.jpg"),
        array("foto"=>"{$path}fc4.jpg"),
    );

    $fotos[5] = array(
        array("foto"=>"{$path}tekken1.jpg"),
        array("foto"=>"{$path}tekken2.jpg"),
        array("foto"=>"{$path}tekken3.jpg"),
        array("foto"=>"{$path}tekken4.jpg"),
    );


    echo json_encode($fotos);

