<?php $page = 'accueil'?>

<!DOCTYPE html>
<html>
<head>
   <title>Accueil</title>
   <meta charset="utf-8">
</head>
<body>
<h2>Accueil</h2>
    <h3>Présentation</h3>
    <p>Bienvenue sur ce blog !<br>
Nous sommes Eden et Odile, passionnées de cosmétiques, nous avons choisi d'ouvrir ce blog pour vous aider. Si vous aimez le maquillage et la beauté, vous vous sentirez chez vous ici.
Venez explorer les dernières nouveautés en matière de beauté avec nous !
<br><br>Eden et Odile.<br><br>
    <div class="bloc">
        <center>
    <h6>Mes derniers articles</h6>
      <?php 
      $bdd = new PDO("mysql:host=localhost;dbname=blog-odile;charset=utf8", "root", "");
      $articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_post DESC LIMIT 0,5');
      $lastBuildDate = $bdd->query('SELECT date_time_post FROM articles ORDER BY date_time_post DESC LIMIT 0,1');
        $lastBuildDate = $lastBuildDate->fetch()['date_time_post'];
      
      while($a = $articles->fetch()) { ?>
      <a href="article.php?id=<?= $a['id'] ?>"><?= $a['titre'] ?></a><br>
      <?php } ?>
      </center>
      </div>
</body>
</html>