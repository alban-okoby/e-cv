<?php

$connect = DataBase::connect();

$portfolioInsert = $connect->prepare('INSERT INTO portfolio(project_name, project_img) VALUES(?, ?)');

$portfolioInsert->execute(array($projectName, $projectImage));

DataBase::disconnect();