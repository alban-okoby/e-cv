<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin | ALBAN OKOBY Portfolio</title>
    
    <!-- CSS cdn -->
        <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <!-- customize css -->
    <link rel="stylesheet" href="./src/css/Admin.css">
</head>
<body>
<div class="container">
	<div class="col-md-offset-2"></div>	
	<div class="container container-admin">
		<div class="row">
			<h1><strong>Votre espace admin </strong><a href="inserttest.php?id=1" class="btn btn-success btn-lg"><span class="fa fa-plus"></span>Ajouter</a> <a href="../../index.php" class="btn btn-warning btn-lg"></span>Aller à l'acceuil</a></h1>
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
                        require '../data/database.php';
                        $connexion = DataBase::connect();
                        require_once('../src/Model/HomeModel.php');
                        foreach ($row as $home) {
                            echo
                            '<tr>';
                            echo '<td>'.$home['title'].'</td>';
                            echo '<td>'.$home['name'].'</td>';
                            echo '<td>'.$home['post'].'</td>';
                            echo '<td>'.$home['description'].'</td>';
                            echo '<td>'.$home['button'].'</td>';
                            echo '<td width="300">';
                            echo '<a class="btn btn-default" href="view.php?id='.$home['id'].'" ><span class="fas fa-eye"></span> Voir</a>';
                            echo "  ";
                            echo '<a class="btn btn-primary" href="update.php?id='.$home['id'].'" ><span class="fa fa-pencil"></span> Modifier</a>';
                            echo "  ";
                            echo '<a class="btn btn-danger" href="delete.php?id='.$home['id'].'" ><span class="fa fa-remove"></span> Supprimer</a>';
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
                        require_once('../src/Model/AboutModel.php');
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
                            echo '<a class="btn btn-default" href="view.php?id='.$home['id'].'" ><span class="fa fa-eye"></span> Voir</a>';
                            echo "  ";
                            echo '<a class="btn btn-primary" href="update.php?id='.$home['id'].'" ><span class="fa fa-pencil"></span> Modifier</a>';
                            echo "  ";
                            echo '<a class="btn btn-danger" href="delete.php?id='.$home['id'].'" ><span class="fa fa-remove"></span> Supprimer</a>';
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
                                    echo '<a class="btn btn-default" href="view.php?id='.$home['id'].'" ><span class="fas fa-eye"></span> Voir</a>';
                                    echo "  ";
                                    echo '<a class="btn btn-primary" href="update.php?id='.$home['id'].'" ><span class="fa fa-pencil"></span> Modifier</a>';
                                    echo "  ";
                                    echo '<a class="btn btn-danger" href="delete.php?id='.$home['id'].'" ><span class="fa fa-remove"></span> Supprimer</a>';
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
        <div class="education">
                <h2>Education / Experiences </h2>
                <a href="./src/Controller/InsertEducation.php" class="btn btn-success">New education/exp</a>
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
                        require_once('../src/Model/EducationModel.php');
                        foreach ($rows as $education) {
                            echo
                            '<tr>';
                            echo '<td>'.$education['annee'].'</td>';
                            echo '<td>'.$education['post'].'</td>';
                            echo '<td>'.$education['description'].'</td>';
                            echo '<td width="300">';
                            echo '<a class="btn btn-default" href="view.php?id='.$education['id'].'" ><span class="fas fa-eye"></span> Voir</a>';
                            echo "  ";
                            echo '<a class="btn btn-primary" href="update.php?id='.$education['id'].'" ><span class="fa fa-pencil"></span> Modifier</a>';
                            echo "  ";
                            echo '<a class="btn btn-danger" href="delete.php?id='.$education['id'].'" ><span class="fa fa-remove"></span> Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';

                        }
                        DataBase::disconnect();
                        ?>

                    </tbody>
                </table>
            </div>
            <div class="portfolio">
                <h2>Portfolio</h2>
                <a href="./src/Controller/InserPortfolio.php" class="btn btn-success">New project</a>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Nom du projet </th>
                            <th>Image du projet</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $connexion = DataBase::connect();
                        require_once('../src/Model/PortfolioModel.php');
                        foreach ($row as $portfolio) {
                            echo
                            '<tr>';
                            echo '<td>'.$portfolio['project_name'].'</td>';
                            ?>
                         <td><img class="portfolio_img" src="../public/assets/image/<?= $portfolio['project_img'] ?>"></td>;
                            <?php
                            echo '<td width="300">';
                            echo '<a class="btn btn-default" href="view.php?id='.$education['id'].'" ><span class="fas fa-eye"></span> Voir</a>';
                            echo "  ";
                            echo '<a class="btn btn-primary" href="update.php?id='.$education['id'].'" ><span class="fa fa-pencil"></span> Modifier</a>';
                            echo "  ";
                            echo '<a class="btn btn-danger" href="delete.php?id='.$education['id'].'" ><span class="fa fa-remove"></span> Supprimer</a>';
                            echo '</td>';
                            echo '</tr>';

                        }
                        DataBase::disconnect();
                        ?>

                    </tbody>
                </table>
            </div>
    </div>

    <!-- JS cdn -->
        <!-- font awesome cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>