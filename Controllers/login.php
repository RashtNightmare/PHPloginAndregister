<?php
use Illuminate\Http\Request;

require_once("../Models/User.php");
session_start();


$username=$_POST["username"];
$password=$_POST["password"];
try{
    $result=GetUser($username,$password);
    if($result==true){
    

        if (isset($_SESSION['LAST_ACTIVITY_LOGIN']) && (time() - $_SESSION['LAST_ACTIVITY_LOGIN'] > 1800)) {
            // last request was more than 30 minutes ago
            session_unset();     // unset $_SESSION variable for the run-time 
            session_destroy();   // destroy session data in storage
        }else{
            $_SESSION['LAST_ACTIVITY_LOGIN'] = time(); // update last activity time stam
            $_SESSION["success_login"]="Successfully Logged-In";
            if (isset($_SESSION["success_login"])) {
                header("localhost:../Views/users.php");
                return true;
            } else {
                $_SESSION["error_login"]="Log-In has been failed";
                header("localhost:../Views/login.php");
                return true;
            }
        }
    }
}catch(Exception $ex){
    $_SESSION["error_login"]="Log-In has been failed";
    header("localhost:../Views/login.php");
    return false;

}


?>