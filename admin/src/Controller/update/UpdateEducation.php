<?php

    require '../../../data/database.php';

    $isSuccess = $isValid = true;

    if(!empty($_GET['id'])){

        $id = cleanInput($_GET['id']);

    }

    $anneeError = $postError = $desciptionError = $annee = $post = $description = "";


    if(!empty($_POST)){
        $annee          = cleanInput($_POST['annee']);
        $post           = cleanInput($_POST['post']);
        $description    = cleanInput($_POST['description']);
       
        $isSuccess      = true;
        $isValid = false;

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

            $isValid = true;
        }
        if( $isSuccess && $isValid ){
            
            require_once('../Model/UpdateEducationModel.php');
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