<?php
    include 'libraryFeaturedDefaults.php' ;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="charset" content="utf-8">
        <title>Bookademy: Library</title>
        <link rel="stylesheet" href="library.css">
        <link rel="shortcut icon" href="../Images/Icons/logo.png">
    </head>
    <body class="body">
        <div class="main" id="main">
            <div id="menu" class="menu show">
                <div id="menuBtn" onclick="expand()"></div>
                <div id="nav" class="nav">
                    <a id="libraryLink">
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
                <form id="search">
                    <div id="searchImg"></div>
                    <input id="searchPerson" placeholder="Search here" name="searchPerson">
                    <a id="searchBtn" type="submit">Search</a>
                </form>
                <div id="buttons">
                    <a id="featured" onclick="featured()" href="libraryFeatured.php" target="frameContent">Featured</a>
                    <a id="category" onclick="category()" href="libraryCategory.php" target="frameContent">Category</a>
                    <a id="favorite" onclick="favorite()" href="libraryFavorites.php" target="frameContent">Favorite</a>
                </div>
                <circle id="circle"></circle>
                <iframe id="frameContent" name="frameContent" src="libraryFeatured.php"></iframe>
            </div>
            <div id="theme" onclick="theme()"></div>
        </div>
    </body>
    <script src="library.js"></script>
</html>