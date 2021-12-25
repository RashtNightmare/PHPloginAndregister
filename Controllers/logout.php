<?php 
use Illuminate\Http\Request;

     session_start();

       if(isset($_SESSION["success_register"])){
        //    echo "<div>".$_SESSION["success_register"]."</div>";
           unset($_SESSION["success_register"]);
           header('location: ../Views/index.php');
       }

       ?>