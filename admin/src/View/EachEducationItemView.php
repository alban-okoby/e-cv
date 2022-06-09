<?php 
    require_once('../../../data/database.php');

    if(!empty($_GET['id'])){

        $id = cleanInput($_GET['id']);
    }

    // Model script
    require_once('../Model/ViewEducationModel.php');
    
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
    <?php
        include("../config/links/CdnCSs.php");
    ?>
</head>
<body>
    <div class="container-fluid">

        <form class="form" method="get">
            <div class="form-group">
                <label for="annee">Année :</label>
                <?= $education['annee'] ;?>
            </div>
            <div class="form-group">
                <label for="post">Post Occupé :</label>
                <?= $education['post'] ;?>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <?= $education['description'] ;?>
            </div>
            <div class="form-actions">
                <a href="../../" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span> Retour 
                <i class="fa fa-arrow-right"></i>
            </a>
            </div>
        </form>

    </div>
</body>
</html>