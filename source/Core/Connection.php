<?php
/** Classe de conexão com o DB usando o padrão singleton ***/
namespace Source\Core;

use \PDO;
use \PDOException;
class Connection
{
    /**
     * @var PDO
     */
    private static PDO $instance;

    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private function __construct()
    {
    }

    private function __clone(): void
    {
    }

    /**
     * @return PDO
     */
    public static function getInstance() : PDO
    {
        if(empty(self::$instance)){
            try{
                self::$instance = new PDO(
                    "mysql:host=". DB_HOST . ";dbname=" . DB_NAME,
                    DB_USER,
                    DB_PASS,
                    self::OPTIONS
                );
            }catch (PDOException $exception){
                die("<h1>Erro de conexão . {$exception}</h1>");
            }
        }
        return self::$instance;
    }
}