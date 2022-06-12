<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CV | delete</title>
    <?= require "../../config/links/CdnCss.php"; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
</head>
<body>

    <div class="container container-admin">
        <div class="row">
            <h1><strong style="font-family:arial;"> Supprimer un élément  </strong><span class="glyphicon glyphicon-cross glyphicon-lg"></span></a></h1>
            <form class="form" role="form" action="DeletePortfolioController.php" method="post">
                <p class="alert alert-warning" style="color:black">Etes-vous sûr de vouloir supprimer cet élément ? <small>Cette action est irréversible !</small></p>
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <div class="form-actions">
                    <button type="submit" class="btn btn-danger"><span class=""></span> Oui</button>
                    <a href="../../../" class="btn btn-default"><span class="glyphicon glyphicon"></span> Non</a>
                </div>
            </form>
        </div>
    </div>

    <?php require_once('../../config/links/CdnJS.php'); ?>

    
</body>
</html>