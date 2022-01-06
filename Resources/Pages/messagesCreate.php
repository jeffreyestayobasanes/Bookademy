<?php
    session_start();

    if( isset($_POST['rxEmail']) && isset($_POST['message']) ){
        
        $rxEmail = null; 
        $message = null;
        $txEmail = null;
		
        $rxEmail = $_POST['rxEmail'];
        $message = $_POST['message'];
        $txEmail = $_SESSION['email'];
        $txName = $_SESSION['fullname'];
        $txAvatar = $_SESSION['avatar'];

        $database = new mysqli('localhost', 'root', '');
        $database->query("CREATE DATABASE IF NOT EXISTS bookademy"); 
        $database->query("USE bookademy");

        $getName = $database->query("SELECT * FROM webusers WHERE email='$rxEmail'")  ;
        if ( $getName!=false && $getName-> num_rows>0 ){
          while ( $row=$getName->fetch_assoc() ){
              $_SESSION['rxName']=$row['fullname'];
              $_SESSION['rxAvatar']=$row['avatar'];
          }
        }
        $rxName = $_SESSION['rxName'];
        $rxAvatar = $_SESSION['rxAvatar'];
        

        if ( $rxEmail != null && $message != null && $txEmail != null ){
            $database->query("CREATE TABLE `bookademy`.`messages` ( `id` INT(3) NOT NULL AUTO_INCREMENT , `rxName` VARCHAR(50) NOT NULL , `rxEmail` VARCHAR(50) NOT NULL , `message` VARCHAR(200) NOT NULL , `txEmail` VARCHAR(50) NOT NULL , `txName` VARCHAR(50) NOT NULL , `rxAvatar` VARCHAR(60000) NOT NULL , `txAvatar` VARCHAR(60000) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");

            $createPost = $database->prepare("INSERT INTO messages (rxName, rxEmail, message, txEmail, txName, rxAvatar, txAvatar) VALUES(?, ?, ?, ?, ?, ?, ?)");
            
            $createPost->bind_param("sssssss", $rxName, $rxEmail, $message, $txEmail, $txName, $rxAvatar, $txAvatar);
            $createPost->execute();
            
            header('Location: messages.php');
            exit();
        }else{
            header('Location: messages.php');
            exit();
        }
    }
?>