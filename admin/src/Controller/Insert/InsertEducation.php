<?php

    require '../../../../data/database.php';

    $anneeError = $postError = $descriptionError = $annee = $post = $description = $position = $positionError = $test =  "";
    $isnotTest = false;

    $isSuccess = $isValid = true;
    
    if(!empty($_POST)){
        $annee          = cleanInput($_POST['annee']);
        $post           = cleanInput($_POST['post']);
        $description    = cleanInput($_POST['description']);
        $position       = cleanInput($_POST['position']);
       
        $isSuccess      = true;
        $isValid = false;
        
        if(empty($annee) || empty($post) || empty($description)){
            
            $isSuccess = false;

            if(empty($annee)){
                $anneeError = '<br>L\'année ne peut être vide !';
            }
            if(empty($description)){
                $descriptionError = '<br> Veuillez remplir la description';
            }
            if(empty($post)){
                $postError = '<br> Attention ! remplissez le post';
            }
        }
        if((!empty($annee)) && (!empty($post)) && (!empty($description))){

            $isSuccess = $isValid = true;
            if($isValid && $isSuccess){
                
                require_once('../../Model/InsertEducationModel.php');
                header("location:../../../index.php");
            }
        }
        
    }

    function cleanInput($data)
{
    $id = trim($data);
    $id = stripslashes($data);
    $id = htmlspecialchars($data);

    return $data;
}

require_once('../../View/EducationInsertForm.php');