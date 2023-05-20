<?php
require "../../vendor/autoload.php";

$cep = filter_input(INPUT_POST,'zipCode',FILTER_SANITIZE_STRING);
$apiUrl = "http://cep.republicavirtual.com.br/web_cep.php?cep={$cep}&formato=json";

$response = callApi($apiUrl);

if($response->resultado == '1'){
    echo json_encode($response);
}else{
    echo "invalid";
}

