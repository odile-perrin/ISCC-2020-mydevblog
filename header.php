<?php 
echo'<link href="style/style.css" rel="stylesheet" type = "text/css">'; ?>
<!doctype html>
<html>
<meta charset="utf-8">
<header>
        <center>
        <div id="blocimage"> 
        <BR><h1>Blog d'Odile</h1>
        </div>
    
        <nav class=menu1>
            
        <a href="http://localhost/ISCC/MyDevBlog/index.php?page=accueil">Accueil</a>
    &nbsp;&nbsp;&nbsp;<a href="http://localhost/ISCC/MyDevBlog/index.php?page=articles">Articles</a>
    &nbsp;&nbsp;&nbsp;<a href="http://localhost/ISCC/MyDevBlog/index.php?page=contact">Contact</a>
    <BR><BR>
    </center>
    </nav>

    </header>
    <body>
    <?php
    if($_GET)
    {
    if($_GET["page"]== "accueil")
    {
        include 'page-accueil.php';
    }
    if($_GET["page"]== "articles")
    {
        include 'page-articles.php';
    }
    if($_GET["page"]== "contact")
    {
        include 'page-contact.php';
    }
    }
    ?>
    </body>
    </html>
