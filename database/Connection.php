<?php

namespace Blog\Database;

use mysqli;

class Connection 
{
    protected function connect(): object
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        return $conn;
    }
}