<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>We Transfer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Assets/CSS/main.css" />
</head>
<body>

    <form action="recup_donnees.php" method="post"  enctype="multipart/form-data">
        
        <label for="up" class="label">Nom du fichier après upload</label><br><br>

        <input type="text" name="fileName" placeholder="entrez nouveau nom">
        
        <input type="file" name="fichier_upload">
        
        <input type="submit" value="enregistrer">

    </form>


   <script src="Assets/JS/main.js"></script> 
</body>
</html>