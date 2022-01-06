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
        <link rel="stylesheet" href="contact.css">
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
        <a id="theme" href="contactRefresh.php"></a>
        <div class="content">
            <p id="summaryTop">When you have queries about the Website, suggestions 
                for the improvement, report of abuse, when you need assistance from 
                the website developers, or when you want to work with them, there 
                are a lot of ways to do so.
            </p>
            <button id="feedback">Send Us Your Feedback</button>
            <button id="developers"><a id="link" href="contacts.php">Website Developers</a></button>
            <form id="form">
                <input placeholder="Feedback Type" id="feedbackType" list="types" type="list">
                <datalist id="types">
                    <option value="Suggestions"></option>
                    <option value="Report"></option>
                </datalist>
                <input placeholder="Name" id="name">
                <textarea placeholder="Send us your concern" id="message"></textarea>
                <input id="submit" type="submit">
            </form>
        </div>
        <script src="contact.js"></script>
    </body>
</html>
