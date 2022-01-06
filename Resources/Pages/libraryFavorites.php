<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            session_start();
            $database = new mysqli ('localhost', 'root', '', 'bookademy');
            $owner = $_SESSION['id'];
            $fetch = "SELECT * FROM books WHERE approval='$owner'";
            $result = $database->query($fetch);
        
            $var = 0;
            if ($result !== false && $result -> num_rows > 0){
                while($row=$result-> fetch_assoc()){
                    
                    $id = $row['id'];
                    $cover = $row['link'];
                    $title = $row['title'];
                    $author = $row['author'];
                
                    $div[$var] =  "<a href='libraryBookLookUp.php?id=$id' target='_blank' class='post' style='background-image:url($cover);' ></a>";
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
        float: left;
        position: relative;
        margin: 1% 0% 0% 3%;
        padding: 0;
        width: 20%;
        height: 60%;
        background-color: gray;
        border-style: solid;
        border-width: thin;
        border-color: gray;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .post:hover{
        transition: 1s;
        background-color: white;
    }
</style>