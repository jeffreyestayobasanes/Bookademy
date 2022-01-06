<?php
    session_start();
    
    if( isset($_POST['sex']) ){
        $fullname = $_SESSION['fullname'];
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $sex = null  ;
        $theme = $_SESSION['theme'];
        $horror = 0;
        $romance = 0;
        $comedy = 0;
        $law = 0;
        $fantasy = 0;
        $legend = 0;
        $avatar = "../Images/Icons/avatar.png";
        $privacy = "Public";
        $activity = "Offline";
        
        $sex = $_POST['sex'];

        $database = new mysqli ('localhost', 'root', '', 'bookademy');
        if ($sex!=null){
            $database->query("UPDATE webusers SET sex='$sex' WHERE id='$id'");
            $queryAccount = "SELECT * FROM webusers WHERE id='$id'";
            $result = $database->query($queryAccount);
            if ($result -> num_rows > 0){
                while($row=$result-> fetch_assoc()){
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['fullname'] = $row['fullname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['sex'] = $row['sex'];
                    $_SESSION['theme'] = $theme;
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
            header('Location: signUpTheme.php');
            exit();        
        }
        
    }
?>