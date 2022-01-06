<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            $database = new mysqli ('localhost', 'root', '', 'bookademy');
            $queryPosts = "SELECT * FROM posts";
            $result = $database->query($queryPosts);
        
            $var = 0;
        
            if ($result !== false && $result -> num_rows > 0){
                while($row=$result-> fetch_assoc()){
                    
                    $name = $row['username'];
                    $avatar = $row['avatar'];
                    $email = $row['email'];
                    $message = $row['message'];
                    
                    $div[$var] =  "
                    <div class='post'>
                        <div class='img' style='background-image:url($avatar);'></div>
                        <div class='name'>$name</div>
                        <div class='email'>$email</div>
                        <div class='message'>$message</div>
                    </div>"
                    ;
                    $name = null;
                    $email = null;
                    $message = null;
                    $var=$var+1;
                }
            }
        
            for( $i=$var-1; $i>=0; $i-- ){
                echo $div[$i];
            }
        
            $name = null;
            $email = null;
            $message = null;
            
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
        height: 25%;
        background-color: lightgray;
        border-style: solid;
        border-width: thin;
        border-color: gray;
        border-radius: 10px;
    }
    .post:hover{
        transition: 1s;
        background-color: white;
    }
    .post .img{
        float: left;
        margin: 0.5% 0% 0% 0.5%;
        padding: 0;
        width: 15%;
        height: 50%  ;
        background-color: transparent;
        border-radius: 100%;
        border-style: solid;
        border-width: thin;
        border-color: gray  ;
        text-align: center;
        background-size: cover  ;
        background-repeat: no-repeat;
    }
    .post .img #avatar{
        margin: 8% 0% 0% 0%;
        padding: 0;
        width: 100%;
        height: 100%;
        color: #373737;
        font-size: 7vw;
        border-radius: 100%;
    }
    .post .name{
        float: left;
        margin-left: 2%  ;
        padding: 0;
        width: 80%;
        height: auto  ;
        background-color: transparent  ;
        font-size: 3.5vw;
        color: #373737;
        text-align: left;
        text-align: justify-all;
    }
    .post .email{
        float: left;
        padding: 0;
        margin-left: 2%  ;
        padding: 0;
        width: 80%;
        height: auto  ;
        background-color: transparent  ;
        font-size: 3.5vw;
        color: #373737;
        text-align: left;
        text-align: justify-all;
    }
    .post .message{
        float: left;
        margin: 2% 0% 0% 0.5%;
        padding: 0;
        width: 80%;
        height: 50%;
        background-color: transparent  ;
        font-size: 3vw;
        color: #373737;
    }
</style>