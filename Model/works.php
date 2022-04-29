<?=

require 'database.php';

$sqlWork = 'SELECT * FROM portfolio';
    $workStatement = $connect->prepare($sqlWork);
    $workStatement->execute();
    $row = $workStatement->fetchAll();
     
