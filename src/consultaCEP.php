<?php

header('Content-Type: application/json');

$data = [];
$cep = strval($_POST['cep']);
$url = sprintf('https://viacep.com.br/ws/%s/json/', $cep);

$response = file_get_contents($url);

echo $response;