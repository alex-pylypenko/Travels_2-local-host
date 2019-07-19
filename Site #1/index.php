<!DOCTYPE html>
<html>

<head>
    
    <?php
    require_once "functions/All_functions.php";
    $title = "News about everything";
    require_once "blocks/head.php";
    $news = getNews(5, "");
    ?>

</head>

<body>
    
    <!-- HEADER -->
    
    <?php require_once "blocks/header.php"; ?>
    
    <!-- COLUMNS -->
    
    <div id="wrapper">
        <div id="leftCol">
            
            <?php
            
            for($i = 0; $i < count($news); $i++) {
                if ($i == 0) {
                    echo "<div id=\"bigArticle\">";
                }
                else {
                    echo "<div class=\"article\">";
                }
                echo '<img src="img/article_'.$news[$i]["id"].'.jpg" alt="article_'.$news[$i]["id"].'" title="article_'.$news[$i]["id"].'">
                <h2>'.$news[$i]["title"].'</h2>
                <p>'.$news[$i]["intro_text"].'</p>
                <a href="article.php?id='.$news[$i]["id"].'">
                    <div>Read more...</div>
                </a>
            </div>';
                if ($i % 2 == 0) {
                    echo "<div class=\"clear\"><br></div>";
                }
            }
            
            ?>
        
            
        </div>
        
        <!-- RIGHT COLUMN -->
        
        <?php require_once "blocks/rightCol.php"; ?>
    </div>
    
    <!-- FOOTER -->
    
    <?php require_once "blocks/footer.php"; ?>
</body>

</html>