<?php

$connect = DataBase::connect();
            $educationInsert = $connect->prepare("INSERT INTO education(annee, post, description) VALUES(:annee, :post, :description)");
            $educationInsert->execute(array(
                                            'annee' => $annee,
                                            'post' => $post,
                                            'description' => $description));

            DataBase::disconnect();