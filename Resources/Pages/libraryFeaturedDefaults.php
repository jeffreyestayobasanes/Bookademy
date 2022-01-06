<?php
    $database = new mysqli('localhost', 'root', '');
    $database->query("CREATE DATABASE IF NOT EXISTS bookademy"); 
    $database->query("USE bookademy");
    $database->query("CREATE TABLE `bookademy`.`books` ( `id` INT(3) NOT NULL AUTO_INCREMENT , `title` VARCHAR(100) NOT NULL , `author` VARCHAR(100) NOT NULL , `summary` VARCHAR(500) NOT NULL , `link` VARCHAR(60000) NOT NULL , `approval` VARCHAR(50) NOT NULL , `category` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");

    $title = array(
        "Harry Potter and the Hopefully Benign Colon Polyp",    
        "The Girl Who Takes an Eye for an Eye",
        "The Turn of the Screw",
        "The Testament"
    );
    $author = array(
        "J. K. Rowling",    
        "David Lagercrantz",
        "Henry James",
        "John Grisham"
    );
    $summary = array(
        "Years ago some comedian had a skit discussing whether or not Romeo and Juliet could have made it long term instead of, you know, dying when they were fourteen. He had a few scenarios wherein they fought over regular people stuff, like taking out the garbage.  This set of Harry Potter titles reminds me of that.",    
        "Lisbeth Salander is serving time in Flodberga Prison. When a sadistic gang leader nicknamed Benito starts to torture Faria, a young Bangladeshi prisoner, Salander finds it impossible not to intervene. Now a target of Benito and her gang, Salander’s time in prison is further complicated by news from her old guardian, who tells her she may have been a subject in a secret experiment known as the Registry. She enlists her friend Mikael Blomkvist, crusading editor of Millennium magazine, to help her look into it.",
        "The Turn of the Screw traces the story of a young, inexperienced governess who is charged with the care of Miles and Flora, two small orphaned children abandoned by their uncle at his grand country house. The governess sees the figure of an unknown man on the tower and his face at the window; she also sees a woman.",
        "The Testament is the story of Troy Phelan, his will, and the struggle over the distribution of his estate. Troy commits suicide and leaves behind a controversial will. The estimated value of his assets at the time of his death was approximately eleven billion dollars."
    );
    $coverlink = array(
        "http://cdn.someecards.com/someecards/filestorage/zsmXTSQ90fgrown_up_harry_potter_benign_polyp.jpg",      
        "https://i.pinimg.com/originals/21/49/d3/2149d3f196f16aded01c1d8a70edcec2.jpg",
        "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1567172392l/12948._SY475_.jpg",
        "https://g.christianbook.com/g/slideshow/9/93800/main/93800_1_ftc_dp.jpg"
    );
    $approval = array(
        "Default",    
        "Default",
        "Default",
        "Default"
    );
    $category = array(
        "Comedy",    
        "Fantasy",
        "Horror",
        "Law"
    );


    $queryPosts = "SELECT * FROM books WHERE title='Harry Potter and the Hopefully Benign Colon Polyp'";
    $result = $database->query($queryPosts);

    $var = 0;
    $presence = 0  ;

    while($row=$result-> fetch_assoc()){
        if( "Harry Potter and the Hopefully Benign Colon Polyp"==$row['title'] ){
            $presence = 1;
        }
    }
    

    if ($presence==0){
        $createShare = $database->prepare("INSERT INTO books (title, author, summary, link, approval, category) VALUES(?, ?, ?, ?, ?, ?)");
        $createShare->bind_param("ssssss", $title[0], $author[0], $summary[0], $coverlink[0], $approval[0], $category[0]);
        $createShare->execute();
        $createShare = $database->prepare("INSERT INTO books (title, author, summary, link, approval, category) VALUES(?, ?, ?, ?, ?, ?)");
        $createShare->bind_param("ssssss", $title[1], $author[1], $summary[1], $coverlink[1], $approval[1], $category[1]);
        $createShare->execute();
        $createShare = $database->prepare("INSERT INTO books (title, author, summary, link, approval, category) VALUES(?, ?, ?, ?, ?, ?)");
        $createShare->bind_param("ssssss", $title[2], $author[2], $summary[2], $coverlink[2], $approval[2], $category[2]);
        $createShare->execute();
        $createShare = $database->prepare("INSERT INTO books (title, author, summary, link, approval, category) VALUES(?, ?, ?, ?, ?, ?)");
        $createShare->bind_param("ssssss", $title[3], $author[3], $summary[3], $coverlink[3], $approval[3], $category[3]);
        $createShare->execute();
    }
            
?>