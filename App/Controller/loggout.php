<?php
    if(isset($_POST['loggout'])){
        session_destroy();
        
        header('Location: ../View/page-login.php');
    }
?>