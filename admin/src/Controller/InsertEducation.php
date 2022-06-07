<?php

    require '../../../data/database.php';

    $anneeError = $postError = $desciptionError = $annee = $post = $description = "";

    $isSuccess = $isUploadSuccess = true;

    if(!empty($_POST)){
        $annee          = cleanInput($_POST['annee']);
        $post           = cleanInput($_POST['post']);
        $description    = cleanInput($_POST['description']);
       
        $isSuccess      = true;
        $isUploadSuccess = false;

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

            $isUploadSuccess = true;
        }
        if($isUploadSuccess && $isSuccess){
            
            require_once('../Model/InsertEducationModel.php');
            header("location:../../index.php");
        }
        
    }

function cleanInput($data)
{
    $id = htmlspecialchars($data);
    $id = stripslashes($data);
    $id = trim($data);

    return $data;
}

require_once('../View/EducationInsertForm.php');