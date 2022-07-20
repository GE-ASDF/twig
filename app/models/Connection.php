<?php

namespace app\models;

use app\classes\Bind;
use PDO;
use PDOException;

abstract class Connection{

    protected $servidor = "localhost";
    protected $banco = "cronograma_estudos";
    protected $usuario = "root";
    protected $senha = "";

    public static function connect(){
        $config = (object) Bind::get('config')->database;
        try{
            $pdo = new PDO("mysql:host={$config->host};dbname={$config->dbname};charset={$config->charset}",$config->usuario, $config->senha, $config->options);
            return $pdo;
        }catch(PDOException $e){
            var_dump($e->getMessage());
        }
    }
}