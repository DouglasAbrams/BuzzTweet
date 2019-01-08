<?php
    header("refresh: 300;");
?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BuzzTweet</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link type="text/css" rel="stylesheet" href="stylesheets/index.css">
        <link rel="shortcut icon" type = "image/png" href="favicon2.png" />
    </head>
    <body>
     <div id = "nav">
        <div id = "top">
            <span id = "name"><span id = "Name_Buzz">Buzz</span>
            <span id = "Name_Tweet">Tweet</span></span>
        </div>
            

            <form id = "searchbar" action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
            </form>
             <img id = "forNav" src = "favicon.png", alt = "oh">

    </div>
   
<!--
        <div id = "logo">

        </div>
-->

        
        
        <div id = "main">
                
            
            <?php include 'getData.php'; ?>
              

            
        </div>
 
        
    </body>
</html>
