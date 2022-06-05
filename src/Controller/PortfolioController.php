<?php

$connect = DataBase::connect();

$sqlWork = 'SELECT * FROM portfolio';
    $workStatement = $connect->prepare($sqlWork);
    $workStatement->execute();
    $row = $workStatement->fetchAll();

DataBase::disconnect();
