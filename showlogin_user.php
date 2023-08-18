<?php
    session_start();
    require_once('config.inc.php');
   
    $id=$_SESSION['ID'];
     
    
    $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
    try {
        
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
        $sql = 'SELECT * FROM homepagedata WHERE ID=:id';
        $statement=$pdo->prepare($sql);
        $statement->bindValue(':id',$id,PDO::PARAM_STR);
        $User=$statement->fetch();
        $r=$statement->execute();
        $User=$statement->fetch();
       ;  
         if($User['ID']==NULL)
         {
            $_SESSION['ID']=$id;
               
            header("Location:AddUser.php?id=".$_SESSION['ID']."",true,302);

            die();
         }
    } catch (PDOException $e) {
        die('Server error');
        
    }

?><!DOCTYPE html>
<html>
    <head>
        <title><?php echo"".$User['Name']."";?></title>
        <link rel="stylesheet" href="showlogin.css">
    </head>
    <body>
    <?php
                    require_once("header.php");
                ?>
                <span id="Li" >
    <a href="#p" >Profile&nbsp;</a><a href="#o" >&nbsp;Objective&nbsp;</a><a href="#e" >&nbsp;Education&nbsp;</a><a href="#ex" >&nbsp;Experience&nbsp;</a><a href="#s" >&nbsp;Skills
    &nbsp;</a><a href="#l" >&nbsp;Language&nbsp;</a><a href="#h" >&nbsp;Hobbies&nbsp;</a><a href="#r" >&nbsp;Refrences</a><a href="#c" >&nbsp;Contact</a>
</span> 
        <h1 id="h1n" class="h"> <?php echo"".$User['Name']."";?></h1>
        <hr>
        <p>
            <h1 class="h">Age</h1><?php echo("".$User['Age']."");?>  
        </p>      
        <h1 id="p" class="h">
            Profile
        </h1>
        <p>
        <?php
               echo("".$User['Profile']."");
                ?>
        <p>
        <h1 id="e"  class="h">
            Education
        </h1>
        <table>
            <tr>
                <thead>
                    <tr>
                        <th>Degree</th>
                        <th>Marks</th>
                    </tr>
                </thead> 
                <tbody>
                <tr>
                        <td>Matric</td>
                        <td><?php echo("".$User['Matric']."");?></td>
                    </tr>
                    <tr>
                        <td>Inter</td>
                        <td><?php echo("".$User['Inter']."");?></td>
                    </tr>
                    <tr>
                        <td>Bachelor</td>
                        <td><?php echo("".$User['Bachelor']."");?></td>
                    </tr>
                    <tr>
                        <td>Master</td>
                        <td><?php echo("".$User['Master']."");?></td>
                    </tr>
                    <tr>
                        <td>PHD</td>
                        <td><?php echo("".$User['PHD']."");?></td>
                    </tr>
            </tbody>
            </table>
            <h1 id="l"  class="h">
                Language
            </h1>
            <ul>
                <li><?php echo("".$User['Language_1']."");?></li>
                <li><?php echo("".$User['Language_2']."");?></li>
                <li><?php echo("".$User['Language_3']."");?></li>
            </ul>
            <h1 id="o"  class="h">
                Objective
            </h1>
            <ul>
                <li><?php echo("".$User['Objective_1']."");?></li>
                <li><?php echo("".$User['Objective_2']."");?></li>
                <li><?php echo("".$User['Objective_3']."");?></li>
            </ul>
           
            
            <div class="flex-container ">

            <div class="flex-child magenta">
                    <h1 id="s"  class="h">
                    Skill
                    </h1>
                    <ul>
                        <li><?php echo("".$User['Skills_1']."");?></li>
                        <li><?php echo("".$User['Skills_2']."");?></li>
                        <li><?php echo("".$User['Skills_3']."");?></li>
                    </ul>
                </div>

                <div class="flex-child green">
                <h1 id="ex"  class="h">
                Experience
                </h1>
                <ul>
                    <li><?php echo("".$User['Experience_1']."");?></li>
                    <li><?php echo("".$User['Experience_2']."");?></li>
                    <li><?php echo("".$User['Experience_3']."");?></li>
                </ul>
                </div>
            </div>
            <div class="flex-container ">

                <div class="flex-child magenta">
                    <h1 id="h"  class="h">
                        Hobbies
                    </h1>
                    <ul>
                        <li><?php echo("".$User['Hobbies_1']."");?></li>
                        <li><?php echo("".$User['Hobbies_2']."");?></li>
                        <li><?php echo("".$User['Hobbies_3']."");?></li>
                    </ul>
                </div>

                <div class="flex-child green">
                        <h1 id="r"  class="h">
                            Refrence
                        </h1>
                    <ul>
                        <li><?php echo("".$User['Reference_1']."");?></li>
                        <li><?php echo("".$User['Reference_2']."");?></li>
                        <li><?php echo("".$User['Reference_3']."");?></li>
                    </ul>
                </div>

            </div>
           
            
            
            <h1 id="c"  class="h">
              Contact
            </h1>
            <p><strong>Cell No:</strong><?php echo("".$User['Phone']."");?>
            </p>
            <p><strong>Address:</strong><?php echo("".$User['Address']."");?>
            </p>
            <p><strong>Email:</strong><?php echo("".$User['Email']."");?>
            </p>
            
            
            <form action="Add_edit.php" method="POST">
            <input type="submit" value="Edit">
            </form>
            <form action="Logout.php" method="POST">
            <input type="submit" value="LogOut">
        </form>
    </body>
    <?php
                    require_once("Footer.php");
                ?>
</html>