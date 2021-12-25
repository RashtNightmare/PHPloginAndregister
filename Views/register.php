<?php
     session_start();
?>
<html>

   <header>  <title>Authentication</p> </title> 
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
         <form action="../Controllers/register.php" method="post">
          <p> Password    
          <input class="btn" type="text" name="password" id="password"></input> </p>
          <p> User Name
          <input class="btn" type="text" name="username" id="username"> </input></p>
             <button class="btn" type="submit"> Register </input>
         </form>
      </body>
</html>