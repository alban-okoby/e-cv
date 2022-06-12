<?php
require '../../../../data/database.php';

$projectName = $projectImage = "";
if(!empty($_POST)){
  $name = $_POST["project_name"];
  if($_FILES["project_img"]["error"] == 4){

    echo
    "<script> alert('Image Does Not Exist'); </script>";
  }
  else{
    $fileName = $_FILES["project_img"]["name"];
    $fileSize = $_FILES["project_img"]["size"];
    $tmpName = $_FILES["project_img"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      // move_uploaded_file($tmpName, '../../../../public/assets/image/' . $newImageName);
      // $conn = DataBase::connect();
      // $query = "INSERT INTO portfolio VALUES('', '$name', '$newImageName')";
      // mysqli_query($conn, $query);
			
$connect = DataBase::connect();
$educationInsert = $connect->prepare("INSERT INTO portfolio(project_name, project_img) VALUES(:project_name, :project_img)");
$educationInsert->execute(array(
																'project_name' => $projectName,
																'project_img' => $projectImage
														));

DataBase::disconnect();
      // require '../../Model/InsertPortfolio.php';
      echo
      "
      <script>
        alert('Successfully Added');
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
  </head>
  <body>
    <form class="" action="test.php" method="post" autocomplete="off" enctype="multipart/form-data">
      <label for="name">Name : </label>
      <input type="text" name="project_name" id = "name" required value=""> <br>
      <label for="image">Image : </label>
      <input type="file" name="project_img" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
      <button type = "submit" name = "submit">Submit</button>
    </form>
    <br>
    <a href="../../../index.php">Data</a>
  </body>
</html>
