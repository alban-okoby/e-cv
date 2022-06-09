<?php

    $db = DataBase::connect();
        $statement = $db->prepare('SELECT education.annee, education.post, education.description FROM education WHERE education.id= ?');
        $statement->execute((array($id)));
        $education = $statement->fetch();
        DataBase::disconnect();
