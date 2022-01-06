<?php
    session_start();

    if($_SESSION['theme']==="Light"){
        $_SESSION['theme']="Dark";
        header('Location: signIn.php');
        exit();     
    }
    if($_SESSION['theme']==="Dark"){
        $_SESSION['theme']="Light";
        header('Location: signIn.php');
        exit();     
    }
?>