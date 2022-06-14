<?php
require '../../../../data/database.php';

$projectName = $projectImage = $projectNameError = $projectImageError = "";
$isSuccess = $isValid = true;

    if(!empty($_POST)){

        $projectName = $_POST["project_name"];

        if(empty($projectName)){
            $projectNameError = 'Le nom du projet ne peut être vide !';
            $isSuccess = false;
        }
        if($_FILES["project_img"]["error"] == 4){

            $projectImageError = 'Aucune image trouvée, veuillez en prendre une';
            $isSuccess = false;
        }

        if($isSuccess){

        $projectImage = $_FILES["project_img"]["name"];
        $fileSize = $_FILES["project_img"]["size"];
        $tmpName = $_FILES["project_img"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png', 'jfif', 'gif'];
        $imageExtension = explode('.', $projectImage);
        $imageExtension = strtolower(end($imageExtension));
        if( !in_array($imageExtension, $validImageExtension) ){
            
            $projectImageError = 'Attention ! Seuls les fichiers .jpeg, .png, .jfif, .gif ou .jpg sont autorisées';
            $isValid = false;
        }
        if($fileSize > 2097152){

            $projectImageError = 'La taille de l\'image ne doit dépasser 2Mo pour la rapidité de votre application,  choississez-en une autre';
            $isValid = false;
        // <script>
        //     alert('Image Size Is Too Large');
        // </script>
        
        }
        if($isSuccess && $isValid){
    
            $imageDir ='../../../../public/assets/image/';
            $imageFile = $imageDir . basename($projectImage);
                // Move image into good folder
            $moveImage = move_uploaded_file($_FILES['project_img']['tmp_name'], $imageFile);
           
            require '../../Model/InsertPortfolioModel.php';
      echo
      "
      <script>
        alert('Projet ajouté avec succès ');
      </script>
      ";
    }
  }
}
?>
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
                <form class="form" role="form" method="post" action="InsertPortfolioController.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="projectName">Nom du projet :</label>
                        <input class="form-control" type="text" id="projectName" name="project_name" placeholder="Ex: Application de boutique" value="<?php echo $projectName; ?>"> </input>  
                        <span class="help-inline"><?php echo $projectNameError; ?></span> 
                    </div>
                    <div class="form-group">
                        <label for="image">Sélectionner l'image :</label>
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
