<?php
    session_start();
    require_once('config.inc.php');
    $id=$_SESSION['ID'];
    
    $conn_str = DB_SYS.':host='.DB_HOST.';dbname='.DB_NAME;
    try
    { 
            $pdo = new PDO($conn_str,DB_USER,DB_PASS);
            $sql = 'SELECT * FROM homepagedata WHERE ID=:id';
            $statement=$pdo->prepare($sql);
            $statement->bindValue(':id',$id,PDO::PARAM_STR);
            $User=$statement->fetch();
            $r=$statement->execute();
            $User=$statement->fetch();
             if($User['ID']==NULL)
             {
                $_SESSION['ID']=$id;
                   
                header("Location:AddUser.php?id=".$_SESSION['ID']."",true,302);
    
                die();
             }
             
             
        $pdo = new PDO($conn_str,DB_USER,DB_PASS);
       
        // $name="";
        // $age=0;
        // $profile="";
        // $matric=0;
        // $inter=0;
        // $bachelor=0;
        // $master=0;
        // $phd=0;
        // $language_i="";
        // $language_ii="";
        // $language_iii="";
        // $objective_i="";
        // $objective_ii="";
        // $objective_iii="";
        // $experience_i="";
        // $experience_ii="";
        // $experience_iii="";
        // $skills_i="";
        // $skills_ii="";
        // $skills_iii="";
        // $hobbies_i="";
        // $hobbies_ii="";
        // $hobbies_iii="";
        // $reference_i="";
        // $reference_ii="";
        // $reference_iii="";
        // $address="";
        // $email="";
        // $phone="";
        if(isset($_POST))
        {
            if(isset($_POST['nname']))
                {
                    
                    $name=$_POST['nname'];
                }
                else
                {
                    
                    $name=$User['Name'];
                   
                }
                if(isset($_POST['age']))
                {
                    $age=$_POST['age'];
                }
                else
                {
                    $age=$User['Age'];
                }
                if(isset($_POST['matric']))
                {
                    $matric=$_POST['matric'];
                }
                else
                {
                    $matric=$User['Matric'];
                }
             if(isset($_POST['inter']))
                {
                    $inter=$_POST['inter'];
                }
                 else
                {
                    $inter=$User['Inter'];
                }
            if(isset($_POST['bachelor']))
                {
                    $bachelor=$_POST['bachelor'];
                }
                 else
                {
                    $bachelor=$User['Bachelor'];
                }            
            if(isset($_POST['master']))
                {
                    $master=$_POST['master'];
                }
                 else
                {
                    $master=$User['Master'];
                }              
            if(isset($_POST['phd']))
                {
                    $phd=$_POST['phd'];
                }
                else
                {
                    $phd=$User['PHD'];
                }
                
            if(isset($_POST['profile']))
                {
                    $profile=$_POST['profile'];
                }
                else
                {
                    $profile=$User['Profile'];
                }
            
                if(isset($_POST['language_i']))
                {
                    $language_i=$_POST['language_i'];
                }
                else
                {
                    $language_i=$User['Language_1'];
                }
            if(isset($_POST['language_ii']))
                {
                    $language_ii=$_POST['language_ii'];
                }
                else
                {
                    $language_ii=$User['Language_2'];
                }
            if(isset($_POST['language_iii']))
                {
                    $language_iii=$_POST['language_iii'];
                }
                else
                {
                    $language_iii=$User['Language_3'];
                }  
              if(isset($_POST['objective_i']))
                {
                    $objective_i=$_POST['objective_i'];
                }
                else
                {
                    $objective_i=$User['Objective_1'];
                }
            if(isset($_POST['objective_ii']))
                {
                    $objective_ii=$_POST['objective_ii'];
                }
                else
                {
                    $objective_ii=$User['Objective_2'];
                }
            if(isset($_POST['objective_iii']))
                {
                    $objective_iii=$_POST['objective_iii'];
                }
                else
                {
                    $objective_iii=$User['Objective_3'];
                }     
                if(isset($_POST['experience_i']))
                {
                    $experience_i=$_POST['experience_i'];
                }
                else
                {
                    $experience_i=$User['Experience_1'];
                }
            if(isset($_POST['experience_ii']))
                {
                    $experience_ii=$_POST['experience_ii'];
                }
                 else
                {
                    $experience_ii=$User['Experience_2'];
                }
            if(isset($_POST['experience_iii']))
                {
                    $experience_iii=$_POST['experience_iii'];
                }
                else
                {
                    $experience_iii=$User['Experience_3'];
                }                      
                if(isset($_POST['skills_i']))
                {
                    $skills_i=$_POST['skills_i'];
                }
                else
                {
                    $skills_i=$User['Skills_1'];
                }
            if(isset($_POST['skills_ii']))
                {
                    $skills_ii=$_POST['skills_ii'];
                }
                else
                {
                    $skills_ii=$User['Skills_2'];;
                }
            if(isset($_POST['skills_iii']))
                {
                    $skills_iii=$_POST['skills_iii'];
                }
                else
                {
                    $skills_iii=$User['Skills_3'];
                } 

                if(isset($_POST['hobbies_i']))
                {
                    $hobbies_i=$_POST['hobbies_i'];
                }
                else
                {
                    $hobbies_i=$User['Hobbies_1'];
                }
            if(isset($_POST['hobbies_ii']))
                {
                    $hobbies_ii=$_POST['hobbies_ii'];
                }
                else
                {
                    $hobbies_ii=$User['Hobbies_2'];
                }
            if(isset($_POST['hobbies_iii']))
                {
                    $hobbies_iii=$_POST['hobbies_iii'];
                }
                else
                {
                    $hobbies_iii=$User['Hobbies_3'];
                } 
                if(isset($_POST['reference_i']))
                {
                    $reference_i=$_POST['reference_i'];
                }
                else
                {
                    $reference_i=$User['Reference_1'];
                }
            if(isset($_POST['reference_ii']))
                {
                    $reference_ii=$_POST['reference_ii'];
                }
                else
                {
                    $reference_ii=$User['Reference_2'];
                }
            if(isset($_POST['reference_iii']))
                {
                    $reference_iii=$_POST['reference_iii'];
                }
                else
                {
                    $reference_iii=$User['Reference_3'];
                }  
             if(isset($_POST['cellno']))
                {
                    $phone=$_POST['cellno'];
                }
                else
                {
                    $phone=$User['Phone'];
                }             
            if(isset($_POST['address']))
                {
                    $address=$_POST['address'];
                }
            else
                    {
                    $address=$User['Address'];
                    
                } 
            if(isset($_POST['email']))
                {
                    $email=$_POST['email'];
                }
            else
                {
                    $email=$User['Email'];
                    
                }
                
        }
        $sql="UPDATE homepagedata SET Name='".$name ."', Age='".$age."' , Matric='".$matric."',Inter='".$inter."',
        Bachelor='".$bachelor ."', Master='".$master."', PHD='".$phd."', Profile='".$profile."',
        Language_1='".$language_i ."',  Language_2='".$language_ii."', Language_3='".$language_iii."',
        Objective_1='".$objective_i."',Objective_2='".$objective_ii."', Objective_3='".$objective_iii."',
        Experience_1='".$experience_i."',Experience_2='".$experience_ii."',Experience_3='".$experience_iii."',
        Skills_1='".$skills_i."', Skills_2='".$skills_ii."', Skills_3='".$skills_iii."',
        Hobbies_1='".$hobbies_i."',Hobbies_2='".$hobbies_ii."', Hobbies_3='".$hobbies_iii."',
        Reference_1='".$reference_i."', Reference_2='".$reference_ii."', Reference_3='".$reference_iii."',
        Address='".$address."', Email='".$email."', Phone='".$phone."' 
        WHERE id='".$id."' ";
        $pdo->exec($sql);
       
        header("Location:showlogin_user.php?id=".$_SESSION['ID']."",true,302);
        die();
    
            }catch(PDOException $e)
            {
                die('Server error');
            }
            ?>
        