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
			<h1><strong>Liste des éléments </strong><a href="inserttest.php?id=1" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span>Ajouter</a> <a href="../../index.php" class="btn btn-warning btn-lg"></span>Aller à l'acceuil</a></h1>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Description</th>
						<th>Prix (FCFA)</th>
						<th>Catégorie</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					require 'database.php';
					$db = DataBase::connect();
					$statement = $db->query('SELECT items.id, items.name, items.description, items.price, categories.name AS 						category
											 FROM items LEFT JOIN categories ON items.category = categories.id
											 ORDER by items.id DESC LIMIT 20');
					while ($item = $statement -> fetch()) {
						echo
						'<tr>';
						echo '<td>'.$item['name'].'</td>';
						echo '<td>'.$item['description'].'</td>';
						echo '<td>'.number_format((float)$item['price'],3,',','').'</td>';
						echo '<td>'.$item['category'].'</td>';
						echo '<td width="300">';
						echo '<a class="btn btn-default" href="view.php?id='.$item['id'].'" ><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
						echo "  ";
						echo '<a class="btn btn-primary" href="update.php?id='.$item['id'].'" ><span class="glyphicon glyphicon-pencil"></span> Modifier</a>';
						echo "  ";
						echo '<a class="btn btn-danger" href="delete.php?id='.$item['id'].'" ><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
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