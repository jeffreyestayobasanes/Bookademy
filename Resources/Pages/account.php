<?php
    session_start()  ;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="charset" content="utf-8">
        <title>Bookademy: Account</title>
        <link rel="stylesheet" href="account.css">
        <link rel="shortcut icon" href="../Images/Icons/logo.png">
    </head>
    <style>
        #avatar {
            background-image: url(<?php echo $_SESSION['avatar']; ?>);
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
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
                    <a id="messagesLink" href="messages.php">
                        <div id="messages">
                            <div></div>
                            <p>Messages</p>
                        </div>
                    </a>
                    <a id="accountLink">
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
                <h1>Account</h1>
                <div id="avatar"></div>
                <a id="delLink" href="deleteAccount.php"><button>Delete Account</button></a>
                <p id="delDesc">This will permanently delete your account, but not your contents like posts and messages.</p>
                
                <p id="name">Name: <?php echo $_SESSION['fullname']; ?></p>
                <p id="nameDesc">This is your real fullname but is not visible across Bookademy. At default, this is the same as your username.</p>
                
                <p id="username">Username: <?php echo $_SESSION['username']; ?></p>
                <p id="usernameDesc">This is your username that is visible across Bookademy. You can be creative in making your username.</p>

                <p id="email">Email: <?php echo $_SESSION['email']; ?></p>
                <p id="emailDesc">Your email is unique and no one else can use it to create an account although deleting your account will let them do so.</p>
                
                <p id="sex">Gender: <?php echo $_SESSION['sex']; ?></p>
                <p id="sexDesc">Your gender is visible across Bookademy so people won't get confused in case you have a completely different username.</p>

                <p id="privacy">Privacy: <?php echo $_SESSION['privacy']; ?></p>
                <p id="privacyDesc">You can choose to be visible to other users in the community and Active People's list or not. You can choose between Public or Private.</p>
            
                <a id="editLink" href="accountEdit.php"><button>Edit Account</button></a>
                <a id="reset" href="signUpSex.php" targer="_parent"><button>Re-Setup Account</button></a>
            </div>
            <div id="theme" onclick="theme()"></div>
        </div>
    </body>
    <script src="account.js"></script>
</html>