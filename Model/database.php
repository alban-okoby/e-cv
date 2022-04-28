<?php
  
    $hoostName = "localhost";
    $dbName = "php_portfolio";
    $userName = "root";
    $userPassword = "";

  try{
    $connect = new PDO("mysql:host=$hoostName; dbname=$dbName;charset=utf8", $userName, $userPassword);
      
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
    }  
    catch(PDOException $error){
        echo '<i style="color:red; font-size:3rem"> Connection failed:' .$error->getMessage() .'</i>';
    }
    
