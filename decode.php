<?php

$cep = $_GET['cep'] ?? '01001000';

$endpoint  = 'https://viacep.com.br/ws/' . $cep . '/json/unicode/';


$json = file_get_contents($endpoint);

$cidade = json_decode($json, true);

echo '<pre>';
print_r($cidade['localidade']);
echo '</pre>';

/**
 * Imprime um JSON com cabeçalho no navegador
 *
 * @param  array $arr
 * @return void
 */
function responseJSON(array $arr)
{
    header('Content-Type: application/json');
    echo json_encode($arr);
}