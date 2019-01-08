<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>R&M Transfer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="Assets/CSS/main.css" />
    <link rel="shortcut icon" href="Assets/Images/icone.ico" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="Assets/JS/main.js"></script>
</head>
<body>



 
<!-- <a href="#" id="btnanglais" onclick="anglais">Click Me</a><br/> -->




    <div class="container">
        <form id="contact" action="resultat" method="post" enctype="multipart/form-data">

            <h3>
                <img class="logo" id="logo" src="Assets/images/logo.png">
            </h3>
            <h4 class="francais">Transférez vos fichiers, simplement.</h4>
            <!-- <h4 class="anglais">Transfer your file, easily.</h4> -->

                <!-- Email Expediteur -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <label for="email" id="email" class="mdl-textfield__label francais">Votre email</label>
                <!-- <label for="email" id="email" class="mdl-textfield__label anglais">Your Email</label> -->
                <input class="mdl-textfield__input" type="text" id="mailE">
                <p class="errorMessage"></p>
            </div>

                <!-- Email Destinataire -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <label for="destinataire" id="destinataire" class="mdl-textfield__label francais">Email du destinataire</label>
                <!-- <label for="destinataire" id="destinataire" class="mdl-textfield__label anglais">Recipient Email</label> -->
                <input class="mdl-textfield__input" type="text" id="mailD"/>
                <p class="errorMessage"></p>
            </div>

                <!-- Le champ nom du fichier -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <label for="up" id="fileName" class="mdl-textfield__label francais">Nom du fichier</label>
                <!-- <label for="up" id="fileName" class="mdl-textfield__label anglais">Name of the file</label> -->
                <input class="mdl-textfield__input" type="text" name="fileName">
                <p class="errorMessage"></p>
            </div>

                <!-- Le bouton permettant de linker le fichier -->
            <div class="mdl-button mdl-button--primary mdl-button--icon mdl-button--file">
                <i class="material-icons ">attach_file</i>
                <input type="file" name="fichier_upload[]" multiple="multiple">
            </div>
                

                <!-- Le bouton envoyer -->
            <div> 
                <fieldset>
                        <button name="submitBtn" type="submit" id="contact-submit" data-submit="...Sending" class="francais mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Transférer
                    </button>
                    <!-- <button name="submitBtn" type="submit" id="contact-submit" data-submit="...Sending" class="anglais mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Transfer
                    </button> -->
                </fieldset>
            </div>

        </form>  
    </div> <!-- Fin div container -->

    <script type="text/javascript">

    // var Anglais = document.getElementsByClassName("anglais");
    // var BtnAnglais = document.getElementById("btnanglais");
   
    // BtnAnglais.addEventListener("click",function() {
    //     anglais();
    // });

    // function anglais(){
    //     console.log(Anglais);
    //     for (i =0; i<10000; i++){
    //         Francais.style.visibility['i']="hidden";
    //      Francais.style.display['i']="none";
    //     Anglais.style.visibility['i']="visible";
    //     Anglais.style.display['i']="visible";
        
    //     }
    // };

    // var Francais = document.getElementByClassName("francais");
    // var BtnFrancais = document.getElementById("btnfrancais");
    // BtnFrancais.addEventListener("click",function francais());
    
    // function francais(){
    //     Francais.style.visibility="hidden";
    //     Francais.style.display="none";
    // }
    
    </script>
</body>

</html>