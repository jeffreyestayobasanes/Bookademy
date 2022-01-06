<?php
    session_start();
    if( isset($_POST['title']) && isset($_POST['author']) && isset($_POST['summary']) && isset($_POST['coverlink']) ){
        
        $title = null; 
        $author = null;
        $summary = null;
        $coverlink = null;
        $approval = $_SESSION['id']  ;
        $category = null;
		
        $title = $_POST['title'];
        $author = $_POST['author'];
        $summary = $_POST['summary'];
        $coverlink = $_POST['coverlink'];
        $category = $_POST['category'];
        
        if ( $title!=null && $author!=null && $summary!=null && $coverlink!=null ){
            $database = new mysqli('localhost', 'root', '');
            $database->query("CREATE DATABASE IF NOT EXISTS bookademy"); 
            $database->query("USE bookademy");
            $database->query("CREATE TABLE `bookademy`.`books` ( `id` INT(3) NOT NULL AUTO_INCREMENT , `title` VARCHAR(100) NOT NULL , `author` VARCHAR(100) NOT NULL , `summary` VARCHAR(1500) NOT NULL , `link` VARCHAR(60000) NOT NULL , `approval` VARCHAR(50) NOT NULL , `category` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");

            $createShare = $database->prepare("INSERT INTO books (title, author, summary, link, approval, category) VALUES(?, ?, ?, ?, ?, ?)");
            $createShare->bind_param("ssssss", $title, $author, $summary, $coverlink, $approval, $category);
            $createShare->execute();
            
            header('Location: share.php');
            exit();
        }else{
            header('Location: share.php');
            exit();
        }
    }
?>