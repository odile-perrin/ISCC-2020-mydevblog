<?php $page = 'accueil'?>
<?php
$bdd = new PDO("mysql:host=localhost;dbname=blog-odile;charset=utf8", "root", "");
$articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_post DESC');
?>
<!DOCTYPE html>
<html>
<head>
   <title>Accueil</title>
   <meta charset="utf-8">
</head>
<body>
   <ul>
      <?php while($a = $articles->fetch()) { ?>
      <li><a href="page-articles.php?id=<?= $a['id'] ?>"><?= $a['titre'] ?></a></li>
      <?php } ?>
   <ul>
   <?php
    $bdd = new PDO ('mysql:host = localhost;dbname=blog-odile; charset=utf8', 'root', '');
    $articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_post DESC LIMIT 0,5');
    $lastBuildDate = $bdd->query('SELECT date_time_post FROM articles ORDER BY date_time_post DESC LIMIT 0,1');
    $lastBuildDate = $lastBuildDate->fetch()['date_time_post'];
?>
</body>
</html>