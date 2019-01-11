<?php
include('Connexion.php');
$idBDD = 6;
function recupereFichier($idBDD) {
    global $bdd;

    $requete = "SELECT `url_fichier`FROM `data` WHERE `id`=6";

    $reponse = $bdd->query($requete);
    $cheminBDD = $reponse->fetch();
    
    
    return $cheminBDD['url_fichier'];
}

$cheminBDD = recupereFichier($idBDD);

echo $cheminBDD;

recupereFichier($idBDD);



