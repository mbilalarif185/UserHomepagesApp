<?php
    
    session_unset();
    session_destroy();
    header("Location:FirstPage.php",true,302);
?>