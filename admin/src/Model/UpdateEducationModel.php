<?php

$connect = DataBase::connect();
            $educationUpdate = $connect->prepare("INSERT INTO education(id, annee, post, description) WHERE id VALUES(:id, :annee, :post, :description)");
            $educationUpdate->execute(array(
                                            'annee' => $annee,
                                            'post' => $post,
                                            'description' => $description
                                        )
                                    );
    

DataBase::disconnect();