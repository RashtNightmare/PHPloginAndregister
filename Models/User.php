<?php

function CreateUser($username,$password){
    $connection= new PDO("mysql:host=localhost; dbname=php_auth; port=3307; charset=utf8;","root","");
    $connection->query("INSERT INTO users(user_name,password) VALUES ('$username','$password')");
    return true;
}
function GetUser($username,$password){
    $connection= new PDO("mysql:host=localhost; dbname=php_auth; port=3307; charset=utf8;","root","");
    $user=$connection->query("SELECT * FROM users WHERE user_name = '$username' AND password = '$password'");
    if ($user->fetchColumn() > 0){
        //--------------------------------------------
        if(password_verify($password,$user->fetchColumn()[0]['password'])){
             return true;
        }else{ return false;}
        return true;
    }else{ return false;}
      
}


?>