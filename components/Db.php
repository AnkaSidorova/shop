<?php

class Db
{
    public static function getConnection()
    {
        // Получаем параметры подключения из файла
        $params = include ROOT. '/config/db_params.php';        

        // Устанавливаем соединение 
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        
        // Задаем кодировку
        $db->exec('set names utf8');
        return $db;
    }
}
