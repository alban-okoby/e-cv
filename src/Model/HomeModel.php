<?php

$connect = DataBase::connect();

$sqlHome = 'SELECT * FROM home';
    $homeStatement = $connect->prepare($sqlHome);
    $homeStatement->execute();
    $row = $homeStatement->fetchAll();

DataBase::disconnect();
     
