<!doctype html>
<html>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<header>
        <center>
            <img src="article-beaute-maquillage-clean-4.jpg" alt="Bannière mydevblog"
            width="959.33"
            height="354.67">
        <BR><h1>Blog d'Odile</h1>
        <a href="http://localhost/ISCC/MyDevBlog/index.php?page=accueil">Accueil</a>
    &nbsp;&nbsp;&nbsp;<a href="http://localhost/ISCC/MyDevBlog/index.php?page=articles">Articles</a>
    &nbsp;&nbsp;&nbsp;<a href="http://localhost/ISCC/MyDevBlog/index.php?page=contact">Contact</a>
    <BR><BR>
    </center>
    </header>
    <body>
    <?php
    if($_GET)
    {
    if($_GET["page"]== "accueil")
    {
        echo "<h1>Accueil</h1>";
        include 'page-accueil.php';
    }
    if($_GET["page"]== "articles")
    {
        echo "<h1>Articles</h1>";
        include 'page-articles.php';
    }
    if($_GET["page"]== "contact")
    {
        echo "<h1>Contact</h1>";
        include 'page-contact.php';
    }
    }
    ?>
    </body>
    </html>
