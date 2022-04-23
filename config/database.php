<?php
    
    $hoostName = "localhost";
    $dbName = "moncv";
    $userName = "root";
    $userPassword = "";

  try{
    $connect = new PDO("mysql:host=$hoostName; dbname=$dbName", $userName, $userPassword);
      
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
     echo '<i style="color:green; font-size:4rem">Connexion établie avec succès !</i>';
        
    }  
    catch(PDOException $error){
        echo '<i style="color:red; font-size:3rem"> Connection failed:' .$error->getMessage() .'</i>';
    }
    
?>
