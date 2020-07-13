<?php $page = 'contact'?>
<html>
<link rel="stylesheet" href="style.css">
<meta charset="utf-8">

<title>Contact</title>

    <body>
    <fieldset>
        <label for="nom">Votre nom</label>
    <div id="nom">
        <input type="text" name="nom" id="nom">
    </div>

    
        <label for="mail">Votre mail</label>
    <div id="mail">
        <input type="text" name="mail" id="mail">
    </div>

        <label for="message">Message</label>
    <div id="message">
        <textarea id="message"></textarea>
    </div>

    <input type="submit" value="Envoyer">
    </fieldset> 

    </body>
    </html>