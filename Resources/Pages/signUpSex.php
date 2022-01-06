<?php
    session_start();

    if($_SESSION['set']!==0){
        $_SESSION['theme'] = "Light";
        $_SESSION['set'] = 0;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="charset" content="utf-8">
        <title>Bookademy: User Sex</title>
        <link rel="stylesheet" href="signUpSex.css">
        <link rel="shortcut icon" href="../Images/Icons/logo.png">
    </head>
    <body class="body" id="background">
        <input id="mode" value="<?php echo $_SESSION['theme']; ?>" style="display:none;">
        <orientation id="hide"></orientation>
        <h1>Select you Gender</h1>
        <div id="male" onclick="male()">
            <div></div>
            <h2>MALE</h2>
        </div>
        <div id="female" onclick="female()">
            <div></div>
            <h2>FEMALE</h2>
        </div>
        <p id="check1">&#10003;</p>
        <p id="check2">&#10003;</p>
        <form action="signUpSexExtra.php" method="post" target="_parent">
            <input id="sex" name="sex" value="Undefined">
            <button id="next" type="submit"></button>
        </form>
        
        <div id="bar">
            <div id="progress"></div>
            <div id="number">1</div>
        </div>
        <script src="signUpSex.js"></script>
    </body>
</html>