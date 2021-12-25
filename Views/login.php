   <?php 
     session_start();

       if(isset($_SESSION["success_register"])){
           echo "<div>".$_SESSION["success_register"]."</div>";
           unset($_SESSION["success_register"]);
       }
       if(isset($_SESSION["error_login"])){
        echo "<div>".$_SESSION["error_login"]."</div>";
        unset($_SESSION["success_login"]);
    }
       if(isset($_SESSION["errormsg"])){
        echo "<div>".$_SESSION["errormsg"]."</div>";
        unset($_SESSION["errormsg"]);
    }
    
     ?>
     <html>

   <header>  <title>Log-In</p> </title> 
      <style>
        .btn{
           background-color:light-blue;
           border-radius: 10px;
           line-height: 10px;
           margin: 10px;
           padding:10px;
           min-width: 10px;
        }

      </style>
   </header>
  
 <body> 
 <!-- method="post" -->
         <form action="../Controllers/login.php" method="post">
          <p> Password    
          <input class="btn" type="text" name="password"></input> </p>
          <p> User Name
          <input class="btn" type="text" name="username"> </input></p>
             <button class="btn" type="submit"> Login </input>
         </form>
      </body>
</html>