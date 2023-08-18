<?php
    session_start();
    require_once('config.inc.php');
    
    $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
    try {
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
?><!DOCTYPE html>
<html>
    <head>
            <title>Sign Up</title>
            <link rel="stylesheet" href="loginn.css">        
    </head>
    <body>
            <?php
                require_once("header.php");
                ?>
        <h1>Sign Up</h1>
        <form action="SignUp_action.php" method="POST">
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
              
                
            </table>
            <input type="submit" value="Sign Up">
        </form>
        <?php
    } catch (PDOException $e) {
        die('Server error');
        
    }
?>
    </body>
    <?php
                    require_once("Footer.php");
                ?>
</html>