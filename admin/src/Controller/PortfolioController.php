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
            
            $db = DataBase::connect();
            require_once '../../../src/Model/PortfolioModel.php';
        }
        

    }


function cleanInput($data)
{
    $id = htmlspecialchars($data);
    $id = stripslashes($data);
    $id = trim($data);

    return $data;
}