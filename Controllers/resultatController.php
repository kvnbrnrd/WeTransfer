<?php

// var_dump($_POST['fileName']);
// var_dump($_FILES);

$cheminetnomTemporaire = $_FILES['fichier_upload']['tmp_name'];
// ex : S:\WampServeur\tmp\php6DC3.tmp

$extension=substr (strrchr ($_FILES['fichier_upload']['name'],"."), 1);
// ex : $extension = png ou gif..

$nouveauNom = $_POST['fileName'].'.'.$extension;
// ex : nomImage.png

$cheminetNomDefinitif = 'Assets/Stockage/'.$nouveauNom;
// ex : Assets/Stockage/nomImage.gif

$moveIsOk = move_uploaded_file($cheminetnomTemporaire, $cheminetNomDefinitif);
// fonction PHP déplacer fichier = move_uploaded_file(cheminEtNomTemporaire, cheminEtNomDeDestination)

if($moveIsOk){
  $message = "le fichier à été uploadé dans ".$cheminetNomDefinitif;
}
else{
  $message = "Suite à une erreur, le fichier n'a pas été uploadé !!";
}

// ======================== AJOUT DANS BDD ==========================

include('Models/resultatModel.php');

if (!empty(($_POST["expediteur"]) && ($_POST["destinataire"]) && ($_POST['fileName']))) {

  $ajoutExpediteur = $_POST["expediteur"];
  $ajoutDestinataire = $_POST['destinataire'];
  $ajoutNomFichier = $_POST["fileName"];

  insertName($ajoutDestinataire, $ajoutExpediteur, $cheminetNomDefinitif, $ajoutNomFichier);
}

include('Views/resultatView.php');