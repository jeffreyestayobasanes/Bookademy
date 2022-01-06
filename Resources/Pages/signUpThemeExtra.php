<?php
    session_start();
    
    if( isset($_POST['theme']) ){
        $fullname = $_SESSION['fullname'];
        $email = $_SESSION['email'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $sex = $_SESSION['sex'];
        $theme = null;
        $horror = 0;
        $romance = 0;
        $comedy = 0;
        $law = 0;
        $fantasy = 0;
        $legend = 0;
        $avatar = "../Images/Icons/avatar.png";
        $privacy = "Public";
        $activity = "Offline";
        
        $theme = $_POST['theme'];
        $_SESSION['theme'] = $theme;

        $database = new mysqli ('localhost', 'root', '', 'bookademy');
        if ($theme!=null){
            $database->query("UPDATE webusers SET theme='$theme' WHERE email='$email'");
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
            header('Location: signUpInterests.php');
            exit();                
        }
    }
?>