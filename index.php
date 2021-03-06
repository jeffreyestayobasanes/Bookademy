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
        <title>Welcome to Bookademy</title>
        <link rel="stylesheet" href="index.css">
        <link rel="shortcut icon" href="Resources/Images/Icons/logo.png">
    </head>
    <body class="body" id="background">
        <input id="mode" value="<?php echo $_SESSION['theme']; ?>" style="display:none;">
        <div class="nav" id="nav">
            <image id="logo" src="Resources/Images/Icons/logo.png" draggable="false"></image>
            <a id="home">Home</a>
            <a id="signUp" href="Resources/Pages/signUp.php">Sign Up</a>
            <a id="about" href="Resources/Pages/about.php">About</a>
            <a id="contact" href="Resources/Pages/contact.php">Contact Us</a>
            <circle></circle>
        </div>
        <image id="moreHint" src="Resources/Images/Icons/down.png"></image>
        <a id="theme" href="indexRefresh.php"></a>
        <div class="content1">
            <image id="book1A" class="book1A load" src="Resources/Images/Books/sample1.jpg"></image>
            <image id="book1B" class="book1B load" src="Resources/Images/Books/sample3.jpg"></image>
            <image id="book1C" class="book1C load" src="Resources/Images/Books/sample2.jpg"></image>
            <h1 id="heading1">Bookademy at Your Service</h1>
            <p id="summary1">Welcome to Bookademy! Get started to see your favorite books, information about them, and to see what's the most recommended book by other users!</p>
        </div>
        <div class="content2">
            <image id="book2A" class="book2A load" src="Resources/Images/Books/sample1.jpg"></image>
            <image id="book2B" class="book2B load" src="Resources/Images/Books/sample3.jpg"></image>
            <image id="book2C" class="book2C load" src="Resources/Images/Books/sample2.jpg"></image>
            <h1 id="heading2">Editor's Choice Books</h1>
            <p id="summary2">Read books that are read and chosen by the Website Developers and are verified to be entertaining. The Moderators and Editors have proofread every book for your satisfaction.</p>
        </div>
        <div class="content3">
            <image id="book3A" class="book3A load" src="Resources/Images/Books/sample1.jpg"></image>
            <image id="book3B" class="book3B load" src="Resources/Images/Books/sample3.jpg"></image>
            <image id="book3C" class="book3C load" src="Resources/Images/Books/sample2.jpg"></image>
            <h1 id="heading3">Share Your Ideal Book</h1>
            <p id="summary3">Share to us and on our Feed books you have read that you think others might love as well. Tell us what we can read from the book and why you love reading it.</p>
        </div>
        <div class="content4">
            <image id="book4A" class="book4A load" src="Resources/Images/Books/sample1.jpg"></image>
            <image id="book4B" class="book4B load" src="Resources/Images/Books/sample3.jpg"></image>
            <image id="book4C" class="book4C load" src="Resources/Images/Books/sample2.jpg"></image>
            <h1 id="heading4">Up-to-Date Books</h1>
            <p id="summary4">We, the Developers, Editors, and Moderators regularly update the books in the library so you won't miss anything popular and on trend! We add books depending on your shared ideal books for others to read.</p>
        </div>
    </body>
    <script src="index.js"></script>
</html>