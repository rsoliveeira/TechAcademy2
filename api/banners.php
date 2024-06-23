<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$path = "http://localhost/teste/imagens/";

$banners[0] = array("nome" => "Submarine Adventure", "imagem" => "{$path}bannerSubmarineAdventure.jpeg", "id_game" => 1);
$banners[1] = array("nome" => "GalacticAttack", "imagem" => "{$path}bannerGalacticAttack.jpeg", "id_game" => 2);
$banners[2] = array("nome" => "Birdy", "imagem" => "{$path}bannerBirdy.jpeg", "id_game" => 3);

echo json_encode($banners);
