<?php
    session_start()  ;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="charset" content="utf-8">
        <title>Bookademy: Community</title>
        <link rel="stylesheet" href="community.css">
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
                    <a id="communityLink">
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
                <h1>Community</h1>
                <form id="search">
                    <div id="searchImg"></div>
                    <input id="searchPerson" placeholder="Search your friends here" name="searchPerson">
                    <button id="searchBtn" type="submit">Search</button>
                </form>
                <iframe id="displayFrame" name="display" src="newInCommunity.php"></iframe>
                <p id="active">Active People</p>
                <iframe id="activeList" name="active" src="communityActiveList.php"></iframe>
            </div>
            <div id="theme" onclick="theme()"></div>
        </div>
    <script src="community.js"></script>
    </body>
</html>