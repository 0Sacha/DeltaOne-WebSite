<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
  <header>CONTACTEZ L'ÉQUIPES DE DELTAONE !</header>
  
  <form class="form-contact" >

    Nom/Prenoms : <input type="text" placeholder="Ton Nom / Prénom"><br>

    email : <input type="email" placeholder="Entre ton email / adresse mail"><br>

    numeros de téléphone : <input type="number" placeholder="Entre ton numéros de téléphone"><br>

    ton message : <input type="text" placeholder="Eris ton message"><br>

    <button class="button-contact">Envoyé</button>

  </form>
    <?php
    $retour = mail('sacha.ultraman@gmail.com', 'Envoi depuis la page Contact', $_POST['mesasage'], 'From: fff@fff.fr');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    ?>
</body>
</html>