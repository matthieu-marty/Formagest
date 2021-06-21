<?php

abstract class Model
{
    private static $pdo;

    private static function setBDD()
    {
        self::$pdo = new PDO("mysql:host=localhost;dbname=formagest;charset=utf8", "root", "");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    protected function getBDD()
    {
        if (self::$pdo === null) {
            self::setBDD();
        }
        return self::$pdo;
    }
}
