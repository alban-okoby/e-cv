<?php

    require '../../../data/database.php';

    $anneeError = $postError = $desciptionError = $annee = $post = $description = "";

    $isSuccess = $isUploadSuccess = true;

    if(!empty($_POST)){
        $annee          = cleanInput($_POST['annee']);
        $post           = cleanInput($_POST['post']);
        $description    = cleanInput($_POST['description']);
       
        $isSuccess      = true;
        $isUploadSuccess = false;

        if(empty($annee)){
            $anneeError = 'Le nom ne peut être vide !';
            $isSuccess = false;
        }
        if(empty($post)){
            $projectImageError = 'Attention ! remplissez le post';
            $isSuccess = false;
        }
        if(empty($description)){
            $desciptionError = 'Attention ! veuillez remplir la description';
            $isSuccess = false;
        }
        else {

            $isUploadSuccess = true;
        }
        if($isUploadSuccess && $isSuccess){
            
            require_once('../Model/InsertEducationModel.php');
            header("location:../../index.php");
        }
        
    }

function cleanInput($data)
{
    $id = htmlspecialchars($data);
    $id = stripslashes($data);
    $id = trim($data);

    return $data;
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CV | Alban Okoby</title>
    <link rel="stylesheet" href="../css/Admin.css">
</head>
<body>
    <form class="form" role="form" method="post" action="InsertEducation.php">
        <div class="form-group">
            <label for="annee">Année :</label>
            <input class="form-control" type="text" id="annee" name="annee" placeholder="Ex: créa de logo" value="<?php echo $annee; ?>"> </input> 
            <span class="help-inline"><?php echo $anneeError; ?></span>
        </div>
        <div class="form-group">
            <label for="post">Post Occupé :</label>
            <input type="text" name="post" id="post">
            <span class="help-inline"><?php echo $postError ;?></span>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="textarea" name="description" id="description">
            <span class="help-inline"><?php echo $desciptionError ;?></span>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Ajouter</button>
            <a href="index.php" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
        </div>
    </form>
</body>
</html>