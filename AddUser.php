<?php
    session_start();
    $id=$_SESSION['ID'];
    
?><!DOCTYPE html>
<html>
    <head>
            <title>Add User</title>
            <link rel="stylesheet" href="Add_User.css">        
           
    </head>
</html>
    <body>
    <h1>Add User</h1>
    
    <form action="add_user_action.php" method="POST"  >
            <fieldset>
                    <legend>Personal Information</legend>
                    <table>
                        <tr>
                            <td>
                                    <label for="nname">Name:</label> 
                            </td> 
                            <td>
                                <input type="text" name="nname" id="nname" required> <div id="Nname"> </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <label for="age">Age:</label> 
                            </td> 
                            <td>
                                    <input type="number" name="age" id="age"><div id="AGE"> </div>
                            </td>
                        </tr>
                       <tr>
                            <td>
                                <label for="education" >Education</label> 
                            </td> 
                        </tr>
                        <tr>   
                            <td>
                                <label for="marks">Matric:</label> 
                            </td>
                            <td>
                                <input type="number" name="matric" id="matric" min="0"><div id="Matric"> </div>
                            </td>
                        </tr>
                        <tr>   
                            <td>
                                <label for="inter">Intermediate:</label> 
                            </td>
                            <td>
                                <input type="number" name="inter" id="inter" min="0"><div id="Inter"> </div>
                            </td>
                        </tr>
                        <tr>   
                            <td>
                                <label for="bachelor">Bachelor:</label> 
                            </td>
                            <td>
                                <input type="number" name="bachelor" id="bachelor" ><div id="Bachelor"> </div>
                            </td>
                        </tr>
                        <tr>   
                            <td>
                                <label for="master">Master:</label> 
                            </td>
                            <td>
                                <input type="number" name="master" id="master" ><div id="Master"> </div>
                            </td>
                        </tr>
                        <tr>   
                            <td>
                                <label for="phd">PHD:</label> 
                            </td>
                            <td>
                                <input type="number" name="phd" id="phd"  ><div id="PHD"> </div>
                            </td>
                        </tr>
                        <tr>
                        <td>
                                <label for="profile">Profile:</label> 
                        </td> 
                            <td>
                                <textarea name="profile" id="profile" ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <label for="language_i">Language:</label> 
                            </td> 
                            <td>
                                <input type="text" name="language_i"  id="language_i" required ><div id="Language1"> </div>
                            </td>
                            <td>
                                <input type="text" name="language_ii"  id="language_ii" ><div id="Language2"> </div>
                            </td>
                            <td>
                                <input type="text" name="language_iii"  id="language_iii" ><div id="Language3"> </div>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                    <label for="objective">Objective:</label> 
                            </td> 
                            <td>
                                <input type="text" name="objective_i" id="objective" required >
                            </td>
                            <td>
                                <input type="text" name="objective_ii" id="objective" >
                            </td>
                            <td>
                                <input type="text" name="objective_iii" id="objective" >
                            </td>
                        </tr>
                        <tr>
                                <td>
                                        <label for="experience">Experience:</label> 
                                </td> 
                                <td>
                                    <input type="text" name="experience_i" id="experience" required >
                                </td>
                                <td>
                                    <input type="text" name="experience_ii" id="experience" >
                                </td>
                                <td>
                                    <input type="text" name="experience_iii" id="experience" >
                                </td>
                        </tr>
                        <tr>
                            <td>
                                    <label for="skill">Skills:</label> 
                            </td> 
                            <td>
                                <input type="text" name="skills_i" id="skill" required >
                            </td>
                            <td>
                                <input type="text" name="skills_ii" id="skill" >
                            </td>
                            <td>
                                <input type="text" name="skills_iii" id="skill" >
                            </td>
                        </tr>
                        <tr>
                                <td>
                                        <label for="hobbies">Hobbies:</label> 
                                </td> 
                                <td>
                                    <input type="text" name="hobbies_i" id="hobbies" required >
                                </td>
                                <td>
                                    <input type="text" name="hobbies_ii" id="hobbies" >
                                </td>
                                <td>
                                    <input type="text" name="hobbies_iii" id="hobbies" >
                                </td>
                        </tr>
                        <tr>
                            <td>
                                    <label for="reference">Reference:</label> 
                            </td> 
                            <td>
                                <input type="text" name="reference_i" id="reference" required>
                            </td>
                            <td>
                                <input type="text" name="reference_ii" id="reference" >
                            </td>

                            <td>
                                <input type="text" name="reference_iii" id="reference" >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <label for="cellno">Cell No:</label> 
                            </td> 
                            <td>
                                <input type="number" name="cellno" id="cellno" ><div id="phone"> </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <label for="address">Address:</label> 
                            </td> 
                            <td>
                                <input type="text" name="address" id="address">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                    <label for="email">Email:</label> 
                            </td> 
                            <td>
                                <input type="email" name="email" id="email" ><div id="Email"> </div>
                            </td>
                        </tr>
                        
                    </table>
                    
        
                    <input type="submit" id="submit">
            </fieldset>
        </form>
         <script src="Avalidation.js"> </script>
    </body>
