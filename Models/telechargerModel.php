<?php
include('Connexion.php');

$idBDD = 6;

function recupereFichier($idBDD) {
    global $bdd;

    $requete = "SELECT `url_fichier`FROM `data` WHERE `id`= $idBDD";

    $reponse = $bdd->query($requete);

    $cheminBDD = $reponse->fetch();
    
    return $cheminBDD['url_fichier'];
}

