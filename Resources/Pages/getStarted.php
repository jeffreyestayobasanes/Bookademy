<?php
    session_start();

    $email = $_SESSION['email'];
    
    $database = new mysqli ('localhost', 'root', '', 'bookademy');
    $database->query("UPDATE webusers SET activity='Online' WHERE email='$email'");
    $queryAccount = "SELECT * FROM webusers WHERE email='$email'";
    $result = $database->query($queryAccount);
    if ($result -> num_rows > 0){
        while($row=$result-> fetch_assoc()){
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
    header('Location: library.php');
    exit();        
    
    
?>