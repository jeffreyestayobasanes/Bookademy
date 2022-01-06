<?php
  session_start()  ;
  
  $email = null  ;
  $password = null ;
  
  if ( isset($_POST['email']) && isset($_POST['password']) ){
    $email = $_POST['email']  ;
    $password = $_POST['password']  ;
    
    if ( $email!=null && $password!=null ){
      $database = new mysqli('localhost', 'root', '');
      $database->query("CREATE DATABASE IF NOT EXISTS bookademy"); 
      $database->query("USE bookademy");
      $database->query("CREATE TABLE `bookademy`.`webusers` ( `id` INT(3) NOT NULL AUTO_INCREMENT , `fullname` VARCHAR(50) NOT NULL ,`email` VARCHAR(50) NOT NULL , `username` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , `sex` ENUM('Male','Female','Undefined') NOT NULL , `theme` ENUM('Light','Dark','Time') NOT NULL , `horror` INT(1) NOT NULL , `romance` INT(1) NOT NULL , `comedy` INT(1) NOT NULL , `law` INT(1) NOT NULL , `fantasy` INT(1) NOT NULL , `legend` INT(1) NOT NULL , `avatar` VARCHAR(60000) NOT NULL , `privacy` ENUM('Public','Private') NOT NULL , `activity` ENUM('Online','Offline') NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");

      $allUsers = $database->query("SELECT * FROM webusers")  ;
      if ( $allUsers!=false && $allUsers-> num_rows>0 ){
        $allEmails = $database->query("SELECT * FROM webusers WHERE email='$email'")  ;
        if ( $allEmails!=false && $allEmails-> num_rows>0 ){
          while ( $row=$allEmails->fetch_assoc() ){
            if ( $email==$row['email'] && $password==$row['password'] ){
              
              $_SESSION['id'] = $row['id'];
              $_SESSION['fullname'] = $row['fullname'];
              $_SESSION['email'] = $row['email'];
              $id = $_SESSION['id']  ;
              $_SESSION['username'] = $row['username'];
              $_SESSION['password'] = $row['password'];
              $_SESSION['sex'] = $row['sex'];
              $_SESSION['theme'] = $row['theme'];
              $_SESSION['horror'] = $row['horror'];
              $_SESSION['romance'] = $row['romance'];
              $_SESSION['comedy'] = $row['comedy'];
              $_SESSION['law'] = $row['law'];
              $_SESSION['fantasy'] = $row['fantasy'];
              $_SESSION['legend'] = $row['legend'];
              $_SESSION['avatar'] = $row['avatar'];
              $_SESSION['privacy'] = $row['privacy'];
              $_SESSION['activity'] = $row['activity'];
              $database->query("UPDATE webusers SET activity='Online' WHERE id='$id'");
              
              header('Location: library.php')  ;
              exit()  ;
            }else{
              $_SESSION['warning'] = "4"  ; // The password you entered is not correct.
              header('Location: signIn.php')  ;
              exit()  ;
            }
          }
        }else{
          $_SESSION['warning'] = "3"  ; // The account you are accessing does not exist.
          header('Location: signIn.php')  ;
        }
      }else{
        $_SESSION['warning'] = "2"  ; // No accounts are found in the database.
        header('Location: signIn.php')  ;
        exit()  ;
      }
    }else {
      $_SESSION['warning'] = "1"  ; // All input fields must be filled in.
      header('Location: ../Pages/signIn.php')  ;
      exit()  ;
    }
  }
?>