<?php
include('Connexion.php');

function recupereFichier($idBDD) {
    global $bdd;

    $requete = $bdd->prepare("SELECT url_fichier FROM data where id = ?");

    if ($requete->execute(array($idBDD))) {
        while ($donnee = $requete->fetch()) {

            $cheminBDD = $donnee['url_fichier'];
        
        }
    }
    return $cheminBDD;
}

