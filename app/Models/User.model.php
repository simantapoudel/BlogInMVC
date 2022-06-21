<?php

include '../database/database.php';

class User  
{  
    public function __construct() 
    {  
        $db = new Database();
    }
  
    public function register($username, $first_name, $last_name, $email, $password)
    {  
        $password = $password;  
        $checkUser = $conn->query("Select id from users where email='$email'");  
        $result = $num_rows($checkUser);  
        if ($result == 0) {  
            $register = $conn->query("Insert into users (username, first_name, last_name, email, password) 
                        values ('$username', '$first_name', '$last_name', '$email','$password')");
            return $register;  
        } else {  
            return false;  
        }  
    }

    public function login($email, $password) 
    {  
        $password = $password;  
        $check = $conn->query("Select * from users where email='$email' and password='$password'");  
        $result = $num_rows($check);  
        if ($result == 1) {  
            $_SESSION['login'] = true;  
            $_SESSION['id'] = $data['id'];  
            return true;  
        } else {  
            return false;  
        }  
    }  
}