<?php
    session_start()  ;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="charset" content="utf-8">
        <title>Bookademy: Share a Book</title>
        <link rel="stylesheet" href="share.css">
        <link rel="shortcut icon" href="../Images/Icons/logo.png">
    </head>
    <body class="body">
        <div class="main" id="main">
            <div id="menu" class="menu show">
                <div id="menuBtn" onclick="expand()"></div>
                <div id="nav" class="nav">
                    <a id="libraryLink" href="library.php">
                        <div id="library">
                            <div></div>
                            <p>Library</p>
                        </div>
                    </a>
                    <a id="feedLink" href="feed.php">
                        <div id="feed">
                            <div></div>
                            <p>Feed</p>
                        </div>
                    </a>
                    <a id="shareLink">
                        <div id="share">
                            <div></div>
                            <p>Share a Book</p>
                        </div>
                    </a>
                    <a id="communityLink" href="community.php">
                        <div id="community">
                            <div></div>
                            <p>Community</p>
                        </div>
                    </a>
                    <a id="messagesLink" href="messages.php">
                        <div id="messages">
                            <div></div>
                            <p>Messages</p>
                        </div>
                    </a>
                    <a id="accountLink" href="account.php">
                        <div id="account">
                            <div></div>
                            <p>Account</p>
                        </div>
                    </a>
                    <a id="logoutLink" href="logout.php">
                        <div id="logout">
                            <div></div>
                            <p>Logout</p>
                        </div>
                    </a>       
                </div>
            </div>
            <div id="content">
                <h1>Share a Book</h1>
                <form action="shareCreate.php" method="post" target="_parent">
                    <input id="title" name="title" placeholder="Book Title" value="">
                    <input id="author" name="author" placeholder="Book Author" value="">
                    <input id="category" name="category" list="genres" placeholder="Book Category/Genre" onfocus="this.value=''" value="">
                    <datalist id="genres">
                        <option value="Horror">
                        <option value="Romance">
                        <option value="Comedy">
                        <option value="Law">
                        <option value="Fantasy">
                        <option value="Legend">
                    </datalist>
                    <textarea name="summary" placeholder="Tell us something interesting about this book!" maxlength="1500"></textarea>
                    <input id="link" name="coverlink" placeholder="Full-Size Cover Photo URL">
                    <a id="refresh" href="share.php"><button id="submit" type="submit">Share</button></a>
                </form>
            </div>
            <div id="theme" onclick="theme()"></div>
        </div>
    </body>
    <script src="share.js"></script>
</html>