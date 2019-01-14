<?php
include('Connexion.php');

function insertName($ajoutDestinataire, $ajoutExpediteur, $cheminetNomDefinitif, $ajoutNomFichier, $idBDD) {
    global $bdd;

    $insert = $bdd->prepare ("INSERT INTO data(destinataire, expediteur, url_fichier, nom_fichier, id, `date`) VALUES (?,?,?,?,?,NOW())");
    $insert -> execute(array($ajoutDestinataire, $ajoutExpediteur, $cheminetNomDefinitif, $ajoutNomFichier, $idBDD));
    $insert ->fetchAll();
    echo "idBDD model insert name = " . $idBDD . "<br>";
}
echo "idBDD model = " . $idBDD . "<br>";

function recupereFichier($idBDD) {
    global $bdd;

    $requete = "SELECT `url_fichier`FROM `data` WHERE `id`= $idBDD";

    $reponse = $bdd->query($requete);
    $cheminBDD = $reponse->fetch();
    
    
    return $cheminBDD['url_fichier'];
}

//$cheminBDD = recupereFichier($idBDD);

// echo '<br>'.$cheminBDD;

