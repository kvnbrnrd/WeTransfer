<?php
include('Connexion.php');

function insertName($ajoutDestinataire, $ajoutExpediteur,$cheminetNomDefinitif, $ajoutNomFichier) {
    global $bdd;

    $insert = $bdd->prepare ("INSERT INTO data(destinataire, expediteur, url_fichier, nom_fichier, `date`) VALUES (?,?,?,?,NOW())");
    $insert -> execute(array($ajoutDestinataire, $ajoutExpediteur, $cheminetNomDefinitif, $ajoutNomFichier));
    $insert ->fetchAll();
}

$idBDD = 6;

function recupereFichier($idBDD) {
    global $bdd;

    $requete = "SELECT `url_fichier`FROM `data` WHERE `id`= $idBDD";

    $reponse = $bdd->query($requete);
    $cheminBDD = $reponse->fetch();
    
    
    return $cheminBDD['url_fichier'];
}

$cheminBDD = recupereFichier($idBDD);

echo '<br>'.$cheminBDD;

recupereFichier($idBDD);