<?php


namespace App\core;


use mysqli;

class DB
{
    private static $connection = null;

    public static function getConnection()
    {
        if(!self::$connection){
            self::$connection = new mysqli('localhost', 'homestead', 'secret', 'test_blog');
            self::$connection->set_charset('UTF-8');
        }
        return self::$connection;
    }

}

