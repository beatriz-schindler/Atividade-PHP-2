<?php

if (isset($_GET['dia']) && isset($_GET['mes']) && isset($_GET['ano'])) {
    $dia = $_GET["dia"];
    $mes = $_GET["mes"];
    $ano = $_GET["ano"];

    function soma($mes_parametro){
        $soma_mes = 0;
        for ($mes_parametro; $mes_parametro >=1 ; $mes_parametro--) { 
            $soma_mes = $soma_mes + $mes_parametro; 
        }

        return $soma_mes;
    }

    function safadao($dia_parametro, $somatorio_parametro, $ano_parametro){
        $safadeza = soma($somatorio_parametro) + (($ano_parametro/100) * (50-$dia_parametro));
        $anjo = 100 - $safadeza;
        $resultados = [$safadeza, $anjo];
        return $resultados;
    }

    $resultados_finais = safadao($dia, $mes, $ano);

    require 'safadometro.php';
    require 'safadometro_dados.php';

}else{
    require 'safadometro.php';
}
