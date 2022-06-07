<?php

    require '../../../data/database.php';

    $projectName = $projectImage = $projectNameError = $projectImageError = "";

    $isSuccess = $isUploadSuccess = true;

    if(!empty($_POST)){
        $projectName    = cleanInput($_POST['project_name']);
        $projectImage   = cleanInput($_FILES['project_img']['project_name']);
        $imagePath      = '../../../public/assets/image/'.basename($projectImage); 
        $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
        $isSuccess      = true;
        $isUploadSuccess = false;

        if(empty($projectName)){
            $projectNameError = 'Le nom ne peut être vide !';
            $isSuccess = false;
        }
        if(empty($projetImage)){
            $projectImageError = 'Attention ! mettez une image.';
            $isSuccess = false;
        }
        else {

            $isUploadSuccess = true;

            if($imageExtension !="jpg" && $imageExtension !="png" && $imageExtension !="jpeg" && $imageExtension !="jfif" ){

                $projectImageError = "Attention ! seules les images en .jpg, .png, .jpeg, .gif ou .jfif sont autorisées";
                $isSuccess = false;
            }

            if($_FILES['project_img']['size'] > 2048000){
                $projectImageError = "La taille de l'image ne doit pas dépasser 2Mo, pour la rapidité de l'application, merci d'en prendre une autre";
                $isSuccess = false;
            }
            if($isUploadSuccess){

                if(!move_uploaded_file($_FILES['project_img']['tmp_name'], $imagePath)){
                    $projectImageError = "Un souci avec le téléchargement de l'image, vérifier votre connexion puis reéssayez";
                    $isUploadSuccess = false; 
                }
            }
        }
        if($isUploadSuccess && $isSuccess){
            
            $connect = DataBase::connect();
            $portfolioInsert = $connect->prepare('INSERT INTO portfolio(project_name, project_img) VALUES(:project_name, :project_img)');
            $portfolioInsert->execute(array(
                                            'project_name' => $projectName, 'project_img' => $projectImage));

            DataBase::disconnect();
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
    <form class="form" role="form" method="post" enctype="multipart/form-data" action="">
        <div class="form-group">
            <label>Nom du projet :</label>
            <input class="form-control" type="text" id="name" name="project_name" placeholder="Ex: créa de logo" value="<?php echo $projectName; ?>"> </input> 
            <span class="help-inline"><?php echo $projectNameError; ?></span>
        </div>
        <div class="form-group">
            <label for="image">Sélectionner une image:</label>
            <input type="file" name="project_img" id="image">
            <span class="help-inline"><?php echo $projectImageError ;?></span>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Ajouter</button>
            <a href="index.php" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
        </div>
    </form>
</body>
</html>