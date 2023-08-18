<?php
    require_once('config.inc.php');
    $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
    try {
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
?><!DOCTYPE html>
<html>
    <head>
            <title>Users</title>
            <?php
                  require_once("header.php");
            ?>
            <link rel="stylesheet" href="Userprofile.css">
    </head>
    <body>
        <h1>Welcome!</h1>
        <p>User's List</p>
        <ul>
    <?php
            $sql = 'SELECT * FROM homepagedata';
            $books = $pdo->query($sql);
            while ($book = $books->fetch())
            {
                echo "<li><i><a href='Show_User.php?ID=".$book['ID']."'>".$book['Name']."</a>";    
            }

            } catch (PDOException $e) {
            die('Server error');
        
             }
    ?>
        </ul>
    </body>
    <?php
                    require_once("Footer.php");
                ?>
</html>