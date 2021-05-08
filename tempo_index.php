<?php

const ID = "Yi1jW2KUa3TmRRCEisMZJ";
const SECRET = "s2NcpUCK9VuoYi93UbQUnvgI4zjLLucpeqj8rdYE";

    const BASE_URL = "https://api.aerisapi.com/conditions/";

    $cidade = " ";
    if(isset($_GET['campo_cidade'])){
        $cidade = $_GET['campo_cidade'];

        $cidade = urlencode($cidade);

        $url = BASE_URL . "{$cidade},br?client_id=" . ID . "&client_secret=" . SECRET;

        $json  = file_get_contents($url);
        $dados = json_decode($json, true);

        $nome = $dados['response'][0]['place']['name'];
        $temperatura = $dados['response'][0]['periods'][0]['tempC'];
        $sensacao = $dados['response'][0]['periods'][0]['feelslikeC'];
        $umidade = $dados['response'][0]['periods'][0]['humidity'];
        $velocidade = $dados['response'][0]['periods'][0]['windSpeedKPH'];
        // include "tempo_dados.php";
        include "tempo.php";
        include "tempo_dados.php";
    }else{
        include "tempo.php";
    }