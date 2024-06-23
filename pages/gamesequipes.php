<?php
$url = "http://localhost/modulo02/api/gamesquipes.php";

$dadosJson = file_get_contents($url);

$dadosEquipe = json_decode($dadosJson, true);

?>