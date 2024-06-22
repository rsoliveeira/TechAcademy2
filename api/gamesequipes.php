<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=utf-8");

// Defina o caminho para a pasta do jogo
$path = "http://localhost/modulo02/jogo/";

// Defina os dados dos jogos
$gamesEquipes = array();
$gamesEquipes[1] = array(
    "id" => 1,
    "nome" => "Submarine Adventure",
    "jogo" => "<iframe src='{$path}index.html' width='800' height='600' frameborder='0' allowfullscreen></iframe>"
);

// Converta o array em JSON e imprima
echo json_encode($gamesEquipes);
?>
