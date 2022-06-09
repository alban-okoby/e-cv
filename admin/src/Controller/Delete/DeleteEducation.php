<?php 
    require_once('../../../data/database.php');

    if(!empty($_GET['id'])){

        $id = cleanInput($_GET['id']);
    }

    // Model script
    require_once('../Model/DeleteEducationModel.php');
    
    function cleanInput($data) 
    {
        $id = htmlspecialchars($data);
        $id = stripslashes($data);
        $id = trim($data);
        return $data;
    }

    ?>
