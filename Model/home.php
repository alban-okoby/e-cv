<?=

require 'database.php';

$sqlHome = 'SELECT * FROM home';
    $homeStatement = $connect->prepare($sqlHome);
    $homeStatement->execute();
    $row = $homeStatement->fetchAll();
     
