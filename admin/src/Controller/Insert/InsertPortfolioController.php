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
        window.location.href = '../../../index.php';
      </script>
      ";
    //   header("refresh:1;../../../index.php");
    }
  }
}

require_once('../../View/PortfolioInsertForm.php');
?>