<?php

include '../database/database.php';

class User  
{  
    public function __construct() 
    {  
        $db = new Database();  
    }
  
    public function register($first_name, $last_name, $email, $password)
     {  
        $pass = $password;  
        $checkUser = $conn->query("Select id from users where email='$email'");  
        $result = $num_rows($checkUser);  
        if ($result == 0) {  
            $register = mysql_query("Insert into users (trn_date, name, username, email, password) values ('$trn_date','$name','$username','$email','$pass')") or die(mysql_error());  
            return $register;  
        } else {  
            return false;  
        }  
    }
}