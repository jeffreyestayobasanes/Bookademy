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
        <title>Bookademy: User Interests</title>
        <link rel="stylesheet" href="signUpInterests.css">
        <link rel="shortcut icon" href="../Images/Icons/logo.png">
    </head>
    <body class="body" id="background">
        <input id="mode" value="<?php echo $_SESSION['theme']; ?>" style="display:none;">
        <orientation id="hide"></orientation>
        <h1 id="text1">Select all your Interests</h1>
        <div class="content" id="content">
            <div id="horror" onclick="horrorFunc()">
                <div></div>
                <h2 id="text2">Horror</h2>
            </div>
            <div id="romance" onclick="romanceFunc()">
                <div></div>
                <h2 id="text3">Romance</h2>
            </div>
            <div id="comedy" onclick="comedyFunc()">
                <div></div>
                <h2 id="text4">Comedy</h2>
            </div>
            <div id="law" onclick="lawFunc()">
                <div></div>
                <h2 id="text4">Law</h2>
            </div>
            <div id="slideArrow" onclick="slide()"></div>
            <div id="fantasy" onclick="fantasyFunc()">
                <div></div>
                <h2 id="text4">Fantasy</h2>
            </div>
            <div id="legend" onclick="legendFunc()">
                <div></div>
                <h2 id="text4">Legend</h2>
            </div>
            <p id="check1">&#10003;</p>
            <p id="check2">&#10003;</p>
            <p id="check3">&#10003;</p>   
            <p id="check4">&#10003;</p>
            <p id="check5">&#10003;</p>
            <p id="check6">&#10003;</p>    
        </div>
        <form action="signUpInterestsExtra.php" method="post" target="_parent">
            <input id="horrorValue" name="horror" value="0">
            <input id="romanceValue" name="romance" value="0">
            <input id="comedyValue" name="comedy" value="0">
            <input id="lawValue" name="law" value="0">
            <input id="fantasyValue" name="fantasy" value="0">
            <input id="legendValue" name="legend" value="0">
            <button id="next" type="submit"></button>
        </form>
        <a href="signUpTheme.php"><button id="previous"></button></a>
        <div id="bar">
            <div id="progress"></div>
            <div id="number">3</div>
        </div>
        <script src="signUpInterests.js"></script>
    </body>
</html>