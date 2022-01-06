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
        <title>Bookademy: User Theme</title>
        <link rel="stylesheet" href="signUpTheme.css">
        <link rel="shortcut icon" href="../Images/Icons/logo.png">
    </head>
    <body class="body" id="background">
        <input id="mode" value="<?php echo $_SESSION['theme']; ?>" style="display:none;">
        <orientation id="hide"></orientation>
        <h1 id="text1">Select your Theme</h1>
        <div id="light" onclick="light()">
            <div></div>
            <h2 id="text2">LIGHT</h2>
        </div>
        <div id="dark" onclick="dark()">
            <div></div>
            <h2 id="text3">DARK</h2>
        </div>
        <div id="timed" onclick="timed()">
            <div></div>
            <h2 id="text4">Time-Dependent</h2>
        </div>
        <p id="check1">&#10003;</p>
        <p id="check2">&#10003;</p>
        <p id="check3">&#10003;</p>    
        <a href="signUpSex.php"><button id="previous"></button></a>
        <form action="signUpThemeExtra.php" method="post" target="_parent">
            <input id="theme" name="theme" value="Time">
            <button id="next" type="submit"></button>
        </form>
        
        <div id="bar">
            <div id="progress"></div>
            <div id="number">2</div>
        </div>
        <script src="signUpTheme.js"></script>
    </body>
</html>