<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Etat du transfert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="shortcut icon" href="Assets/Images/icone.ico" />
    <link rel="stylesheet" type="text/css" media="screen" href="Assets/CSS/main.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand justify-content-md-center">
        <a href="https://web-developpement.eu/MesProjets/WeTransfer/index.php"><img class="logoH" id="logoH" src="Assets/Images/logo.png"></a>
        </nav>
    </header>
    
    <div class="container">
        <div id="contact" >
            <img class="pickle" src="Assets/Images/pickle.png" alt="">
            <h3>Rubber baby buggy bumpers !</h3>
            <p class="message"><?= $message?></p>
            <form action="home"> 
                <fieldset>
                    <button name="retour" src="" class="francais mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Retour à l'accueil
                    </button>
                </fieldset>
            </form>
        </div> <!-- Fin Div contact -->
    </div> <!-- Fin Div container -->

</body>
</html>