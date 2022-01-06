<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class='newUser'>
            <?php
                $database = new mysqli ('localhost', 'root', '', 'bookademy');
                $myEmail = $_SESSION['email'];
                $find = "SELECT * FROM webusers WHERE privacy='Public'";
                $result = $database->query($find);

                $var = 0;
                $var1 = 0;

                if ($result -> num_rows > 0){
                    while($row=$result-> fetch_assoc()){

                        $name = $row['username'];
                        $avatar =  $row['avatar'];
                        $email = $row['email'];
                        $sex = $row['sex'];
                        $status = $row['activity'];

                        $newUser[$var] =  "
                        <div class='user'>
                            <div class='img' style='background-image:url($avatar);'></div>
                            <div class='name'>Name: $name</div>
                            <div class='id'>email: $email</div>
                            <div class='id'>Sex: $sex</div>
                            <div class='id'>Status: $status</div>
                        </div>" ;

                        $var++;
                    }
                }
                echo "<p id='notice'>The latest public person to Sign Up will be showned here.</p>";
                if ( $myEmail!=$email ){
                    echo $newUser[$var-1];
                }else{
                    echo "<div class='noUser'><p>You are the newest user in Bookademy.</p></div>";
                }
            ?>
        </div>
        
        <div class='newestSignIn'>
            <?php
                $database = new mysqli ('localhost', 'root', '', 'bookademy');
                $myEmail = $_SESSION['email'];
                $find = "SELECT * FROM webusers WHERE email!='$myEmail' AND activity='Online'";
                $result = $database->query($find);

                $var = 0;
                $var1 = 0;
                $fromTown;

                if ($result -> num_rows > 0){
                    while($row=$result-> fetch_assoc()){

                        $name = $row['username'];
                        $avatar =  $row['avatar'];
                        $email = $row['email'];
                        $sex = $row['sex'];
                        $status = $row['activity'];

                        $newUser[$var1] =  "
                        <a href=''
                        <div class='user'>
                            <div class='img' style='background-image:url($avatar);'></div>
                            <div class='name'>Name: $name</div>
                            <div class='id'>Email: $email</div>
                            <div class='id'>Sex: $sex</div>
                            <div class='id'>Status: $status</div>
                        </div></a>" ;

                        $var1++;
                    }
                }
                echo "<p id='notice'>The newest public person to be online is shown here.</p>";
                if ($var1!=0){
                    echo $newUser[$var1-1];
                }else{
                    echo "<div class='noUser'><p>It seems like no one is online like you at the moment.</p></div>";
                }
                
                
            ?>
        </div>
        
        
        
    </body>
</html>
<style>
    body{
        float: left;
        margin: 0;
        padding: 0;
        width: 100vw;
        height: 100vh;
        background-color: transparent;
    }
    .newUser{
        float: left;
        margin: 0;
        padding: 0;
        width: 50%;
        height: 100%;
        background-color: transparent;
    }
    #notice{
        float: left;
        margin: 0% 0% 0% 10%;
        padding: 0;
        width: 80%;
        height: 25%;
        color: #373737;
        font-size: 3.5vw;
        background-color: transparent;
        text-align: center;
    }
    .newestSignIn{
        float: left;
        margin: 0;
        padding: 0;
        width: 50%;
        height: 100%;
        background-color: transparent;
    }
    .noUser{
        float: left;
        margin: 0% 0% 0% 10%;
        padding: 0;
        width: 80%;
        height: 70%;
        background-color: lightgray;
        border-style: solid;
        border-width: thin;
        border-color: ghostwhite;
        border-radius: 10px;
        text-align: center;
    }
    .noUser:hover{
        transition: 1s;
        background-color: snow;
    }
    .noUser p{
        float: left;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        background-color: transparent;
        color: #373737;
        font-size: 7vw;
    }
    .user{
        float: left;
        margin: 0% 0% 0% 10%;
        padding: 0;
        width: 80%;
        height: 70%;
        background-color: lightgray;
        border-style: solid;
        border-width: thin;
        border-color: ghostwhite;
        border-radius: 10px;
        text-align: center;
    }
    .user:hover{
        transition: 1s;
        background-color: snow;
    }
    .user .img{
        float: left;
        margin: 2% 0% 0% 25%;
        padding: 0;
        width: 50%;
        height: 50%;
        background-color: transparent;
        border-radius: 100%;
        border-style: solid;
        border-width: thin;
        border-color: gray;
        text-align: center;
        background-size: cover  ;
        background-repeat: no-repeat;
    }
    .user .img #avatar{
        margin: 15% 0% 0% 0%;
        padding: 0;
        width: 100%;
        height: 100%;
        color: #373737;
        font-size: 10vw;
        border-radius: 100%;
        background-color: transparent;
    }
    .user .name{
        float: right;
        margin: 2% 0% 0% 0%;
        padding: 0;
        width: 100%;
        height: auto;
        background-color: transparent;
        font-size: 3vw;
        color: #373737;
    }
    .user .id{
        float: right;
        margin: 2% 0% 0% 0%;
        padding: 0;
        width: 100%;
        height: auto;
        background-color: transparent;
        font-size: 3vw;
        color: #373737;
    }
    .user .status{
        float: right;
        margin: 2% 0% 0% 0%;
        padding: 0;
        width: 100%;
        height: auto;
        background-color: transparent;
        font-size: 3vw;
        color: #373737;
    }
</style>