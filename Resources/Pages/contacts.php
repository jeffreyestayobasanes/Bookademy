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
        <link rel="stylesheet" href="contacts.css">
        <link rel="shortcut icon" href="../Images/Icons/logo.png">
    </head>
    <body id="background">
        <input id="mode" value="<?php echo $_SESSION['theme']; ?>" style="display:none;">
        <div class="nav">
            <image id="logo" src="../Images/Icons/logo.png" draggable="false"></image>
            <a id="home" href="../../index.php">Home</a>
            <a id="signUp" href="signUp.php">Sign Up</a>
            <a id="about" href="about.php">About</a>
            <a id="contact">Contact Us</a>
            <circle></circle>
        </div>
        <a id="theme" href="contactsRefresh.php"></a>
        <image id="moreHint" src="../Images/Icons/down.png"></image>
        <div class="content">
            <p id="summaryTop">When you have queries about the Website, suggestions 
                for the improvement, report of abuse, when you need assistance from 
                the website developers, or when you want to work with them, there 
                are a lot of ways to do so.
            </p>
            <button id="feedback"><a id="feedbackLink" href="contact.php">Send Us Your Feedback</a></button>
            <button id="developers">Website Developers</button>
            
            <div class="devList" id="devList">
                <box id="jason" class="jason">
                    <img src="../Images/Developers/jason.jpg">
                    <h5 id="desc1">Junior Web Developer</h5>
                    <h5 id="desc2">Project Maker</h5>
                    <h5 id="name">Jason Lopez</h5>
                    <img id="email" src="../Images/Icons/email.png">
                    <a id="emailLink" href = "mailto: jasonlopez@student.dmmmsu.edu.ph">jasonlopez@student.dmmmsu.edu.ph</a>
                    <img id="facebook" src="../Images/Icons/facebook.png">
                    <a id="facebookLink" href="https://www.facebook.com/profile.php?id=100009296713993">facebook.com/profile.php?id=100009296713993</a>
                </box>
                <box id="rose" class="rose">
                    <img src="../Images/Developers/rose.jpg">
                    <h5 id="desc1">Front-End Developer</h5>
                    <h5 id="desc2">Web Designer</h5>
                    <h5 id="name">Rose-Ann Licuanan</h5>
                    <img id="email" src="../Images/Icons/email.png">
                    <a id="emailLink" href = "mailto: rlicuanan@student.dmmmsu.edu.ph">rlicuanan@student.dmmmsu.edu.ph</a>
                    <img id="facebook" src="../Images/Icons/facebook.png">
                    <a id="facebookLink" href="https://www.facebook.com/roseannnidoy.licuanan">facebook.com/roseannnidoy.licuanan</a>
                </box>
                <box id="jenny">
                    <img src="../Images/Developers/jenny.jpg">
                    <h5 id="desc1">Junior Web Developer</h5>
                    <h5 id="desc2">Web Designer</h5>
                    <h5 id="name">Jenny Tiama</h5>
                    <img id="email" src="../Images/Icons/email.png">
                    <a id="emailLink" href = "mailto: jtiama@student.dmmmsu.edu.ph">jtiama@student.dmmmsu.edu.ph</a>
                    <img id="facebook" src="../Images/Icons/facebook.png">
                    <a id="facebookLink" href="https://www.facebook.com/jennytiama.00">facebook.com/jennytiama.00</a>
                </box>
                <image id="slideArrow" src="../Images/Icons/right.png" onclick="slide()"></image>
                <box id="norly">
                    <img src="../Images/Developers/norly.jpg">
                    <h5 id="desc1">Front-End Developer</h5>
                    <h5 id="desc2">Decision Maker</h5>
                    <h5 id="name">Norly Fallega</h5>
                    <img id="email" src="../Images/Icons/email.png">
                    <a id="emailLink" href = "mailto: norlyfallega@yahoo.com">norlyfallega@yahoo.com</a>
                    <img id="facebook" src="../Images/Icons/facebook.png">
                    <a id="facebookLink" href="https://www.facebook.com/fallega.norly">facebook.com/fallega.norly</a>
                </box>
                <box id="jeffrey" class="jeffrey">
                    <img src="../Images/Developers/jeffrey.jpg">
                    <h5 id="desc1">Senior Web Developer</h5>
                    <h5 id="desc2">Full-Stack Web Developer</h5>
                    <h5 id="name">Jeffrey Basanes</h5>
                    <img id="email" src="../Images/Icons/email.png">
                    <a id="emailLink" href = "mailto: jeffreyestayobasanes@email.com">jeffreyestayobasanes@email.com</a>
                    <img id="facebook" src="../Images/Icons/facebook.png">
                    <a id="facebookLink" href="https://www.facebook.com/cutest.guy.ever.born">facebook.com/cutest.guy.ever.born</a>
                </box>
            </div>
        </div>
    </body>
    <script src="contacts.js"></script>
</html>
