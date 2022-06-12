<?php

require '../../../../data/database.php';

$projectName = $projectImage = $projectNameError = $projectImageError = $imageCopy = "";

$isSuccess = $isUploadSuccess = true;

if(!empty($_POST)){

    $projectImage = cleanInput($_POST['project_name']);
    
    if($_FILES['project_img']['error'] == 4){

        $projectImageError = 'L\'image n\'existe pas'; 
    }else{

        $imageName  = $_FILES['project_img']['name'];
        $imageSize  = $_FILES['project_img']['size'];
        $tmpName    = $_FILES['project_img']['tmp_name'];

        $validImageExtension = ['jpg', 'jpeg', 'png', 'jfif'];
        $imageExtension      = explode('.', $imageName);
        $imageExtension      = strtolower(end($imageExtension));

        if(!in_array($imageExtension, $validImageExtension)){

            $projectImageError = 'Attention ! seules les images en jpeg, png; jfij ou jpg sont autorisées';

        }else if ($imageSize > 2000000) {

            $projectImageError = 'la taille de l\image ne doit pas dépasser 2Mo, prenez en une nouvelle svp';
        }else{

            $renameImage = uniqid();
            $renameImage .= '.' .$imageExtension;

            move_uploaded_file($tmpName, '../../../../../public/assets/image/' . $renameImage);

            $db = DataBase::connect();

            $portfolioInsert = $db->prepare('INSERT INTO portfolio(project_name, project_img) VALUES(:project_name, :project_img)');
            $portfolioInsert->execute(array(
                'project_name' => $projectName, 'project_img' => $projectImage));
            echo "
                <script>
                    alert('Success');
                </script>
                ";
            DataBase::disconnect();
            
            header("location:../../../index.php");
        }
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