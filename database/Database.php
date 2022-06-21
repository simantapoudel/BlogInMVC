<?php

include '../config/config.php';

class Database
{
    public function __construct()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS);
        if ($conn->connect_error) {
            die("Connection failed " . $ocnn->connect_error);
        }
        return $conn;
    }
}

// $dbObj = new Database();