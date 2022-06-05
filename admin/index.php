<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin | ALBAN OKOBY Portfolio</title>
</head>
<body>
<div class="container">
	<div class="col-md-offset-2"></div>	
	<div class="container container-admin">
		<div class="row">
			<h1><strong>Votre espace admin </strong><a href="inserttest.php?id=1" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span>Ajouter</a> <a href="../../index.php" class="btn btn-warning btn-lg"></span>Aller à l'acceuil</a></h1>
            <div class="home">
                <h2>Section Home</h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Salutation</th>
                            <th>Nom & Prenom(s)</th>
                            <th>Emploi</th>
                            <th>Citation</th>
                            <th>Button</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require '../src/Controller/database.php';
                        $connexion = DataBase::connect();
                        require_once('../src/Controller/homeController.php');
                        foreach ($row as $home) {
                            echo
                            '<tr>';
                            echo '<td>'.$home['title'].'</td>';
                            echo '<td>'.$home['name'].'</td>';
                            echo '<td>'.$home['post'].'</td>';
                            echo '<td>'.$home['description'].'</td>';
                            echo '<td>'.$home['button'].'</td>';
                            echo '<td width="300">';
                            echo '<a class="btn btn-default" href="view.php?id='.$home['id'].'" ><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                            echo "  ";
                            echo '<a class="btn btn-primary" href="update.php?id='.$home['id'].'" ><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
                            echo "  ";
                            echo '<a class="btn btn-danger" href="delete.php?id='.$home['id'].'" ><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';

                        }
                        DataBase::disconnect();
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="about">
                <h2>Section About</h2>
                <?php
                        $connexion = DataBase::connect();
                        require_once('../src/Controller/AboutController.php');
                        foreach ($row as $about) {
                    ?>
                <table class="table table-striped table-bordered">
                    <div class="first">

                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Nom & Prenom(s)</th>
                                <th>Age</th>
                                <th>Qualification</th>
                                <th>Emploi(s)</th>
                                <th>Langue(s)</th>
                                <th>Télécharger</th>
                                <th>Actions</th>
                        </tr>
				    </thead>
                    <tbody>
                        <?php
                            echo
                            '<tr>';
                            echo '<td>'.$about['title'].'</td>';
                            echo '<td>'.$about['name'].'</td>';
                            echo '<td>'.$about['age'].'</td>';
                            echo '<td>'.$about['qualification'].'</td>';
                            echo '<td>'.$about['post'].'</td>';
                            echo '<td>'.$about['langue'].'</td>';
                            echo '<td>'.$about['button'].'</td>';
                            echo '<td width="300">';
                            echo '<a class="btn btn-default" href="view.php?id='.$home['id'].'" ><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                            echo "  ";
                            echo '<a class="btn btn-primary" href="update.php?id='.$home['id'].'" ><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
                            echo "  ";
                            echo '<a class="btn btn-danger" href="delete.php?id='.$home['id'].'" ><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';

                        ?>
                        </tbody>
                    </table>
                </div>

                <div class="second">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Annee_exp</th>
                                <th>Projet Achevé(s)</th>
                                <th>Client(s) Satisfait(s)</th>
                                <th>Formations Dispensées</th>
                                <th>certification</th>
                                <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    echo
                                    '<tr>';
                                    echo '<td>'.$about['annee_exp'].'</td>';
                                    echo '<td>'.$about['projet_termine'].'</td>';
                                    echo '<td>'.$about['clt_satisfait'].'</td>';
                                    echo '<td>'.$about['formations_organisees'].'</td>';
                                    echo '<td>'.$about['certification'].'</td>';
                                    echo '<td width="300">';
                                    echo '<a class="btn btn-default" href="view.php?id='.$home['id'].'" ><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                                    echo "  ";
                                    echo '<a class="btn btn-primary" href="update.php?id='.$home['id'].'" ><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
                                    echo "  ";
                                    echo '<a class="btn btn-danger" href="delete.php?id='.$home['id'].'" ><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                                    echo '</td>';
                                    echo '</tr><br>';
    
                                ?>
    
                            </tbody>
                    </table>
                </div>
                <?php
                    }
                ?>        
        </div>
        <div class="home">
                <h2>Education / Experiences </h2>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Années</th>
                            <th>Post(s) ou Niveau d'étude</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $connexion = DataBase::connect();
                        require_once('../src/Controller/EducationController.php');
                        foreach ($rows as $education) {
                            echo
                            '<tr>';
                            echo '<td>'.$education['annee'].'</td>';
                            echo '<td>'.$education['post'].'</td>';
                            echo '<td>'.$education['description'].'</td>';
                            echo '<td width="300">';
                            echo '<a class="btn btn-default" href="view.php?id='.$education['id'].'" ><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                            echo "  ";
                            echo '<a class="btn btn-primary" href="update.php?id='.$education['id'].'" ><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
                            echo "  ";
                            echo '<a class="btn btn-danger" href="delete.php?id='.$education['id'].'" ><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';

                        }
                        DataBase::disconnect();
                        ?>

                    </tbody>
                </table>
            </div>
    </div>
</body>
</html>