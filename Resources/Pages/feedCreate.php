<?php
    session_start();

    if( isset($_POST['message']) ){
        
        $name = null; 
        $id = null;
        $message = null;
		
        $name = $_POST['username'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $avatar = $_SESSION['avatar'];
        
        if ( $name != null && $email != null && $message != null ){
            $database = new mysqli('localhost', 'root', '');
            $database->query("CREATE DATABASE IF NOT EXISTS bookademy"); 
            $database->query("USE bookademy");
            $database->query("CREATE TABLE `bookademy`.`posts` ( `username` VARCHAR(50) NOT NULL , `email` VARCHAR(50) NOT NULL , `message` VARCHAR(500) NOT NULL, `avatar` VARCHAR(60000) NOT NULL ) ENGINE = InnoDB;");

            $createPost = $database->prepare("INSERT INTO posts (username, email, message, avatar) VALUES(?, ?, ?, ?)");
            $likes = 0;
            $createPost->bind_param("ssss", $name, $email, $message, $avatar);
            $createPost->execute();
            
            header('Location: feed.php');
            exit();
        }else{
            header('Location: feed.php');
            exit();
        }
    }
?>