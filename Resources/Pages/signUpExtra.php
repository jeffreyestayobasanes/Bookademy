<?php
    session_start();
    
    if( isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) ){
        
        $name = null;
        $email = null; 
        $username = null;
        $password = null;
        $sex = null;
        $theme = $_SESSION['theme'];
        $interest = null;
        
        $name = $_POST['username'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sex = "Undefined";
        $theme = "Light";
        $horror = 0;
        $romance = 0;
        $comedy = 0;
        $law = 0;
        $fantasy = 0;
        $legend = 0;
        $avatar = "https://t3.ftcdn.net/jpg/04/69/33/28/360_F_469332858_fpRIiucVhwULA8Hrcn39orO42ABVXPTX.jpg";
        $privacy = "Public";
        $activity = "Offline";
            
        $database = new mysqli('localhost', 'root', '');
        $database->query("CREATE DATABASE IF NOT EXISTS bookademy"); 
        $database->query("USE bookademy");
        $database->query("CREATE TABLE `bookademy`.`webusers` ( `id` INT(3) NOT NULL AUTO_INCREMENT , `fullname` VARCHAR(50) NOT NULL ,`email` VARCHAR(50) NOT NULL , `username` VARCHAR(50) NOT NULL , `password` VARCHAR(50) NOT NULL , `sex` ENUM('Male','Female','Undefined') NOT NULL , `theme` ENUM('Light','Dark','Time') NOT NULL , `horror` INT(1) NOT NULL , `romance` INT(1) NOT NULL , `comedy` INT(1) NOT NULL , `law` INT(1) NOT NULL , `fantasy` INT(1) NOT NULL , `legend` INT(1) NOT NULL , `avatar` VARCHAR(60000) NOT NULL , `privacy` ENUM('Public','Private') NOT NULL , `activity` ENUM('Online','Offline') NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");

        if ( ($email!=null) && ($username!=null) && ($password!=null)  ){

            $checkEmail = $database->query("SELECT * FROM webusers WHERE email='$email'");
            if ( ($checkEmail!=false) && ($checkEmail-> num_rows > 0) ){
                $_SESSION['warning'] = "2";
                header('Location: signUp.php');
                exit();
            }else{
                $addUser = $database->prepare("INSERT INTO webusers (fullname, email, username, password, sex, theme, horror, romance, comedy, law, fantasy, legend, avatar, privacy, activity) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $addUser->bind_param("ssssssiiiiiisss", $name, $email, $username, $password, $sex, $theme, $horror, $romance, $comedy, $law, $fantasy, $legend, $avatar, $privacy, $activity);
                $addUser->execute();
                    
                $queryAccount = "SELECT * FROM webusers WHERE email='$email'";
                $result = $database->query($queryAccount);
                if ($result -> num_rows > 0){
                    while($row=$result-> fetch_assoc()){
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['fullname'] = $row['fullname'];
                        $_SESSION['email'] = $row['email'];
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
                    }
                }
            }
            
        }else{
            $_SESSION['warning'] = "1";
            header('Location: signUp.php');
            exit();
        }
        
        
        header('Location: signUpSex.php');
        exit();
            
    }else{
        $_SESSION['warning'] = "1";
        header('Location: signUp.php');
        exit();
    }
?>