<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CV | Alban Okoby</title>
    
    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap cdn -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../css/Admin.css">
</head>
<body>
    <div class="container">
        <div class="container-form">

            <div class="theform col-lg-offset-3 col-lg-6 col-lg-offset-3">
                
                <h3 class="text-center mb-4">Ajouter une nouvelle expérience / éducation</h3>
                <form class="form" role="form" method="post" action="InsertEducation.php">
                    <div class="form-group">
                        <label for="annee">Année :</label>
                        <input class="form-control" type="text" id="annee" name="annee" placeholder="Ex: Juin 2022" value="<?php echo $annee; ?>"> </input> 
                        <span class="help-inline"><?php echo $anneeError; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="post">Post(s) Occupé(s)</label>
                        <input type="text" name="post" id="post" class="form-control" placeholder="Ex: Gestionnaire de base de données">
                        <span class="help-inline"><?php echo $postError ;?></span>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea  name="description" id="description" class="form-control" placeholder="Ex: Gestionnaire de base de données" rows="5"> </textarea>
                        <span class="help-inline"><?php echo $desciptionError ;?></span>
                    </div> <br>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary"><span class="fa fa-plus"></span> Ajouter</button>
                        <a href="../../../index.php" class="btn btn-danger">Retour <span class="fa fa-arrow-right"></span> </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>