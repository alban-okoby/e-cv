<?php

    $db = DataBase::connect();

    $statement = $db->prepare("DELETE FROM portfolio WHERE id = ?");
    $statement->execute(array($id));

    DataBase::disconnect();
