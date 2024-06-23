<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=utf-8");

// Defina o caminho para a pasta do jogo
$path = "http://localhost/teste/jogos/";

$gamesEquipes[1] = array("id" => 1,"nome" => "Submarine Adventure","jogo" => "<iframe src='{$path}index.html' width='800' height='600' frameborder='0' allowfullscreen></iframe>"
);

echo json_encode($gamesEquipes);
?>
