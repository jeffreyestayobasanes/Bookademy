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
        <title>Log In to Bookademy</title>
        <link rel="stylesheet" href="signIn.css">
        <link rel="shortcut icon" href="../Images/Icons/logo.png">
    </head>
    <body id="background">
        <input id="mode" value="<?php echo $_SESSION['theme']; ?>" style="display:none;">
        <div class="nav">
            <image id="logo" src="../Images/Icons/logo.png" draggable="false"></image>
            <a id="home"href="../../index.php">Home</a>
            <a id="signUp">Sign Up</a>
            <a id="about" href="about.php">About</a>
            <a id="contact" href="contact.php">Contact Us</a>
            <circle></circle>
        </div>
        <a id="theme" href="signInRefresh.php"></a>
        <div class="content">
            <p id="hide"><?php echo $_SESSION['warning']; ?></p>
            <h2 id="warning"></h2>
            <h1>You are Logging In</h1>
            <form action="signInExtra.php" method="post" target="_parent">
                <p id="email">Email:</p><input id="emailField" type="text" placeholder="Email" name="email">
                <p id="password">Password:</p><input id="passwordField" type="password" placeholder="Password" name="password"><div id="passwordToggle" onclick="passwordToggle()"></div>
                <button id="logInBtn" type="submit">Log In</button>
                <p id="bottomText1">If you don't have any account</p><p id="bottomText2">you can </p><a id="signUpLink" href="signUp.php">Sign Up</a><p id="bottomText3"> instead.</p>
            </form>
        </div>
    </body>
    <script src="signIn.js"></script>
</html>
<?php
    $_SESSION['warning'] = 0  ;
?>