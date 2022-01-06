<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            session_start();
            $database = new mysqli ('localhost', 'root', '', 'bookademy');
            $myEmail = $_SESSION['email'];
            $fetch = "SELECT * FROM messages WHERE rxEmail='$myEmail'";
            $result = $database->query($fetch);
        
            $var = 0;
            if ($result !== false && $result -> num_rows > 0){
                while($row=$result-> fetch_assoc()){
                    
                    $txEmail = $row['txEmail'];
                    $txName = $row['txName'];
                    $avatar = $row['txAvatar'];
                    $message = $row['message'];
                    $rxEmail = $row['rxEmail'];
                    $rxName = $row['rxName'];
                    $rxAvatar = $row['rxAvatar'];
                
                    
                    $div[$var] =  "
                    <div class='post'>
                        <div class='img' style='background-image:url($avatar);'></div>
                        <div class='name'>$txName</div>
                        <div class='email'>$txEmail</div>
                        <div class='message'>$message</div>
                    </div>"
                    ;
                    $var=$var+1;
                }
            }
        
            for( $i=$var-1; $i>=0; $i-- ){
                echo $div[$i];
            }
            $database->close();
        ?>
    </body>
</html>
<style>
    body{
        float: left;
        margin: 0;
        padding: 0;
        width: 98vw;
        height: 100vh;
        background-color: transparent;
        opacity: 1.0;
        animation-name: fade;
        animation-duration: 2s;
        animation-iteration-count: 1;
        animation-timing-function: ease-in-out;
    }
    @keyframes fade{
        0% { opacity: 0; }
        50% { opacity: 1.0; }
    }
    .post{
        margin: 1% 0% 0% 10%;
        padding: 0;
        width: 80%;
        height: 35%;
        background-color: gray;
        border-style: solid;
        border-width: thin;
        border-color: gray;
    }
    .post:hover{
        transition: 1s;
        background-color: white;
    }
    .post .img{
        background-size: cover;
        background-repeat: no-repeat;
        float: left;
        position: absolute ;
        margin: 0.5% 0% 0% 0.5%;
        padding: 0;
        width: 15vw;
        height: 15vw;
        background-color: transparent;
        border-radius: 100%;
        border-style: solid;
        border-width: thin;
        border-color: gray  ;
        text-align: center;
    }
    .post .img #avatar{
        margin: 10% 0% 0% 0%;
        padding: 0;
        width: 100%;
        height: 100%;
        color: #373737;
        font-size: 7vw;
        border-radius: 100%;
    }
    .post .name{
        float: left;
        position: absolute ;
        margin-left: 16%  ;
        padding: 0;
        width: 60%;
        height: 5vw  ;
        background-color: transparent  ;
        font-size: 4vw;
        color: #373737;
        text-align: center;
        text-align: justify-all;
        word-break: break-all;
    }
    .post .email{
        float: left;
        position: absolute ;
        padding: 0;
        margin-left: 18%  ;
        margin-top: 5%;
        padding: 0;
        width: 60%;
        height: 5%  ;
        background-color: transparent  ;
        font-size: 4vw;
        color: #373737;
        text-align: center;
        text-align: justify-all;
        word-break: break-all;
    }
    .post .message{
        float: left;
        position: absolute ;
        margin: 12% 0% 0% 16%;
        padding: 0;
        width: 60%;
        height: 25vw;
        background-color: transparent  ;
        font-size: 5vw;
        color: #373737;
        word-break: break-all;
    }
</style>