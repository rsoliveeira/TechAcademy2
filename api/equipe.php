<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/teste/imagens/";

    $equipe[1] = array("nome"=>"Rodrigo Oliveira","cargo"=>"Desenvolvedor do Game Submarine Adventure","foto"=>"{$path}Rodrigo.jpeg");
    $equipe[2] = array("nome"=>"Milena Oliveira","cargo"=>"Desenvolvedora do Game Galactic Attack","foto"=>"{$path}milena.jpeg");
    $equipe[3] = array("nome"=>"Paulo Eduardo","cargo"=>"Desenvolvedor do Game Birdy","foto"=>"{$path}eu.JPG");
    $equipe[4] = array("nome"=>"Patrick Ricardo","cargo"=>"Desenvolvedor do WildWest","foto"=>"{$path}Patrick.jpeg");
    $equipe[5] = array("nome"=>"Felipe Alves","cargo"=>"Desenvolvedor do Souls in the Dark","foto"=>"{$path}Felipe.jpeg");
    $equipe[6] = array("nome"=>"Gustavo Henrique","cargo"=>"Desenvolvedor do Time Sprint","foto"=>"{$path}Gustavo.jpg");
    $equipe[7] = array("nome"=>"Maria Eduarda","cargo"=>"Desenvolvedora do Escape From Space","foto"=>"{$path}Maria.jpg");
    

    echo json_encode($equipe);
 ?>