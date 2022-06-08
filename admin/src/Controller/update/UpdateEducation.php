<?php

    require '../../../../data/database.php';

    $isSuccess = $isValid = true;

    if(!empty($_GET['id'])){

        $id = cleanInput($_GET['id']);

    }

    $anneeError = $postError = $desciptionError = $annee = $post = $description = "";


    if(!empty($_POST)){
        $annee          = cleanInput($_POST['annee']);
        $post           = cleanInput($_POST['post']);
        $description    = cleanInput($_POST['description']);
       
        $isSuccess      = true;
        $isValid = false;

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

            $isValid = true;
        }
        if( $isSuccess && $isValid ){
            
            $connect = DataBase::connect();
            $educationUpdate = $connect->prepare("INSERT INTO education(id, annee, post, description) WHERE id VALUES(:id, :annee, :post, :description)");
            $educationUpdate->execute(array(
                                            'id' => $id,
                                            'annee' => $annee,
                                            'post' => $post,
                                            'description' => $description
                                        )
                                    );
    

            DataBase::disconnect();

            header("location:../../index.php");
        }
        else {
            $connect = DataBase::connect();
            $education= $connect->prepare("SELECT id, annee, post, description FROM education WHERE id=?");
            $education->execute(array($id));
            $educationUpdate = $education->fetch();
            $annee = $education['annee'];
            $post = $education['post'];
            $description = $education['description'];
            
            DataBase::disconnect();
        }
        
    }
    // else {
        
    // }

function cleanInput($data)
{
    $id = htmlspecialchars($data);
    $id = stripslashes($data);
    $id = trim($data);

    return $data;
}

// require_once('../../View/EducationUpdateForm.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CV | Modifier</title>
    <link rel="stylesheet" href="../css/Admin.css">
    <link rel="stylesheet" href="../config/links/CdnCss.php">
</head>
<body>
    <form class="form" role="form" method="post" action="UpdateEducation.php">
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
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Modifier</button>
            <a href="../../../index.php" class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span> Annuler</a>
        </div>
    </form>
</body>
</html>