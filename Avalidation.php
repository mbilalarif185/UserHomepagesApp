<?php
     $minDigits = 9;
     $maxDigits = 14;
    $i=1;
        if(isset($_GET['value']))
        {
            $val=$_GET['value'];
           
            if(isset($_GET['type']))
            {
                
                $type=$_GET['type'];
              
                
                if($type=="nname")
                {

                    $name_pattern='/^[a-zA-Z\s]+$/';
                    if(!preg_match($name_pattern,$val))
                        {
                            echo "Kindly enter in correct format";
                        }
                       
                    
                 }
                 else if($type=="age")
                 {
                    
                     if($val<18||$val>70)
                     {
                         echo "Kindly Enter age between 18 to 70";
                     }
                    
                }
                 else if($type=="matric")
                 {
                    
                     if($val<0||$val>1100)
                     {
                         echo "Kindly Enter Marks between 0 to 1100";
                     }
                     
                 }
                 else if($type=="inter")
                 {
                    
                     if($val<0||$val>1100)
                     {
                         echo "Kindly Enter Marks between 0 to 1100";
                     }
                     
                 }
                 else if($type=="bachelor")
                 {
                    
                     if($val<0||$val>1100)
                     {
                         echo "Kindly Enter Marks between 0 to 1100";
                     }
                     
                 }
                 else if($type=="master")
                 {
                    
                     if($val<0||$val>1100)
                     {
                         echo "Kindly Enter Marks between 0 to 1100";
                     }
                     
                 }
                 else if($type=="phd")
                 {
                    
                     if($val<0||$val>1100)
                     {
                         echo "Kindly Enter Marks between 0 to 1100";
                     }
                     
                 }
                else if($type=="language_i")
                 {
 
                     $languagei_pattern='/^[a-zA-Z\s]+$/';
                     if(!preg_match($languagei_pattern,$val))
                         {
                             echo "Kindly Enter in Text Format";
                         }
                        
                     
                  }
                else if($type=="language_ii")
                 {
 
                     $languageii_pattern='/^[a-zA-Z\s]+$/';
                     if(!preg_match($languageii_pattern,$val))
                         {
                             echo "Kindly Enter in Text Format";
                         }
                        
                     
                  }
                  else if($type=="language_iii")
                 {
 
                     $languageiii_pattern='/^[a-zA-Z\s]+$/';
                     if(!preg_match($languageiii_pattern,$val))
                         {
                             echo "Kindly Enter in Text Format";
                         }
                        
                     
                  }
               else if($type=="cellno")
                {
                    $mobile_pattern='/^[0-9]{'.$minDigits.','.$maxDigits.'}$/';
                    if(!preg_match($mobile_pattern,$val))
                    {
                        echo "Kindly enter correct Mobile Number Format";
                    }
                   
                 }
                else if($type=="email")
                {
                    $email_pattern="/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/";
                    if(!preg_match($email_pattern,$val))
                    {
                        echo "Kindly Enter correct Email Pattern";
                    }
                    
                }
                
               
            }
        }
       
    
?>