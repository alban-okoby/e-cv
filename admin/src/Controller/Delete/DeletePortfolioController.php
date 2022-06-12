<?php 
    require_once('../../../../data/database.php');

    if(!empty($_GET['id'])){

        $id = cleanInput($_GET['id']);
    }

    if(!empty($_POST['id'])){

        $id = cleanInput($_POST['id']);
        // Model script
        require '../../Model/DeletePortfolioModel.php';

        header("location:../../../index.php");
    }
    
    function cleanInput($data) 
    {
        $id = htmlspecialchars($data);
        $id = stripslashes($data);
        $id = trim($data);
        return $data;
    }

    require '../../View/DeletePortfolioForm.php';

    ?>
    

