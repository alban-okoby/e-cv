<?php

$connect = DataBase::connect();

$sqlWork = 'SELECT * FROM portfolio';
    $workStatement = $connect->prepare($sqlWork);
    $workStatement->execute();
    $row = $workStatement->fetchAll();

$portfolioInsert = $connect->prepare('INSERT INTO portfolio(project_name, project_img) VALUES(?, ?)');

$portfolioInsert->execute(array($project_name, $project_img));

DataBase::disconnect();
