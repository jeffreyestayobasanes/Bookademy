<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bookademy: Book Details</title>
        <link rel="shortcut icon" href="../Images/Icons/logo.png">
    </head>
    <body>
        <?php
            session_start();
            $id = $_GET['id'];
            $database = new mysqli ('localhost', 'root', '', 'bookademy');
            $fetch = "SELECT * FROM books WHERE id='$id'";
            $result = $database->query($fetch);
        
            $var = 0;
            if ($result !== false && $result -> num_rows > 0){
                while($row=$result-> fetch_assoc()){
                    
                    $cover = $row['link'];
                    $title = $row['title'];
                    $author = $row['author'];
                    $summary = $row['summary'];
                    $category = $row['category'];
                    
                    $div[$var] =  "
                    <div class='post'>
                        <div class='img' style='background-image:url($cover);'></div>
                        <div class='title'>$title</div>
                        <div class='author'>by: $author</div>
                        <div class='category'>Category: $category</div>
                        <div class='summary'>$summary</div>
                    </div>"
                    ;
                    $var=$var+1;
                }
            }
        
            for( $i=$var-1; $i>=0; $i-- ){
                echo $div[$i];
            }
            $database->close();
        ?>
    </body>
</html>
<style>
    body{
        float: left;
        margin: 0;
        padding: 0;
        width: 98vw;
        height: 100vh;
        background-color: transparent;
        opacity: 1.0;
        animation-name: fade;
        animation-duration: 2s;
        animation-iteration-count: 1;
        animation-timing-function: ease-in-out;
    }
    @keyframes fade{
        0% { opacity: 0; }
        50% { opacity: 1.0; }
    }
    .post{
        margin: 2% 0% 0% 5%;
        padding: 0;
        width: 90vw;
        height: 90vh;
        background-color: transparent;
        border-style: none;
        border-width: thin;
        border-color: gray;
    }
    .post:hover{
        transition: 1s;
        background-color: lightgray;
    }
    .post .img{
        background-size: contain;
        background-repeat: no-repeat;
        float: left;
        position: absolute ;
        margin: 5% 0% 0% 0.5%;
        padding: 0;
        width: 25vw;
        height: 40vw;
        background-color: transparent;
    }
    .post .title{
        position: absolute ;
        margin-top: 5%  ;
        margin-left: 28%;
        padding: 0;
        width: 60vw;
        height: auto  ;
        background-color: transparent  ;
        font-size: 2vw;
        color: #373737;
        text-align: center;
        text-align: justify-all;
        word-break: break-all;
    }
    .post .author{
        position: absolute;
        margin-top: 8%  ;
        margin-left: 28%;
        padding: 0;
        width: 60vw;
        height: auto  ;
        background-color: transparent  ;
        font-size: 2vw;
        color: #373737;
        text-align: center;
        text-align: justify-all;
        word-break: break-all;
    }
    .post .category{
        position: absolute;
        margin-top: 11%  ;
        margin-left: 28%;
        padding: 0;
        width: 60vw;
        height: auto  ;
        background-color: transparent  ;
        font-size: 2vw;
        color: #373737;
        text-align: center;
        text-align: justify-all;
        word-break: break-all;
    }
    .post .summary{
        position: absolute;
        margin-top: 15%  ;
        margin-left: 28%;
        padding: 0;
        width: 60vw;
        height: auto  ;
        background-color: transparent  ;
        font-size: 2vw;
        color: #373737;
        text-indent: 2em;
        text-align: justify;
        word-break: break-all;
    }
</style>