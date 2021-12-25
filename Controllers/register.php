<?php
use Illuminate\Http\Request;

require_once("../Models/User.php");
session_start();


$username=$_POST["username"];
$password=password_hash($_POST["password"],PASSWORD_DEFAULT);
try{
    $result=CreateUser($username,$password);
    if($result==true){
       if (isset($_SESSION['LAST_ACTIVITY_REGISTER']) && (time() - $_SESSION['LAST_ACTIVITY_REGISTER'] > 1800)) {
            // last request was more than 30 minutes ago
            session_unset();     // unset $_SESSION variable for the run-time 
            session_destroy();   // destroy session data in storage
        }else{
            $_SESSION['LAST_ACTIVITY_REGISTER'] = time(); // update last activity time stam
            $_SESSION["success_register"]="Successfully registered";
            $_SESSION["success_register"]->gc_maxlifetime(1800);
            return true;
            header("localhost:../Views/login.php");
        }
    }
    // return "<div>YEAP</div>";
}catch(Exception $ex){
    $_SESSION["error_register"]="Registration has been failed";
    return false;
}


?>