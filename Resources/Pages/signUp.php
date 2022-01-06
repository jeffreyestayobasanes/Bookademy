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
        <title>Sign Up to Bookademy</title>
        <link rel="stylesheet" href="signUp.css">
        <link rel="shortcut icon" href="../Images/Icons/logo.png">
    </head>
    <body id="background">
        <input id="mode" value="<?php echo $_SESSION['theme']; ?>" style="display:none;">
        <div class="nav">
            <image id="logo" src="../Images/Icons/logo.png" draggable="false"></image>
            <a id="home" href="../../index.php">Home</a>
            <a id="signUp">Sign Up</a>
            <a id="about" href="about.php">About</a>
            <a id="contact" href="contact.php">Contact Us</a>
            <circle></circle>
        </div>
        <a id="theme" href="signUpRefresh.php"></a>
        <div class="content">
            <p id="hide"><?php echo $_SESSION['warning']; ?></p>
            <h2 id="warning"></h2>
            <h1>You are Signing Up</h1>
            <form action="signUpExtra.php" method="post" target="_parent">
                <p id="email">Email:</p><input id="emailField" type="text" placeholder="Email" name="email">
                <p id="username">Username:</p><input id="usernameField" type="text" placeholder="Username" name="username">
                <p id="password">Password:</p><input id="passwordField" type="password" placeholder="Password" name="password"><div id="passwordToggle" onclick="passwordToggle()"></div>
                <button id="signUpBtn" type="submit">Sign Up</button>
                <p id="bottomText1">Already have an account?</p><a id="logInLink" href="signIn.php"> Log In</a><p id="bottomText2"> instead.</p>
            </form>
        </div>
    <script src="signUp.js"></script>
    </body>
</html>
<?php
    $_SESSION['warning'] = 0  ;
?>