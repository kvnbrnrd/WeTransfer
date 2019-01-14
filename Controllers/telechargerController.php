<?php

include('Models/telechargerModel.php');
// ========================================= RECUPERE DEPUIS LA BDD ===================================================

if (isset($_GET['id'])) {

    $idBDD = $_GET['id'];

    $cheminBDD = recupereFichier($idBDD);

    $message = $cheminBDD;
    //$message = "Le fichier est disponible pour téléchargement<br> : <a href=".$cheminBDD.">ICI</a>";
    echo "chemin BDD : " . $cheminBDD . "<br>";
    
}
else{
    $message = "Suite à une erreur, le fichier n'a pas pu être telecharger.";
}

include('Views/telechargerView.php');