<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class='newestSignIn'>
            <?php
                $database = new mysqli ('localhost', 'root', '', 'bookademy');
                $myEmail = $_SESSION['email'];
                $find = "SELECT * FROM webusers WHERE activity='Online' AND email!='$myEmail'";
                $result = $database->query($find);

                $var = 0;
                $var1 = 0;

                if ($result -> num_rows > 0){
                    while($row=$result-> fetch_assoc()){
                        if ($row['username']==$myEmail){
                            continue;
                        }
                        $name = $row['username'];
                        $newUser[$var1] =  " <div class='name'>$name</div> " ;
                        echo $newUser[$var1];
                        $var1++;
                    }
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
        width: 80%;
        height: 20vw;
        margin-left: 10%  ;
        background-color: lightgray;
    }
    .name{
        float: right;
        margin: 2% 0% 0% 0%;
        padding: 0;
        width: 100%;
        text-align: center  ;
        height: auto;
        background-color: transparent;
        font-size: 7vw;
        color: #373737;
    }
</style>