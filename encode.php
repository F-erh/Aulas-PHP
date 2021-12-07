<?php

$cidades = [
    'SP' => [
        'Rio Claro',
        'Sao Carlos',
        'Guarulhos',
        'Sao paulo'
    ],
    'PR' => [
        'Maringa',
        'Curitiba'
    ]

];

//Imprime o JSON com cabeçalho
responseJSON($cidades);


/**
 * Imprime um JSON com cabeçalho no navegador
 *
 * @param  array $arr
 * @return void
 */
function responseJSON(array $arr){
    header('Content-Type: application/json');
    echo json_encode($arr);
}