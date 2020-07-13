<?php $page = 'accueil'?>
<?php
$bdd = new PDO("mysql:localhost;dbname=blog-odile;charset=utf8", "root", "");
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
</body>
</html>
    </html>