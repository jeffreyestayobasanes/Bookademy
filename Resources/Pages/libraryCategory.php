<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
            session_start();

            $url = array(
                "../Images/Icons/bookHorror.png",
                "../Images/Icons/bookRomance.png",
                "../Images/Icons/bookComedy.png",
                "../Images/Icons/bookLaw.png",
                "../Images/Icons/bookFantasy.png",
                "../Images/Icons/bookLegend.png"
            );

            $cat = array(
                "horror",
                "romance",
                "comedy",
                "law",
                "fantasy",
                "legend"
            );

            $var = 0;
            $var2 = 0 ;
            $length = count($url);
            $length = $length-1;
            while( $length > -1){
                $div[$var] =  "<a href='libraryCategoryLookUp.php?id=catgerory[$var]' target='_self' class='post' style='background-image:url($url[$var]); ?>)' ></a>";
                $length = $length-1;
                $var = $var+1;
            }
            
            $horror = $_SESSION['horror'];
            $romance = $_SESSION['romance'];
            $comedy = $_SESSION['comedy'];
            $law = $_SESSION['law'];
            $fantasy = $_SESSION['fantasy'];
            $legend = $_SESSION['legend'];

            if ($horror==1){ echo $div[0]; }
            if ($romance==1){ echo $div[1]; }
            if ($comedy==1){ echo $div[2]; }
            if ($law==1){ echo $div[3]; }
            if ($fantasy==1){ echo $div[4]; }
            if ($legend==1){ echo $div[5]; }
                
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
        background-color: transparent;
        border-style: none;
        background-size: contain;
        background-repeat: no-repeat;
        outline: none;
    }
    .post:hover{
        transition: 1s;
        background-color: white;
    }
</style>