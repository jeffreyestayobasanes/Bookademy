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
        <link rel="stylesheet" href="about.css">
        <link rel="shortcut icon" href="../Images/Icons/logo.png">
    </head>
    <body id="background">
        <input id="mode" value="<?php echo $_SESSION['theme']; ?>" style="display:none;">
        <div class="nav">
            <image id="logo" src="../Images/Icons/logo.png" draggable="false"></image>
            <a id="home" href="../../index.php">Home</a>
            <a id="signUp" href="signUp.php">Sign Up</a>
            <a id="about">About</a>
            <a id="contact" href="contact.php">Contact Us</a>
            <circle></circle>
        </div>
        <a id="theme" href="aboutRefresh.php"></a>
        <image id="moreHint" src="Resources/Images/Icons/down.png"></image>
        <div class="content">
            <image id="mainLogo" src="../Images/Icons/logo.png"></image>
            <h5>Official Logo</h5>
            <p id="logoDescription">
                The logo is designed to have books with 
                different colors and orientation, portraying 
                how the website will help you find books of different genres and orientation.
            </p>
            <p id="first">
                Bookademy is a unique book-recommending website that will help you find the 
                best books to read. With the help of other users from around the world, you 
                will be introduced to different books, hear from other users and, of course, 
                be heard!
            </p>
            <p id="second">
                Bookademy has so many features that make it a social networking site, too! 
                Here, you can create posts, send book recommendations, be seen online and 
                even send messages to others. You can also choose to be publicly visible or 
                not, depending on your preferrence. And if ever you made mistakes while 
                creating your account, no worries - you can edit them on your Account 
                Settings. Cool, right? Well, we are glad to tell you there are still so much 
                you can uncover here on Bookademy.
            </p>
            <p id="third">
                Bookademy is a project-proposal website conceptualized by Jenny Tiama on Marvel and 
                started by Jason Lopez on Canva. With the help of Rose Ann Licuanan and Norly Fallega 
                in choosing the proper theming and background images, coloring and layouting of the 
                pages and book icons so the targetted visual sense and perspective in Human-Computer 
                Interaction is met, Jeffrey Basanes has successfully put the ideas of the four founders 
                into a real website.
            </p>
            <p id="rights">&#169; 2021 Bookademy. All Rights Reserved.</p>
        </div>
        <footer></footer>
    </body>
    <script src="about.js"></script>
</html>
