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
	</div>
</body>
</html>