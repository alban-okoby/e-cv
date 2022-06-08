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