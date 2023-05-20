<?php
require_once "../vendor/autoload.php";
use Source\Core\Connection;

$connection = Connection::getInstance();

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto de cadastro</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
    <body>

            <div class="container d-flex justify-content-center align-items-center">
                <div class="row justify-content-center col-12">

                    <?php try{
                        require loadView();
                    }catch (Exception $e){
                        echo $e->getMessage();
                    }
                ?>

                </div>
            </div>

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/apiCaller.js"></script>
    </body>
</html>
