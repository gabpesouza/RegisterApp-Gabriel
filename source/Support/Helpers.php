<?php

function loadView(){
    $method = $_SERVER['REQUEST_METHOD'];
    $view = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);

    $view = (!$view) ? 'pages/register.php' : "pages/{$view}.php";

    if(!file_exists($view) || !is_file($view)){
        throw new Exception("404: A página que voce buscou ainda não existe =(");
    }

    return $view;


}

function callApi(string $apiUrl) : object{

    $client = curl_init($apiUrl);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);
    $data = json_decode($response);
    curl_close($client);

    return $data;

}