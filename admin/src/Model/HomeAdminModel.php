<?php 

    
    $connect = DataBase::connect();

    $sqlEducation = 'SELECT * FROM education ORDER BY id DESC LIMIT 12';
    $educationStatement = $connect->query($sqlEducation);
    $educationStatement->execute();
    $rows = $educationStatement->fetchAll();

    DataBase::disconnect();