<?php
    session_start();
    
    if( isset($_POST['horror']) || isset($_POST['romance']) || isset($_POST['comedy']) || isset($_POST['law']) || isset($_POST['fantasy']) || isset($_POST['legend']) ){
        $email = $_SESSION['email'];
        $fullname = $_SESSION['fullname'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $sex = $_SESSION['sex'];
        $theme = $_SESSION['theme'];
        $horror = 0;
        $romance = 0;
        $comedy = 0;
        $law = 0;
        $fantasy = 0;
        $legend = 0;
        $avatar = "../Images/Icons/avatar.png";
        $privacy = "Public";
        $activity = "Online";

        $horror = $_POST['horror'];
        $romance = $_POST['romance'];
        $comedy = $_POST['comedy'];
        $law = $_POST['law'];
        $fantasy = $_POST['fantasy'];
        $legend = $_POST['legend'];

        $database = new mysqli ('localhost', 'root', '', 'bookademy');
        if ($theme!=null){
            $database->query("UPDATE webusers SET horror='$horror' WHERE email='$email'");
            $database->query("UPDATE webusers SET romance='$romance' WHERE email='$email'");
            $database->query("UPDATE webusers SET comedy='$comedy' WHERE email='$email'");
            $database->query("UPDATE webusers SET law='$law' WHERE email='$email'");
            $database->query("UPDATE webusers SET fantasy='$fantasy' WHERE email='$email'");
            $database->query("UPDATE webusers SET legend='$legend' WHERE email='$email'");
            $database->query("UPDATE webusers SET activity='$activity' WHERE email='$email'");
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
            header('Location: getStarted.html');
            exit();                
        }
    }
    header('Location: signUpInterests.html');
    exit();           
?>