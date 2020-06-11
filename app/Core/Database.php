<?php

namespace App\Core;

use Medoo\Medoo;

class Database
{
    public static function database(): Medoo
    {
        $databaseConfig = require __DIR__ . '/Config/data.php';
        return new Medoo($databaseConfig);
    }
}