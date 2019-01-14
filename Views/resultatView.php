<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Etat du transfert</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="Assets/CSS/main.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand justify-content-md-center">
        <img class="logoH" id="logoH" src="Assets/Images/logo.png">
        </nav>
    </header>
    
    <div class="container">
        <div id="contact" >
            <h3><img class="logo" id="logo" src="Assets/Images/logo.png"></h3>
            <h1>État du téléchargement</h1>
            <p><?= $message?></p>
        </div>  
    </div>
</html>
</body>