<?php

    $db = DataBase::connect();

    $statement = $db->prepare("DELETE FROM education WHERE id = ?");
    $statement->execute(array($id));

    DataBase::disconnect();
