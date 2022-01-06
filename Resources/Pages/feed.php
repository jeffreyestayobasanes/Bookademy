<?php
    session_start()  ;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="charset" content="utf-8">
        <title>Bookademy: Feed</title>
        <link rel="stylesheet" href="feed.css">
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
                    <a id="feedLink">
                        <div id="feed">
                            <div></div>
                            <p>Feed</p>
                        </div>
                    </a>
                    <a id="shareLink" href="share.php">
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
                <h1>Feed</h1>
                <iframe src="feedFrame.php"></iframe>
                <div id="divider"></div>
                <form action="feedCreate.php" method="post" target="_parent">
                    <input id="username" name="username" value="<?php echo $_SESSION['username']; ?>">
                    <input id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
                    <div id="lock" onclick="lock()"></div>
                    <textarea name="message" maxlength="100"></textarea>
                    <a id="refresh" href="feed.php"><button id="submit" type="submit">Post to Feed</button></a>
                </form>
            </div>
            <div id="theme" onclick="theme()"></div>
        </div>
    </body>
    <script src="feed.js"></script>
</html>