<?php 

    
    $connect = DataBase::connect();

    $sqlEducation = 'SELECT * FROM education ORDER BY position ASC LIMIT 12';
    $educationStatement = $connect->query($sqlEducation);
    $educationStatement->execute();
    $rows = $educationStatement->fetchAll();

    
    // // Insert statement
    // $aboutStatement = $connect->prepare("INSERT INTO about (title, name, age, qualification, post, langue, button, annee_exp, projet_termine, clt_satisfait, formations_organisees, certification) 
    // VALUES (:title, :name, :age, :qualification, :post, :langue, :button, :annee_exp, :projet_termine, :clt_satisfait, :formations_organisees, :certification)");
    // $aboutStatement->execute(array(
    //                                 ':title' => $title,
    //                                 ':name' => $name,
    //                                 ':age' => $age,
    //                                 ':qualification' => $qualification,
    //                                 ':post' => $post,
    //                                 ':langue' => $langue,
    //                                 ':button' => $button,
    //                                 ':annee_exp' => $annee_exp,
    //                                 ':projet_termine' => $projet_termine,
    //                                 ':clt_satisfait' => $clt_satisfait,
    //                                 ':formations_organisees' => $formations_organisees,
    //                                 ':certification' => $certification
    // ));

DataBase::disconnect();


