<!DOCTYPE html>
<html>

<head>
    
    <?php
    require_once "functions/All_functions.php";
    $news = getNews(1, $_GET["id"]);
    $title = $news["title"];
    require_once "blocks/head.php";
    ?>

</head>

<body>
    
    <!-- HEADER -->
    
    <?php require_once "blocks/header.php"; ?>
    
    <!-- COLUMNS -->
    
    <div id="wrapper">
        <div id="leftCol">
            
            <?php
            
    
               
            echo '<div id="bigArticle">
                <img src="img/article_'.$news["id"].'.jpg" alt="article_'.$news["id"].'" title="article_'.$news["id"].'">
                <h2>'.$news["title"].'</h2>
                <p>'.$news["full_text"].'</p>
                
            </div>';
                
            
            
            ?>
               
        </div>
        
        <!-- RIGHT COLUMN -->
        
        <?php require_once "blocks/rightCol.php"; ?>
    </div>
    
    <!-- FOOTER -->
    
    <?php require_once "blocks/footer.php"; ?>
</body>

</html>