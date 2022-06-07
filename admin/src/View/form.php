<?php 
    require '../Controller/PortfolioController.php';
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
    <form class="form" role="form" method="post" enctype="multipart/form-data" action="../Controller/PortfolioController.php">
        <div class="form-group">
            <label>Nom du projet :</label>
            <input class="form-control" type="text" id="name" name="project_name" placeholder="Ex: créa de logo" value="<?php echo $projectName; ?>"> </input> 
            <span class="help-inline"><?php echo $preojectNameError; ?></span>
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