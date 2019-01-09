<?php

include('Models/telechargerModel.php');

if (isset($_GET['id'])){

    $idBDD=$_GET['id'];
    
    
    if (file_exists($telecharge)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($telecharge).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($telecharge));
        readfile($telecharge);
        exit;
    }
    }

include('Views/telechargerView.php');