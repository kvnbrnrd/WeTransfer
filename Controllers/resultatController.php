<?php

// var_dump($_POST);
var_dump($_POST['fileName']);
var_dump($_FILES);


 $cheminetnomTemporaire = $_FILES['fichier_upload']['tmp_name'];

// $cheminetNomDefinitif = 'upload/'.$_FILES['fichier_upload']['name'];

// recup extension du fichier


$extension=substr (strrchr ($_FILES['fichier_upload']['name'],"."), 1);

$nouveauNom = $_POST['fileName'].'.'.$extension;

$cheminetNomDefinitif = 'upload/'.$nouveauNom;

$moveIsOk = move_uploaded_file($cheminetnomTemporaire, $cheminetNomDefinitif);

if($moveIsOk){
$message = "le fichier à été uploadé dans ".$cheminetNomDefinitif;
}
else{
  $message = "Suite à une erreur, le fichier n'a pas été uploadé !!";
}

include('Views/resultatView.php');