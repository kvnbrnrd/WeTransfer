<?php

// ========================================= ENREGISTRE Le FICHIER ===================================================

$cheminetnomTemporaire = $_FILES['fichier_upload']['tmp_name'];
// ex : S:\WampServeur\tmp\php6DC3.tmp

$extension=substr (strrchr ($_FILES['fichier_upload']['name'],"."), 1);
// ex : $extension = png ou gif..

$nouveauNom = $_POST['fileName'].'.'.$extension;
// ex : nomImage.png

$cheminetNomDefinitif = 'Assets/Stockage/'.$nouveauNom;
// ex : Assets/Stockage/nomImage.gif

$moveIsOk = move_uploaded_file($cheminetnomTemporaire, $nouveauNom);
// fonction PHP déplacer fichier = move_uploaded_file(cheminEtNomTemporaire, cheminEtNomDeDestination)


// ========================================= TRANSFORME EN ZIP ===================================================

// Instancie l'objet ZipArchive
$zip = new ZipArchive;
// Crée l'archive au moyen de méthode de l'objet ZipArchive
if ($zip->open('Assets/Stockage/'.$_POST['fileName'].'.zip', ZipArchive::CREATE) === TRUE)
{
    // Ajoute un fichier a l'archive $zip
    $zip->addFile($nouveauNom);
    // Ferme l'archive
    $zip->close();
    // Supprime le fichier a la racine
    unlink($nouveauNom);
}

if($moveIsOk){
  $message = "Le fichier est disponible pour téléchargement<br> à l'adresse suivante : ";//.$cheminetNomDefinitif
}
else{
  $message = "Suite à une erreur, le fichier n'a pas pu être transféré.";
}

// ========================================= AJOUT DANS BDD ===================================================

include('Models/resultatModel.php');

if (!empty(($_POST["expediteur"]) && ($_POST["destinataire"]) && ($_POST['fileName']))) {

  $ajoutExpediteur = $_POST["expediteur"];
  $ajoutDestinataire = $_POST['destinataire'];
  $ajoutNomFichier = $_POST["fileName"];

  insertName($ajoutDestinataire, $ajoutExpediteur, $cheminetNomDefinitif, $ajoutNomFichier);
}

include('Views/resultatView.php');