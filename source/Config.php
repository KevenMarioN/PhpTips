<?php

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "datalayer",
    "username" => "kmario",
    "passwd" => "4590",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // padrão de caracteres da app
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // sempre que tiver um erro vou ter um obj pdoexception
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // todo resultado vem em obj 
        PDO::ATTR_CASE => PDO::CASE_NATURAL // conexão não faz conversão dos caracteres
    ]
]);