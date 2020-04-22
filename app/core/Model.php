<?php
namespace app\core;

abstract class Model{
    protected $database;
    
    public function __construct() {
        $this->database = new \PDO("mysql:dbname=".BANCO.";host=".SERVIDOR,USUARIO,SENHA);
    }
}