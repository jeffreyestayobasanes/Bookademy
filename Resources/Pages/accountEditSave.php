<?php
    session_start();

    if ( isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['sex']) && isset($_POST['privacy']) && isset($_POST['avatar']) ){
        
        $fullname = $_POST['name'];
        $username = $_POST['username'];
        $email = $_SESSION['email'];
        $newEmail = $_POST['email'];
        $password = $_POST['password'];
        $sex = $_POST['sex'];
        $privacy = $_POST['privacy'];
        $avatar = $_POST['avatar'];

        $id = $_SESSION['id'];

        $database = new mysqli ('localhost', 'root', '', 'bookademy');
        $queryAccount = "SELECT * FROM webusers WHERE email='$email'";
        $result = $database->query($queryAccount);
        if ($result -> num_rows > 0){
            while($row=$result-> fetch_assoc()){
                if ( $fullname!=null && $username!=null && $sex!=null && $privacy!=null && $password!=null && $avatar!=null ){
                    $database->query("UPDATE webusers SET fullname='$fullname' WHERE email='$email'");
                    $database->query("UPDATE webusers SET username='$username' WHERE email='$email'");
                    $database->query("UPDATE webusers SET password='$password' WHERE email='$email'");
                    $database->query("UPDATE webusers SET sex='$sex' WHERE email='$email'");
                    $database->query("UPDATE webusers SET avatar='$avatar' WHERE email='$email'");
                    $database->query("UPDATE webusers SET privacy='$privacy' WHERE email='$email'");
                    $database->query("UPDATE webusers SET email='$newEmail' WHERE email='$email'");
                    $_SESSION['email'] = $newEmail;


                    $allEmails = $database->query("SELECT * FROM webusers WHERE id='$id'")  ;
                    if ( $allEmails!=false && $allEmails-> num_rows>0 ){
                        while ( $row=$allEmails->fetch_assoc() ){
                            $_SESSION['id'] = $row['id'];
                            $_SESSION['fullname'] = $row['fullname'];
                            $_SESSION['email'] = $row['email'];
                            $myEmail = $_SESSION['email']  ;
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
                            $database->query("UPDATE webusers SET activity='Online' WHERE email='$myEmail'");
                        }
                    }
                        header('Location: account.php');
                    exit();
                }
            }
        }
    }
    

    header('Location: ../../index.html');
    exit();

    $id = null;
    $name = null;
    $password = null;

?>