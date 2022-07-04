<?php

namespace Blog\Database;

use mysqli;

class Database 
{
    protected function connect()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        return $conn;
    }
}