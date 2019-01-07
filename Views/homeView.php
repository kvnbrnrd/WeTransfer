<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upload fichier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="Assets/CSS/main.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="Assets/JS/main.js"></script>
</head>
<body>
        <div class="container">
            <form id="contact" action="resultat" method="post">
                <h3>
                    <img id="logo" class="logo" src="Assets/images/logo.png">
                </h3>
                <h4>Transférez vos fichiers</h4>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" />
                        <label for="email" id="email" class="mdl-textfield__label">Votre email</label>
                        <p class="errorMessage"></p>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text"/>
                        <label for="destinataire" id="destinataire" class="mdl-textfield__label">Envoyer à</label>
                        <p class="errorMessage"></p>
                </div>
                <div class="mdl-button mdl-button--primary mdl-button--icon mdl-button--file">
                    <i class="material-icons">attach_file</i><input type="file" id="uploadBtn">
                </div>
                <div>
                    <fieldset>
                    <button name="submitBtn" type="submit" id="contact-submit" data-submit="...Sending" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        Transférer
                    </button>
                </fieldset>
                </div>
        </div>
            </form>  

</body>
</html>