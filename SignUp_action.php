<?php
    session_start();
    require_once('config.inc.php');
    $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
    $id=0;
    try
    {
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $username="";
        $pass="";
        if(isset($_POST))
        {
            if(isset($_POST['username']))
            $username=$_POST['username'];
            if(isset($_POST['pass']))
            $pass=$_POST['pass'];
    
        }
        else
     {
        die();
    }
        $ssql="SELECT * FROM login WHERE Username=:username AND Password=:pass";
        $statement=$pdo->prepare($ssql);
        $statement->bindValue(':username',$username,PDO::PARAM_STR);
        $statement->bindValue(':pass',$pass,PDO::PARAM_STR);
        $statement->execute();
        if($val=$statement->fetch())
        {
            if($username==$val['Username'])
            {
                header("Location:LogIn.php",true,302);
                die();
            }
        }
        else
        {
                $sql="INSERT INTO login (Username,Password) VALUES('".$username."','".$pass."')";
                $pdo->exec($sql); 
                $ssql="SELECT * FROM login WHERE Username=:username AND Password=:pass";
                $statement=$pdo->prepare($ssql);
                $statement->bindValue(':username',$username,PDO::PARAM_STR);
                $statement->bindValue(':pass',$pass,PDO::PARAM_STR);
                $statement->execute();
                $val=$statement->fetch();
                $_SESSION['ID']=$val['ID'];
                header("Location:AddUser.php?id=".$_SESSION['ID']."",true,302);
        }
    ?><!DOCTYPE HTML>
    <html>
        <title>Sign-Up</title>
    </html>
            <?php
            
            }catch(PDOException $e)
            {
                die('Server error');
            }
            ?>
        </body>