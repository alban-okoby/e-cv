<?php

$connect = DataBase::connect();
            $educationInsert = $connect->prepare("INSERT INTO education(annee, post, description, position) VALUES(:annee, :post, :description, :position)");
            $educationInsert->execute(array(
                                            'annee' => $annee,
                                            'post' => $post,
                                            'description' => $description,
                                            'position' => $position));

            DataBase::disconnect();