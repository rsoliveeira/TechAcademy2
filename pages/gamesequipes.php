<?php
// Verifique se o ID do jogo foi passado na URL
if (!isset($_GET['id'])) {
    echo "ID do jogo não fornecido.";
    exit;
}

// Obtenha o ID do jogo da URL
$id = (int)$_GET['id'];

// URL da API para obter os dados dos jogos
$apiGamesEquipes = "http://localhost/modulo02/api/gamesequipes.php";

// Obtém o conteúdo JSON da URL
$jsonGamesEquipes = file_get_contents($apiGamesEquipes);

// Decodifica o JSON em um array de objetos PHP
$dadosGamesEquipes = json_decode($jsonGamesEquipes, true);

// Verifique se o jogo com o ID fornecido existe
if (!isset($dadosGamesEquipes[$id])) {
    echo "Jogo não encontrado.";
    exit;
}

// Obtenha os dados do jogo
$jogo = $dadosGamesEquipes[$id];
?>