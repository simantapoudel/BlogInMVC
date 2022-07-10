<?php

namespace Blog\App\Models;

use Blog\Database\Connection;

class User extends Connection
{   
//     public function register($username, $first_name, $last_name, $email, $password)
//     {  
//         $password = password_hash($password);  
//         $checkIfUserIsRegistered = $dbObj->query("Select id from users where email='$email'"); 
//         $result = $checkIfUserIsRegistered->num_rows;  
//         if ($result == 0) {  
//             $register = $dbObj->query("Insert into users (username, first_name, last_name, email, password) 
//                         values ('$username', '$first_name', '$last_name', '$email','$password')");
//             return $register;  
//         } else {  
//             return false;  
//         } 
//     }

//     public function login($email, $password) 
//     {  
//         $dbObj = new Database();
//         $password = $password;  
//         $checkUserInDb = $dbObj->query("Select * from users where email='$email' and password='$password'");  
//         $data = $checkUserInDb->fetch_array(MYSQLI_BOTH);
//         $result = $checkUserInDb->num_rows; 
//         if ($result == 1) {  
//             $_SESSION['login'] = true;  
//             $_SESSION['id'] = $data['id'];  
//             return true;  
//         } else {  
//             return false;
//         }  
//     }  
}

// var_dump($dbObj);