<?php 
    require 'database.php'; 

    $sqlAbout = 'SELECT * FROM about';
    $aboutStatement = $connect->prepare($sqlAbout);
    $aboutStatement->execute();
    $row = $aboutStatement->fetchAll();