<?php
    session_start();
    if(isset($_COOKIE['username']))
            {
                header("Location:showlogin_user.php",true,302);
            }
?><!DOCTYPE html>
<html>
    <head>
            <title>LogIn</title>
            <link rel="stylesheet" href="loginn.css">        
    </head>
    <body>
                 <?php
                     require_once("header.php");
                ?> 
        <h1>LogIn</h1>
        <form action="Login_action.php" method="POST">
            <table>
                <tr>
                   <td>
                        <label>Username:</label> 
                  </td> 
                  <td>
                     <input type="text" name="username" required>
                    </td>
                </tr>
                <tr>
                   <td>
                        <label>Password:</label> 
                  </td> 
                  <td>
                        <input type="text" name="pass">
                    </td>
                </tr>
                <tr>
                   <td>
                        <label for="remember">Remember Me:</label> 
                  </td> 
                  <td>
                        <input type="checkbox" name="remember" id="remember" >
                    </td>
                </tr>
                
            </table>
            <input type="submit" value="Log In">
        </form>
        
    </body>
                <?php
                    require_once("Footer.php");
                ?>
</html>