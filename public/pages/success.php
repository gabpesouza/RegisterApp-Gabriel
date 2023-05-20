<?php

use Source\Core\Connection;

$connection = Connection::getInstance();

$data = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

$validateEmail = filter_var($data['email'],FILTER_VALIDATE_EMAIL);

if(!$validateEmail){
    $msg = "Por favor digite um email válido!";
    header("Location: ?page=register&msg={$msg}&class=danger");
    return;
}


try {
    $connection->beginTransaction();

    $userStatement = $connection->prepare("INSERT INTO tb_usuarios (nome,email) VALUES (:nome,:email)");
    $userStatement->execute(["nome" => "{$data['nome']}", "email" => "{$data['email']}"]);
    $userId = $connection->lastInsertId();

    $adressStatement = $connection->prepare("INSERT INTO tb_enderecos (cep,estado,cidade,bairro,tipo_logradouro,logradouro)
    VALUES (:cep,:estado,:cidade,:bairro,:tipo_logradouro,:logradouro)");
    $adressStatement->execute(["cep" => "{$data['cep']}","estado" => "{$data['estado']}", "cidade" => "{$data['cidade']}",
        "bairro" => "{$data['bairro']}", "tipo_logradouro" => "{$data['tipo_logradouro']}",
        "logradouro" => "{$data['logradouro']}"]);
    $adressId = $connection->lastInsertId();

    $adressUserInsert = $connection->exec("INSERT INTO tb_usuarios_enderecos (id_endereco,id_usuario)
    VALUES ({$adressId},{$userId})");

    $connection->commit();
}catch(Exception $exception){
    $msg = "Erro ao cadastrar! {$exception->getMessage()}";
    header("Location: ?page=register&msg={$msg}&class=danger");
}
    $msg = "Cadastro realizado com sucesso!";
    header("Location: ?page=register&msg={$msg}&class=success");