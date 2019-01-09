<?php
include('Connexion.php');

function insertName($ajoutDestinataire, $ajoutExpediteur,$cheminetNomDefinitif, $ajoutNomFichier) {
    global $bdd;

    $insert = $bdd->prepare ("INSERT INTO data(destinataire, expediteur, url_fichier, nom_fichier, `date`) VALUES (?,?,?,?,NOW())");
    $insert -> execute(array($ajoutDestinataire, $ajoutExpediteur, $cheminetNomDefinitif, $ajoutNomFichier));
    $insert ->fetchAll();
}