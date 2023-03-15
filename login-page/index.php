<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <link rel="shortcut icon" href="img/energie-eolienne.png">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>DeltaOne | Accueil</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/images.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/navbar2.0.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto+Flex:opsz,wght@8..144,100;8..144,300;8..144,500;8..144,700;8..144,900&display=swap" rel="stylesheet"/>
  
  </head>
  <header>
    <a href="index.html"><img class="logo" src="img/energie-eolienne.png" alt="logo"></a>
    <nav>
        <ul class="nav__links" >
            <li><a class="home" href="#" style="--i:1;">Accueil</a></li>
            <li><a href="1Projet.html"   style="--i:2;">Projet</a></li>
            <li><a href="1Apropos.html"  style="--i:3;">A propos</a></li>
        </ul>
    </nav>
    <a class="cta" href="1Contact.html">Contact</a>
    <p class="menu cta">Menu</p>
</header>
    <div class="overlay">
        <a class="close">&times;</a>
        <div class="overlay__content">
            <a href="#">Accueil</a>
            <a href="1Projet.html">Projet</a>
            <a href="1Apropos.html">A propos</a>
        </div>
    </div>
  <body>

    <br><br>
    
    <div class="contenu">
      <h1 id="homepage" class="titre">BIENVENUE CHEZ DELTAONE !</h1>
      <br>
      <div class="images">
        <div>
          <img src="img/eoliennes.png" alt="image" />
        </div>
      </div>
      <p>Delta One, c'est le nom d'une équipe de lycéens chargé de créer une éolienne démontable dans le cadre d'un projet, au sein de leur lycée</p>
      <a href="1Apropos.html"><button class="ensaavoirplus" type="button">En savoir plus</button></a>      
    </div>

    <br><br>

    <footer>
      <div class="credit">
        Créé par Sacha LAVILLE 2021-2023
      </div>
    </footer>

    <br>

    <!-- Script -->
    <script src="js/app.js"></script>
    <script type="text/javascript" src="js/mobile.js"></script>
    <script src="js/darkmode.js"></script>
    <script src="js/loader.js"></script>
    <script src="js/script.js"></script>

  </body>

  </html>