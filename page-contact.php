<?php $page = 'contact'?>
<html>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">

<?php
$bdd = new PDO("mysql:host=localhost;dbname=blog-odile;charset=utf8", "root", "");
if(isset($_POST['nom'], $_POST['mail'], $_POST['messag'])) {
   if(!empty($_POST['nom']) AND !empty($_POST['mail'])) {
      
      $nom1 = htmlspecialchars($_POST['nom']);
      $mail1 = htmlspecialchars($_POST['mail']);
      $message1 = htmlspecialchars($_POST['messag']);
      $ins = $bdd->prepare('INSERT INTO contact (nom, mail, messag, date_time_post) VALUES (?, ?, ?, NOW())');
      $ins->execute(array($nom1, $mail1, $message1));
      $message = 'Votre message a bien été envoyé !';

   } else {
      $message = 'Veuillez remplir tous les champs';
   }
}
?>

<title>Contact</title>
    <!DOCTYPE html>
<html>
<head>
   <title>Rédaction</title>
   <meta charset="utf-8">
</head>
<body>
   <form method="POST">
   <fieldset>
   <input type="text" name="nom" placeholder="Votre nom et prénom" /><br />
      <input type="text" name="mail" placeholder="Votre e-mail" /><br />
      <textarea name="messag" placeholder="Votre message"></textarea><br />
      <input type="submit" value="Envoyer" />
    </fieldset> 
   </form>
   <br />
   <?php if(isset($message)) { echo $message; } ?>
</body>
</html>