<?php

require '../../../../data/database.php';

$projectName = $projectImage = $projectNameError = $projectImageError = $imageCopy = "";

$isSuccess = $isUploadSuccess = true;

    
    if((!empty($_POST))){
        
        $projectName    = cleanInput($_POST['project_name']);

        $projectImage   = cleanInput($_FILES['project_img']['tmp_name']);
        $imagePath      = '../../../../../public/assets/image/'.basename($imageCopy); 
        $imageExtension = pathinfo($imagePath, PATHINFO_EXTENSION);
        
        var_dump($_FILES);

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
                header("location:../../../index.php");
            }
            
        }
        
        function cleanInput($data)
        {
            $id = htmlspecialchars($data);
            $id = stripslashes($data);
            $id = trim($data);

            return $data;
        }

    require '../../View/PortfolioInsertForm.php'; 

?>