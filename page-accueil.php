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
<h2>Accueil</h2>
    <h3>Présentation</h3>
    <p>Bienvenu sur ce blog !<br>
Je m'appelle Odile et suis passionnée de cosmétiques. Si vous aimez le maquillage et la beauté, vous vous sentirez chez vous ici.
Venez explorer les dernières nouveautés en matière de beauté avec moi !
<br>Odile.<br><br>
    <h3>Mes derniers articles</h3>
      <?php while($a = $articles->fetch()) { ?>
      <a href="article.php?id=<?= $a['id'] ?>"><?= $a['titre'] ?></a><br>
      <?php } ?>

   <?php
    $bdd = new PDO ('mysql:host = localhost;dbname=blog-odile; charset=utf8', 'root', '');
    $articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_post DESC LIMIT 0,05');
    $lastBuildDate = $bdd->query('SELECT date_time_post FROM articles ORDER BY date_time_post DESC LIMIT 0,1');
    $lastBuildDate = $lastBuildDate->fetch()['date_time_post'];
?>
</body>
</html>