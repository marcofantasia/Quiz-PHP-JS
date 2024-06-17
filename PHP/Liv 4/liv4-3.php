<?php

// soluzione livello 4-3

class Singleton
{
    private static $instance;

    private function __construct() {}

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }
}


$test1 = Singleton::getInstance();
$test2 = Singleton::getInstance();


var_dump($test1 === $test2); 
