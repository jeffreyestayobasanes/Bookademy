<?php
    session_start();

    $id = $_SESSION['id'];
    
    $database = new mysqli ('localhost', 'root', '', 'bookademy');
    $database->query("UPDATE webusers SET activity='Offline' WHERE id='$id'");
    $queryAccount = "SELECT * FROM webusers WHERE email='$email'";
    $result = $database->query($queryAccount);
    if ($result -> num_rows > 0){
        while($row=$result-> fetch_assoc()){
            $_SESSION['id'] = null;
            $_SESSION['fullname'] = null;
            $_SESSION['email'] = null;
            $_SESSION['username'] = null;
            $_SESSION['password'] = null;
            $_SESSION['sex'] = null;
            $_SESSION['theme'] = null;
            $_SESSION['horror'] = null;
            $_SESSION['romance'] = null;
            $_SESSION['comedy'] = null;
            $_SESSION['law'] = null;
            $_SESSION['fantasy'] = null;
            $_SESSION['legend'] = null;
            $_SESSION['avatar'] = null;
            $_SESSION['privacy'] = null;
            $_SESSION['activity'] = null;
        }
    }
    header('Location: signIn.php');
    exit();        
    
    
?>