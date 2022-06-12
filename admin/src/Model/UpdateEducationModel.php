<?php

$connect = DataBase::connect();
            $educationUpdate = $connect->prepare("INSERT INTO education(annee, post, description, position) WHERE id= ? VALUES(:annee, :post, :description, :position)");
            $educationUpdate->execute(array(
                                            'annee' => $annee,
                                            'post' => $post,
                                            'description' => $description,
                                            'position' => $position,
                                        )
                                    );
    

DataBase::disconnect();