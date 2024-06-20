<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/modulo02/imagens/";

    $equipe[1] = array("nome"=>"Rodrigo Oliveira","cargo"=>"Desenvolvedor do Game Submarine Adventure","foto"=>"{$path}Rodrigo.jpeg");
    $equipe[2] = array("nome"=>"Milena","cargo"=>"Desenvolvedora do Game Galactic Attack","foto"=>"{$path}milena.jpeg");
    $equipe[3] = array("nome"=>"Paulo","cargo"=>"Desenvolvedor do Game Birdy","foto"=>"{$path}eu.JPG");
    $equipe[4] = array("nome"=>"Patrick","cargo"=>"Desenvolvedor do WildWest","foto"=>"{$path}Patrick.jpeg");
    $equipe[5] = array("nome"=>"Maria","cargo"=>"Desenvolvedor do WildWest","foto"=>"{$path}Maria.jpeg");
    $equipe[6] = array("nome"=>"Gustavo","cargo"=>"Desenvolvedor do WildWest","foto"=>"{$path}Gustavo.jpeg");
    $equipe[7] = array("nome"=>"Felipe","cargo"=>"Desenvolvedor do Souls in the Dark","foto"=>"{$path}Felipe.jpeg");

    echo json_encode($equipe);
 ?>