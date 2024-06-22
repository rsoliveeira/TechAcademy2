<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "http://localhost/modulo02/imagens/";

    $banners[0] = array("nome"=>"Submarine Adventure","imagem"=>"{$path}bannerSubmarineAdventure.jpeg","id_game"=>1);
    $banners[1] = array("nome"=>"GalacticAttack","imagem"=>"{$path}bannerGalacticAttack.jpeg","id_game"=>2);
    $banners[2] = array("nome"=>"Birdy","imagem"=>"{$path}bannerBirdy.jpeg","id_game"=>3);
    $banners[3] = array("nome"=>"Wildwest","imagem"=>"{$path}bannerWildwest.jpeg","id_game"=>4);
    $banners[5] = array("nome"=>"SoulsDark","imagem"=>"{$path}banneSoulsDark.jpeg","id_game"=>6);

    
    echo json_encode($banners);