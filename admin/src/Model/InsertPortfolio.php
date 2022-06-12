<?php

// $connect = DataBase::connect();
// // $projectName = $projectImage = '';

// $portfolioInsert = $connect->prepare('INSERT INTO portfolio(project_name, project_img) VALUES(:project_name, :project_img)');

// $portfolioInsert->execute(array(
//                                 'project_name' => $projectName,
//                                 'project_img' => $projectImage));

// DataBase::disconnect();

$connect = DataBase::connect();
            $educationInsert = $connect->prepare("INSERT INTO portfolio('', project_name, project_img) VALUES(:project_name, :project_img)");
            $educationInsert->execute(array(
                                            'project_name' => $projectName,
                                            'project_img' => $projectImage
                                        ));

            DataBase::disconnect();