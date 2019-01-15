<?php
include('Models/telechargerModel.php');

// ========================================= RECUPERE DEPUIS LA BDD ============================================

if (isset($idBDD)) {

    $cheminBDD = recupereFichier($idBDD);

}
else{

    $message = "Suite à une erreur, le fichier n'a pas pu être telecharger.";

}

include('Views/telechargerView.php');