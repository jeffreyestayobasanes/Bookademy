<?php
    session_start()  ;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="charset" content="utf-8">
        <title>Bookademy: Messages</title>
        <link rel="stylesheet" href="messages.css">
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
                    <a id="messagesLink">
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
                <h1>Messages</h1>
                <div id="iframeButtons">
                    <a href="messagesRX.php" target="loadMessages" id="rx" onclick="rx()">Received</a>
                    <a href="messagesTX.php" target="loadMessages" id="tx" onclick="tx()">Sent</a>
                    <iframe id="messages" src="messagesRX.php" name="loadMessages"></iframe>
                </div>
                <div id="divider"></div>
                <form action="messagesCreate.php" method="post" target="_parent">
                    <input id="email" name="rxEmail" placeholder="Email Address" value="">
                    <textarea name="message" placeholder="Send this person a hello message so you can get along." maxlength="100"></textarea>
                    <a id="refresh" href="messages.php"><button id="submit" type="submit">Send</button></a>
                </form>
            </div>
            <div id="theme" onclick="theme()"></div>
        </div>
    </body>
    <script src="messages.js"></script>
</html>