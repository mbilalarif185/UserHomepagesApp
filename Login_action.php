<body><?php
    session_start();
    require_once('config.inc.php');
   
    $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
    try
    {
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $username="";
        $pass="";
        if(isset($_POST))
        {
            if(isset($_POST['username']))
            {
                $username=$_POST['username'];
                
            }
            else
            {
                header("Location:add_user.php",true,302);
            }
                if(isset($_POST['pass']))
                {
                    $pass=$_POST['pass'];
                  
                }
                else
                {
                    header("Location:add_user.php",true,302);
                }
            if(isset($_POST['remember']))
                $remember="on";
        }
        if(isset($remember))
        {
            if($remember=="on")
                {
                    $expiry=time()+60*5*5;
                    setcookie('username',$username,$expiry);
                }
        }
        $sql="SELECT * FROM login WHERE username=:username AND password=:pass";
        $statement=$pdo->prepare($sql);
        $statement->bindValue(':username',$username,PDO::PARAM_STR);
        $statement->bindValue(':pass',$pass,PDO::PARAM_STR);
        $statement->execute();
        if($val=$statement->fetch()){
            if($val['Password']!=$pass && $val['Username'] != $username)
            {
            
            echo"Invalid Login  Credentials";
            }
            else
            {
                $_SESSION['ID'] = $val['ID'];
                
                header("Location:showlogin_user.php?id=".$val['ID']."",true,302);
            }
    
        }
        else
        {
            echo"Invalid Login  Credentials";
        }

    ?><!DOCTYPE HTML>
    <html>
        <title>User</title>
    </html>
        <body>
            <?php
            }catch(PDOException $e)
            {
                die('Server error');
            }
            ?>
            
        </body>
        