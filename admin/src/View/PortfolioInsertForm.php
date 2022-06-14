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
                
                <h3 class="text-center mb-4">Ajouter un nouveau projet </h3>
                <div class="project-container">
                    <img src="../../../../public/assets/image/project.jpg" alt="e-cv un nouveau projet"/>
                </div>
                <form class="form" role="form" method="post" action="InsertPortfolioController.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="projectName">Nom du projet<i class="help-inline">*</i></label>
                        <input class="form-control" type="text" id="projectName" name="project_name" placeholder="Ex: Application de boutique" value="<?php echo $projectName; ?>"> </input>  
                        <span class="help-inline"><?php echo $projectNameError; ?></span> 
                    </div>
                    <div class="form-group">
                        <label for="image">Sélectionner l'image<i class="help-inline">*</i></label>
                        <input type="file" name="project_img" id="image"> <br>
                        <!-- <i class="fas fa-image" style="color:green; font-size:2rem"></i> -->
                        <span class="help-inline"><?php echo $projectImageError ;?></span>
                    </div>
                   
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="save_project"><span class="fa fa-plus"></span> Ajouter</button>
                        <a href="../../../index.php" class="btn btn-default">Annuler <span class="fa fa-arrow-right"></span> </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
