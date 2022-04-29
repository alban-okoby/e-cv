<?php 
    require 'database.php'; 

    $sqlEducation = 'SELECT * FROM education ORDER BY id';
    $educationStatement = $connect->query($sqlEducation);
    $educationStatement->execute();
    $rows = $educationStatement->fetchAll();
